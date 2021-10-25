<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConfirmAllowedEmailRequest;
use App\Models\User;
use App\Rules\SpecificDomainsOnly;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

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

    public function storeRegister()
    {
        $attributes = request()->validate([
            'firstname'     => ['required', 'min:3', 'max:255'],
            'lastname'      => ['required', 'min:3', 'max:255'],
            'email'         => ['email', 'required', 'unique:users,email', 'min:3', 'max:255', new SpecificDomainsOnly],
            'password'      => ['required', 'min:7', 'max:255'],
        ]);

        User::create($attributes);

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

        // Redirect de gebruiker naar de index met de melding dat het gelukt is.
        return redirect('/')->with('success', 'Your now logged out.');
    }
}
