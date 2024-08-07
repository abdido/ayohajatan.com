<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wedding;

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

    public function testConfirm(Request $request) {
        // dd($request->all());
        try {
            // Validate the request data
            $validatedData = $request->validate([
                'guest_name' => 'required|string|max:255',
                'attendance' => 'required|integer',
                'message' => 'required|string|max:255',
                'participants' => 'required|integer',
            ]);
    
            // Create a new record in the weddings table
            $wedding = Wedding::create([
                'cust_name' => 'test',
                'guest_name' => $validatedData['guest_name'],
                'attendance' => $validatedData['attendance'],
                'message' => $validatedData['message'],
                'participants' => $validatedData['participants'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    
            // Save the changes to the database
            $wedding->save();
    
            // Redirect to a success page or return a response
            return back()->with('success', 'Data has been saved successfully!');
        } catch (\Exception $e) {
            // Handle error and return a response
            return back()->with('error', 'There was an error saving the data: ' . $e->getMessage());
        }
    }



    
    // Fungsi Utama
    public function dikanova($guestName = 'Saudara/i') {
        return view('wedding.dika-nova.index', ['guestName' => $guestName]);
    }


}
