<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'firstname'     => ['required', 'min:3', 'max:255'],
            'lastname'      => ['required', 'min:3', 'max:255'],
            'email'         => ['email', 'required', 'unique:users,email', 'min:3', 'max:255'],
        ]);

        User::create($attributes);

        return redirect('/');
    }
}
