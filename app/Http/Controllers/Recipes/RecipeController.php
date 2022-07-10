<?php

namespace App\Http\Controllers\Recipes;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::where('is_published', 1)->get();

        return view('recipes.recipes', compact('recipes'));
    }

    public function adminIndex()
    {
        $recipesCount = Recipe::where('is_published', 1)->count();
        $categoriesCount = Category::all()->count();
        $recipes = Recipe::orderBy('is_published', 'desc')->get();

        return view('admin.recipes.recipes', compact('recipesCount', 'recipes', 'categoriesCount'));
    }

    public function unpublished()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('type', 'recipes')->get();

        return view('admin.recipes.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recipe = Recipe::create([
            'name' => $request->name,
            'author' => Auth::user()->name,
            'calories' => $request->calories,
            'cooking_time' => $request->cooking_time,
            'protein' => $request->protein,
            'fats' => $request->fats,
            'carbohydrates' => $request->carbohydrates,
            'description' => $request->description,
            'is_published' => ($request->save_as_draft == 'on') ? 0 : 1,
        ]);

        $recipe->categories()->attach($request->category_id);

        return redirect()->route('admin.recipes.index');
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
        //
    }
}
