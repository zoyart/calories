<?php

namespace App\Http\Controllers\Recipes;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
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
        //  Рецепты за последние 7 дней
        $newRecipes = Recipe::where('created_at', '>', Carbon::now()->subDays(7))->take(4)->get();
        $breakfastRecipes = Recipe::where('is_published', 1)->where('male', 'breakfast')->take(4)->get();
        $brunchRecipes = Recipe::where('is_published', 1)->where('male', 'brunch')->take(4)->get();
        $dinnerRecipes = Recipe::where('is_published', 1)->where('male', 'dinner')->take(4)->get();
        $lunchRecipes = Recipe::where('is_published', 1)->where('male', 'lunch')->take(4)->get();

        return view('recipes.recipes',
            compact('breakfastRecipes', 'brunchRecipes', 'dinnerRecipes', 'lunchRecipes', 'newRecipes'));
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
        $request->validate([
            'preview' => 'image',
        ]);

        $folder = date('Y-m-d');
        $preview = $request->file('preview')->store("images/{$folder}", "public");

        $recipe = Recipe::create([
            'name' => $request->name,
            'author' => Auth::user()->name,
            'male' => $request->male,
            'preview' => $preview,
            'calories' => $request->calories,
            'cooking_time' => $request->cooking_time,
            'protein' => $request->protein,
            'fats' => $request->fats,
            'carbohydrates' => $request->carbohydrates,
            'description' => $request->description,
            'is_published' => ($request->save_as_draft == 'on') ? 0 : 1,
        ]);

        ($request->category_id === 'uncategorized') ? : $recipe->categories()->attach($request->category_id);

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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function more($type)
    {
        switch ($type) {
            case 'new':
                $recipes = Recipe::where('created_at', '>', Carbon::now()->subDays(7))->get();
                break;
            case 'breakfast':
                $recipes = Recipe::where('male', 'breakfast')->get();
                break;
            case 'brunch':
                $recipes = Recipe::where('male', 'brunch')->get();
                break;
            case 'dinner':
                $recipes = Recipe::where('male', 'dinner')->get();
                break;
            case 'lunch':
                $recipes = Recipe::where('male', 'lunch')->get();
                break;
        }

        return view('recipes.more', compact('recipes'));
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyFew(Request $request)
    {
        Recipe::destroy($request->all());

        return redirect()->route('index');
    }
}
