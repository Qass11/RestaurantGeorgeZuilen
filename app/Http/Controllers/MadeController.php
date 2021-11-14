<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MadeController extends Controller
{
    public function index()
    {
        return view('pages.made');
    }
}
