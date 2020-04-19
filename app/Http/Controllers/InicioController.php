<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        // dd(auth());
        // dd(auth()->user());
        // dd(auth()->user()->usuario);
        // dd(session()->all());
        return view('inicio');
    }
}
