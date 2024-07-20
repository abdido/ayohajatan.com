<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeddingController extends Controller
{
    public function index() {
        return view('wedding');
    }

    // Template Wedding Invitation

    public function template1($guestName = 'Saudara/i') {
        return view('wedding.template1.index', ['guestName' => $guestName]);
    }

    public function test($guestName = 'Saudara/i') {
        return view('wedding.test1.index', ['guestName' => $guestName]);
    }

    
    // Fungsi Utama
    public function dikanova($guestName = 'Saudara/i') {
        return view('wedding.dika-nova.index', ['guestName' => $guestName]);
    }


}
