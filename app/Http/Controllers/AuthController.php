<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use App\Notifications\sendActivationNotification;
use App\Rules\SpecificDomainsOnly;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Ramsey\Uuid\Uuid;
use App\Http\Services\ActivateServiceController;

class AuthController extends Controller
{
    public function createRegister()
    {
        return view('auth.create');
    }

    public function createLogin()
    {
        return view('auth.login');
    }

    public function createActivate($uuid)
    {
        $user = User::userByUuid($uuid);
        abort_if(!$user, 403);

        return view('auth.activate', compact('user'));
    }

    public function storeActivate(Request $request)
    {
        $user = User::userByUuid($request->uuid);

        $this->validate($request, [
            'streetname' => 'required',
            'house_number' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'phone_number' => 'required|min:10'
        ]);

        $address = new Address;
        $address->streetname   = $request->input('streetname');
        $address->house_number = $request->input('house_number');
        $address->zipcode      = $request->input('zipcode');
        $address->city         = $request->input('city');
        $address->save();

        $type = [
            'user_id' => $user->id,
            'address_id' => $address->id,
            'student_number' => mt_rand(111111, 999999),
            'employee_number' => mt_rand(111111, 999999),
            'photo' => 'none',
            'phone_number' => $request->input('phone_number')
        ];

        $user->activateUser($request->uuid, $type);

        return redirect('login')->with('success', 'Your account has been activated.');
    }

    public function storeRegister()
    {
        $attributes = request()->validate([
            'firstname'             => ['required', 'min:3', 'max:255'],
            'lastname'              => ['required', 'min:3', 'max:255'],
            'email'                 => ['email', 'required', 'unique:users,email', 'min:3', 'max:255', new SpecificDomainsOnly],
            'password'              => ['required', 'min:7', 'max:255'],
        ]);

        $domain = substr($attributes['email'], strpos($attributes['email'], '@') + 1);

        $domains = [
            'student.mboutrecht.nl' => 2,
            'mboutrecht.nl' => 3,
            'georgezuilen.nl' => 4,
        ];

        $user = User::create($attributes);

        $user->user_types_id = array_key_exists($domain, $domains) ? $domains[$domain] : 0;

        $user->activation_token = Uuid::uuid4();
        $user->save();
        $user->notify(new sendActivationNotification($user));

        return redirect('/')->with('success', 'Your account has been created.');
    }

    public function storeLogin()
    {
        $attributes = request()->validate([
            'email'                  => ['email', 'required'],
            'password'               => ['required'],
        ]);

        if (auth()->attempt($attributes)) {

            if(auth()->user()->activation_token) {
                Auth::logout();
                return redirect()->back()->with('error', 'Activate your account');
            }

            session()->regenerate();

            return redirect('app/dashboard')->with('success', 'You are logged in!');
        }

        throw ValidationException::withMessages([
            'email' => 'Your provided credentials could not be verified.'
        ]);
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'Your now logged out.');
    }
}
