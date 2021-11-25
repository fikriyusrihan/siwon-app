<?php

namespace App\Http\Controllers;

use App\Models\ProgramCategory;
use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    public function index() {

        $active = 'programs';

        return view('programs.programs', [
            'active' => $active,
        ]);
    }

    public function category(ProgramCategory $category) {

        $programs = ProgramCategory::find($category->id)->programs;

        return view('programs.category', [
            'active' => 'programs',
            'programs' => $programs,
        ]);
    }
}
