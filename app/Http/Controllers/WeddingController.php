<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeddingController extends Controller
{
    public function index() {
        return view('wedding');
    }
    
    public function dikanova($guestName = "Tuan & Nyonya") {
        return view('wedding.dika-nova.index', ['guestName' => $guestName]);
    }
}
