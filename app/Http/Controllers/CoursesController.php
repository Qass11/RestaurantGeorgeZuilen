<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Subscribe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CoursesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function coursesOverview()
    {
//        hier worden de alle courses data uit de database gehaald
        $courses = Courses::get()->all();
//        hier wordt naar de courses terug gestuurd
        return view('app.courses.overview')->with([
            'courses' => $courses,
        ]);
    }
    public function coursesSubscribe(Request $request)
    {
//        hier wordt de data van de form naar hier gestuurd
//        deze gevraagde data moeten aanwezig tijdens het doorsturen van de form
        if($request->isMethod('post')) {
            $attributes = request()->validate([
                'user_id' => ['required'],
                'courses_id' => ['required'],
            ]);

//            Hier wordt de data die uit de database form weggestuurd naar de database
            $course = Subscribe::create($attributes);
            $course->save();

//            hier gaan we de user table update naar nummer 1 om te cheken of de student heeft een pakket gekzoen of niet
            $user = Auth::User();
            $user->check_course = '1';
            $user->save();

//            hier wordt turg gestuurd met success method
            return redirect('')->with('success', 'You have chosen a course.');
        }
    }
}
