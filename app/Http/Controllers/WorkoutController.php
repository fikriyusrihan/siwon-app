<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use Illuminate\Http\Request;
use App\Models\WorkoutCategory;


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
        $workout = Workout::where('category_id', $category->id)->paginate(6);

        // $workout = WorkoutCategory::find($category->id)->$workouts;

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
            'workouts' => $workout,
        ]);
    }

    public function show(Workout $workout) {
        return view('workout.workoutdetail', [
            'active' => 'workout',
            'workouts' => $workout,
        ]);
    }

    public function download($id) {
        $data = Workout::where('id', $id)->first();
        $filepath = public_path("assets/images/workout/poster/{$data->poster}");
        return response()->download($filepath);
    }
}
