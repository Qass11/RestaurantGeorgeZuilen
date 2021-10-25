<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\sendActivationNotification;
use App\Rules\SpecificDomainsOnly;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Ramsey\Uuid\Uuid;

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

    public function createActivate()
    {
        return view('auth.activate');
    }

    public function storeRegister()
    {
        $attributes = request()->validate([
            'firstname'         => ['required', 'min:3', 'max:255'],
            'lastname'          => ['required', 'min:3', 'max:255'],
            'email'             => ['email', 'required', 'unique:users,email', 'min:3', 'max:255', new SpecificDomainsOnly],
            'password'          => ['required', 'min:7', 'max:255'],
            'activation_token'  => Uuid::uuid4(),
        ]);

        $user = User::create($attributes);
        $user->notify(new sendActivationNotification($user));

        return redirect('/')->with('success', 'Your account has been created.');
    }

    public function storeLogin()
    {
        $attributes = request()->validate([
           'email'          => ['email', 'required'],
           'password'       => ['required'],
        ]);

        if (auth()->attempt($attributes)) {
            session()->regenerate();

            return redirect('/')->with('success', 'You are logged in!');
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
