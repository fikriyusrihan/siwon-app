<?php

namespace App\Http\Controllers;

use App\Models\FoodRecipe;
use Illuminate\Http\Request;

class HealthyFoodController extends Controller
{
    public function index()
    {
        return view('healthyfoods.index', [
            'active' => 'healthy_foods',
        ]);
    }

    public function foodrecipe()
    {

        $recipes = FoodRecipe::paginate(6);
        
        return view('healthyfoods.recipe', [
            'active' => 'healthy_foods',
            'recipes' => $recipes,
        ]);
    }
}
