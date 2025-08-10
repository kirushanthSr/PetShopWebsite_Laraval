<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function submitAppointment(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:30',
            'date'    => 'required|date',
            'message' => 'nullable|string|max:2000',
        ]);

        
        session()->flash('success', 'Appointment requested successfully!');

        return redirect()->route('home');
    }
}
