<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Notifications\sendReservationNotification;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(Request $request)
    {
        if($request->isMethod('post')) {
            $attributes = request()->validate([
                'type'              => ['required'],
                'persons'           => ['required'],
                'date'              => ['required'],
                'time'              => ['required'],
                'firstname'         => ['required', 'min:3', 'max:255'],
                'lastname'          => ['required', 'min:3', 'max:255'],
                'email'             => ['email', 'required'],
                'phone_number'      => ['required', 'min:10', 'max:10'],
                'comments'          => [],
            ]);

            $attributes['date'] = date('d-m-Y', strtotime($attributes['date']));

            $reservation = Reservation::create($attributes);
            $reservation->notify(new sendReservationNotification($reservation));

            return redirect('/reservation')->with('success', 'Your reservation has been successfully processed, you will receive a confirmation by email.');
        }

        return view('pages.reservation');
    }
}
