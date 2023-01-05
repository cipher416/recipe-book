<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [RecipeController::class, 'index']);
Route::get('/login', [PageController::class, 'login']);
Route::post('/login', [PageController::class, 'loginLogic']);

Route::get('/logout', [PageController::class, 'logout']);
Route::get('/register', [PageController::class, 'regis']);
Route::post('/register', [PageController::class, 'regisLogic']);
Route::get('/about', [PageController::class, 'about']);

Route::get('/recipeDetail/{id}', [RecipeController::class, 'show']);
Route::get('/profile', [PageController::class, 'profile']);

Route::get('/language/{id}', [RecipeController::class, 'languageRecipe'] );

//admin
Route::get('/admin', [PageController::class, 'admin'])->middleware('admin');
Route::get('/addRecipe', [RecipeController::class, 'viewAddRecipe'])->middleware('admin');
Route::post('/addRecipe', [RecipeController::class, 'handleAddRecipe']);
Route::get('/updateRecipe/{id}', [RecipeController::class, 'viewUpdateRecipe'])->middleware('admin');
Route::post('/updateRecipe/{id}', [RecipeController::class, 'handleUpdateRecipe']);
Route::post('/deleteRecipe/{id}', [RecipeController::class, 'deleteRecipe']);

Route::get('/cart', [CartController::class, 'index'] );
Route::post('/addCart/{id}', [CartController::class, 'store'] );
Route::post('/deleteCart/{id}', [CartController::class, 'destroy'] );

