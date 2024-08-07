<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;


class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function testSendDataToSQLite (Request $request) {
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
            $wedding = Home::create([
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
}
