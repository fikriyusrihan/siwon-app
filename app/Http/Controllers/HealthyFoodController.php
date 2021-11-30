<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealthyFoodController extends Controller
{
    public function index() {
        return view('healthyfoods.index', [
            'active' => 'healthy_foods',
        ]);
    }
}
