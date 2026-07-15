<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan; // tambah ini

class FrontController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function catalog()
    {
        $layanans = Layanan::latest()->get(); // ambil semua layanan dari DB
        return view('catalog', compact('layanans'));
    }

    public function about()
    {
        return view('about');
    }

    public function Status()
    {
        return view('status');
    }
}