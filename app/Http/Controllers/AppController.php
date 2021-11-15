<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('app.dashboard');
    }

    public function coursesOverview()
    {
        return view('app.courses.overview');
    }

    public function coursesSubscribe(Request $request)
    {
        if($request->isMethod('post')) {

        }

        return view('app.courses.subscribe');
    }

    public function reservationsOverview()
    {
        return view('app.reservations.overview');
    }

    public function usersOverview()
    {
        $students = User::where('user_types_id', 2)->get()->all();
        $employees = User::whereIn('user_types_id', [3, 4, 5])->get()->all();

        return view('app.users.overview')->with([
            'students' => $students,
            'employees' => $employees,
        ]);
    }
}
