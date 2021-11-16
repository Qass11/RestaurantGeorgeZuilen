<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
}
