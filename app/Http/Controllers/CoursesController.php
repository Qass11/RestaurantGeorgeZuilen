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
        $courses = Courses::get()->all();
        return view('app.courses.overview')->with([
            'courses' => $courses,
        ]);
    }
    public function coursesSubscribe(Request $request)
    {
        if($request->isMethod('post')) {
            $attributes = request()->validate([
                'user_id' => ['required'],
                'courses_id' => ['required'],
            ]);

            $course = Subscribe::create($attributes);
            $course->save();

            $user = Auth::User();
            $user->check_course = '1';
            $user->save();

            return redirect('')->with('success', 'You have chosen a course.');
        }

//        Hier geef ik aan om Alleen student emails te laten zien om de docent goed te kunnen kiezen

        elseif (\auth()->user()->user_types_id > 2){
            $emails = User::where('user_types_id', 2)->get('email')->all();
            return view('app.courses.subscribe')->with(['emails' => $emails]);
        }
    }
}
