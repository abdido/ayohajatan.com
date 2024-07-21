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
        dd($request->all());
        $data = $request->all();
        // dd($data);
        // Validate the request data

        // Create a new record in the weddings table
        $wedding = Wedding::create([
            'cust_name' => 'test',
            'guest_name' => $validatedData['guest_name'],
            'participants' => $validatedData['participants'],
            'attendance' => $validatedData['attendance'],
            'created_at' => now(),
            'updated_at' => now(),
            // Add more fields as needed
        ]);
        
        // Save the changes to the database
        $wedding->save();

        // Redirect to a success page or return a response
        // return redirect()->route('/');
        return back()->with('success', 'Data has been saved successfully!');
    }

    public function testConfirmV2() {
        $data = [
            'guest_name' => 'test',
            'attendance' => 1,
            'participants' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        // Create a new record in the weddings table
        $wedding = Wedding::create([
            'cust_name' => 'test',
            'guest_name' => $data['guest_name'],
            'attendance' => $data['attendance'],
            'participants' => $data['participants'],
            'created_at' => $data['created_at'],
            'updated_at' => $data['updated_at'],
            // Add more fields as needed
        ]);

        // dd($wedding);
        $wedding->save();
        
        // Save the changes to the database

        // Redirect to a success page or return a response
        // return redirect()->route('/test');
        return back()->with('success', 'Data has been saved successfully!');
    }
    



    
    // Fungsi Utama
    public function dikanova($guestName = 'Saudara/i') {
        return view('wedding.dika-nova.index', ['guestName' => $guestName]);
    }


}
