<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeddingController extends Controller
{
    public function index() {
        return view('wedding');
    }
    
    public function dikanova($guestName = "Abdi & Nisa") {
        // return "ini dika nova";
        // return view('wedding.dika-nova.index', ['guestName' => '$guestName]);
        return view('wedding.dika-nova.index', ['guestName' => $guestName]);
    }
}
