<?php

namespace App\Http\Controllers;

use App\Models\FoodRecipe;
use Illuminate\Http\Request;
use App\Models\Suggestion;

class AdminFoodRecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $messages = Suggestion::all()->sortByDesc('created_at')->take(4);
        $recipes = FoodRecipe::all()->sortByDesc('created_at');

        return view('dashboard.recipe.recipe', [
            'active' => 'recipe',
            'messages' => $messages,
            'recipes' => $recipes,
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


        return view('dashboard.recipe.create', [
            'active' => 'recipe',
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
            'slug' => 'required|unique:food_recipes,slug',
            'file-cover' => 'required|max:2048',
            'file-poster' => 'required|max:2048',
        ]);

        $fileName = time() . '.' . $request->file('file-poster')->extension();
        $request->file('file-poster')->move(public_path('assets/images/foodrecipe/poster'), $fileName);
        $request->file('file-cover')->move(public_path('assets/images/foodrecipe/cover'), $fileName);

        $save = new FoodRecipe();

        $save->name = $validatedData['name'];
        $save->slug = $validatedData['slug'];
        $save->photo = $fileName;
        $save->poster = $fileName;

        FoodRecipe::create([
            'name' => $save->name,
            'slug' => $save->slug,
            'photo' => $save->photo,
            'poster' => $save->poster,
        ]);

        return redirect('dashboard/foodrecipes');
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
        return 'hello';
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
        FoodRecipe::destroy($id);

        return redirect('dashboard/foodrecipes');
    }
}
