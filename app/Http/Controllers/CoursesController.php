<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoursesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function coursesOverview()
    {
        $courses = DB::select('select * from courses');
        return view('app.courses.overview', ['courses' => $courses]);
    }
    public function coursesSubscribe(Request $request)
    {
        if($request->isMethod('post')) {
            // Hier je form opbouwen Dani & Mo.
            // Niet verwijderen.
            $request->validate([
                'courses_id' => 'required',
            ]);
            $data = DB::insert('insert into courses_subscribed (user_id, courses_id, created_at, updated_at) values (?, ?, ?, ?)', [auth()->id(),$request['courses_id'], date('Y-m-d H:i:s'), date('Y-m-d H:i:s')]);

            if($data == true){
//              Hier komt de email te staan
                echo 'Goed';
                return view('app.courses.subscribe');
            }
        }
    }
}
