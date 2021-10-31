<?php

namespace App\Http\Controllers;

use App\Models\MenuCategorie;
use Illuminate\Http\Request;
use App\Models\MenuItems;

class MenuController extends Controller
{
    public function index()
    {
        $categories = MenuCategorie::with('items')->get()->all();

        return view('pages.menu', compact('categories'));
    }
}
