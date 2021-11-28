<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\ProgramCategory;
use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    public function index()
    {

        $active = 'programs';

        return view('programs.programs', [
            'active' => $active,
        ]);
    }

    public function category(ProgramCategory $category)
    {

        $programs = ProgramCategory::find($category->id)->programs;        
        $data = [
            1 => [
                'title' => 'Program 1 Minggu',
                'description' => 'Ikut berbagai program olahraga yang dapat dilakukan di manapun dengan durasi latihan selama satu minggu.'
            ],
            2 => [
                'title' => 'Program 1 Bulan',
                'description' => 'Dapatkan berbagai program latihan yang  mudah untuk di ikuti dalam durasi selama satu bulan'
            ],
            3 => [
                'title' => 'Program 3 Bulan',
                'description' => 'Ikuti berbagai program olahraga yang dapat dilakukan di manapun dengan durasi latihan selama tiga bulan.'
            ],
        ];

        return view('programs.category', [
            'active' => 'programs',
            'data' => $data[$category->id],
            'programs' => $programs,
        ]);
    }

    public function show(Program $program) {
        $active = 'programs';

        return view('programs.detail', [
            'program' => $program,
            'active' => $active,
        ]);
    }
}
