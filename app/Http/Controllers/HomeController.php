<?php

namespace App\Http\Controllers;

use App\Models\FoodRecipe;
use App\Models\MealPlan;
use App\Models\Program;
use Illuminate\Http\Request;
use App\Models\Suggestion;

class HomeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = '';
        $programs = Program::all('name', 'photo', 'slug')->sortByDesc('created_at')->take(4);
        $recipes = FoodRecipe::all('name', 'photo', 'slug')->sortByDesc('created_at')->take(4);

        return view('home', [
            'active' => $active,
            'programs' => $programs,
            'mealplans' => $recipes,
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
