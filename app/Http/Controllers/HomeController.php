<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suggestion;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {

        // Validate suggestion form at home page
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'g-recaptcha-response' => 'recaptcha',
        ]);

        // Store data to database
        Suggestion::create($validated);

        // Redirect to home
        $request->session()->flash('home', 'Saran anda telah terkirim.');
        return redirect('/');
    }
}
