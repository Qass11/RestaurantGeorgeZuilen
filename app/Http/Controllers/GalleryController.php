<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {

        $gallery = Gallery::all();
        return view('pages.gallery', compact('gallery'));
    }
}
