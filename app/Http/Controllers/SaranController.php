<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suggestion;

class SaranController extends Controller
{
    public function index() {
        $suggestions = Suggestion::all()->sortByDesc('created_at');

        return view('dashboard.saran', [
            'messages' => $suggestions->take(4),
            'suggestions' => $suggestions,
        ]);
    }
}
