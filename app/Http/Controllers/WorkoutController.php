<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use App\Models\WorkoutCategory;
use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    public function index()
    {

        $active = 'workout';

        return view('workout.workout', [
            'active' => $active,
        ]);
    }

    public function category(WorkoutCategory $category)
    {

        $workout = WorkoutCategory::find($category->id)->workout;
        $data = [
            1 => [
                'title' => 'Easy Workout',
                'description' => 'Silahkan cari tempat yang nyaman supaya Anda dapat melakukan workout dengan baik. Pilih workout sesuai keinginan
                kemudian ikuti gerakan workout sesuai arahan yang kami sediakan. Selamat berolahraga! Salam sehat!'
            ],
            2 => [
                'title' => 'Medium Workout',
                'description' => 'Silahkan cari tempat yang nyaman supaya Anda dapat melakukan workout dengan baik. Pilih workout sesuai keinginan
                kemudian ikuti gerakan workout sesuai arahan yang kami sediakan. Selamat berolahraga! Salam sehat!'
            ],
            3 => [
                'title' => 'Hard Workout',
                'description' => 'Silahkan cari tempat yang nyaman supaya Anda dapat melakukan workout dengan baik. Pilih workout sesuai keinginan
                kemudian ikuti gerakan workout sesuai arahan yang kami sediakan. Selamat berolahraga! Salam sehat!'
            ],
        ];

        return view('workout.category', [
            'active' => 'workout',
            'data' => $data[$category->id],
            'workout' => $workout,
        ]);
    }

    public function show(Workout $workout) {
        dd($workout);
    }
}
