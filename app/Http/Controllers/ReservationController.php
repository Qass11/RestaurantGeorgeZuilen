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
        /*
         * Als de klant op de button klikt dan maak je het verzoek om alles te vullen.
         */
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
                'advertising'       => ['required'],
            ]);

            /*
             * Dit zorgt er voor dat de ingestuurde datum in de goede Nederlandse manier word verstuurd naar de database: Dag-Maand-Jaar.
             */
            $attributes['date'] = date('d-m-Y', strtotime($attributes['date']));

            $reservation = Reservation::create($attributes);
            $reservation->notify(new sendReservationNotification($reservation));

            /*
             * Zodra de hier check goed uitgevoerd is en da data naar de database is verstuurd en de opdracht is gegeven
             * dat automatische e-mail naar de klant wordt verstuurd, dan wordt de klant  naar de reservering page verstuurd.
             */
            return redirect('/reservation')->with('success', 'Your reservation has been successfully processed, you will receive a confirmation by email.');
        }
        /*
         * Front-end pagina maken voor gebruiker, zodat deze de gemaakte view kan zien.
         */
        return view('pages.reservation');
    }
}
