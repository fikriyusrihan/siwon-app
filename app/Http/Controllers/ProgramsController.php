<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    public function index() {

        $active = 'programs';

        return view('programs', [
            'active' => $active,
        ]);
    }
}
