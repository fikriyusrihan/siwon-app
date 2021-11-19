<?php

namespace App\Http\Controllers;

use App\Models\MealPlan;
use App\Models\Suggestion;
use Illuminate\Http\Request;

class AdminMealPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $mealplans = MealPlan::all()->sortByDesc('created_at');
        $messages = Suggestion::all()->sortByDesc('created_at')->take(4);

        return view('dashboard.mealplans.mealplans', [
            'active' => 'mealplan',
            'mealplans' => $mealplans,
            'messages' => $messages,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $messages = Suggestion::all()->sortByDesc('created_at')->take(4);

        return view('dashboard.mealplans.create', [
            'active' => 'mealplan',
            'messages' => $messages,
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
        $validatedData = $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:meal_plans,slug',
            'file-cover' => 'required|max:2048',
            'file-poster' => 'required|max:2048',
        ]);

        $fileName = time() . '.' . $request->file('file-poster')->extension();
        $request->file('file-poster')->move(public_path('assets/images/mealplan/poster'), $fileName);
        $request->file('file-cover')->move(public_path('assets/images/mealplan/cover'), $fileName);

        $save = new MealPlan();

        $save->name = $validatedData['name'];
        $save->slug = $validatedData['slug'];
        $save->photo = $fileName;
        $save->poster = $fileName;

        MealPlan::create([
            'name' => $save->name,
            'slug' => $save->slug,
            'photo' => $save->photo,
            'poster' => $save->poster,
        ]);

        return redirect('dashboard/mealplans');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MealPlan::destroy($id);

        return redirect('dashboard/mealplans');
    }
}
