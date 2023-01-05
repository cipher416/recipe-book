<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Language;
use App\Models\Product;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RecipeController extends Controller
{

    public function index()
    {
        $recipes = Recipe::all();
        if (Auth::check()) {
            if (Auth::user()->role->role_name == 'admin') {
                return view('admin.adminhome', ['recipes'=> $recipes]);
            }
        }
        return view('index', compact('recipes'));
    }

    public function viewAddRecipe() {
        $languages = Language::all();
        return view('admin.insert-recipe', ['languages' => $languages]);
    }

    public function handleAddRecipe(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'title' => 'required|string|min:5',
            'image' => 'required|mimes:jpg,png,jpeg',
            'description' => 'required|string|min:15|max:100',
            'price' => 'required|integer|between:1000,10000000',
            'author' => 'required|string',
            'language' => 'required|exists:languages,id'
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate);
        }

        $language = Language::find($request->language);
        $recipe = new Recipe();
        $recipe->title = $request->title;
        $recipe->author = $request->author;
        $recipe->price = $request->price;
        $recipe->description = $request->description;
        $recipe->image = basename($request->file('image')->store('recipe', 'public'));
        $language->recipes()->save($recipe);
        return redirect('');
    }

    public function viewUpdateRecipe($id) {
        $recipe = Recipe::find($id);
        return view('admin.update-recipe', ['recipe' => $recipe]);
    }

    public function handleUpdateRecipe(Request $request, $id) {
        $validate = Validator::make($request->all(), [
            'title' => 'required|string|min:5',
            'image' => 'required|mimes:jpg,png,jpeg',
            'description' => 'required|string|min:15|max:100',
            'price' => 'required|integer|between:1000,10000000',
            'author' => 'required|string',
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate);
        }
        $recipe = Recipe::find($id);
        $recipe->title = $request->title;
        $recipe->author = $request->author;
        $recipe->price = $request->price;
        $recipe->description = $request->description;
        $recipe->image = basename($request->file('image')->store('recipe', 'public'));
        $recipe->save();
        return redirect('');
    }

    public function deleteRecipe($id) {
        $recipe = Recipe::find($id);
        $recipe->delete();
        return redirect()->back();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipe = Recipe::find($id);

        return view('recipe.recipedetail', ['recipe' => $recipe]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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

    public function languageRecipe($id){
        $language = Language::find($id);
        return view('halaman.language', ['language' => $language]);

    }
}
