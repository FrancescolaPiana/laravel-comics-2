<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// importo i comic
use App\Models\Comic;

class HomeController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('home', compact('comics'));
    }
}