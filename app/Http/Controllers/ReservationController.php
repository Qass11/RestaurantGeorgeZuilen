<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(Request $request)
    {
        if($request->isMethod('post')) {
            $attributes = request()->validate([
                'type'          => ['required'],
                'persons'          => ['required'],
                'date'          => ['required'],
                'time'          => ['required'],
                'firstname'          => ['required'],
                'lastname'          => ['required'],
                'email'          => ['required'],
                'phone_number'          => ['required'],
                'comments'          => ['required'],
            ]);

            dd($attributes);
        }

        return view('pages.reservation');
    }
}
