<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $berandas = Photo::latest()->take(2)->get();
        return view('landingpage.beranda', compact('berandas'));
    }
}
