<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class AppController extends Controller
{
    /*
    *   Controleer of de gebruiker daadwerkelijk is ingelogd, ben je dit niet word je terug gestuurd naar de algemene website. Dit omdat je dan geen toegang hebt.  
    */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /*
    *   Genereer de view van het dashboard, makkelijk gezegd: Zorg dat de URL werkt om de dashboard te zien met de beschikbare routes.
    */
    public function dashboard()
    {
        return view('app.dashboard');
    }

    /*
    *   Haal alle reseveringen op uit de database en laat deze zien op de pagina.
    */
    public function reservationsOverview()
    {
        /*
        *   Haal alle data op uit de database wat te maken heeft met een reservering. 
        */
        $reservations = Reservation::get()->all();

        /*
        *   Stuur de opgehaalde data naar de front-end met de tag $reservations.  
        */
        return view('app.reservations.overview')->with([
            'reservations' => $reservations,
        ]);
    }

    /*
    *   Haal alle gebruikers op met een bepaalde rol om deze te laten zien op de pagina.
    */
    public function usersOverview()
    {
        /*
        *   Haal specifiek alleen de studenten op, deze beschikken over de type 2. 
        */
        $students = User::where('user_types_id', 2)->get()->all();
        /*
        *   Haal specifiek alleen de medewerkers op, deze beschikken over de types 3, 4 en 5.  
        */
        $employees = User::whereIn('user_types_id', [3, 4, 5])->get()->all();

        /*
        *   Stuur de opgehaalde data naar de front-end met de tag $students en $employees. 
        */
        return view('app.users.overview')->with([
            'students' => $students,
            'employees' => $employees,
        ]);
    }
}
