<?php

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

Route::get('/', function () {
    return view('MainMenu');
});

Use App\Http\Controllers\FoodController;
Route::get('/Foods', [FoodController::class, 'getFoodItems']);
Route::get('/deletefood/{id}', [FoodController::class, 'delete']);


Use App\Http\Controllers\VendorsController;
Route::get('/vendors', [VendorsController::class, 'getAllVendors']);
Route::get('/deletevendor/{id}', [VendorsController::class, 'deleteVendor']);
Route::get('/vendors/addvendor', [VendorsController::class, 'addVendor']);
Route::post('/vendors/addvendor/add', [VendorsController::class, 'add']);
Route::get('/vendors/editvendor/{id}', [VendorsController::class, 'editForm']);
Route::post('/vendors/editvendor/edit/{id}', [VendorsController::class, 'edit']);

Use App\Http\Controllers\IngredientsController;
Route::get('/ingredients', [IngredientsController::class, 'getAllIngredients']);
Route::get('/ingredients/addingredient', [IngredientsController::class, 'addIngredient']);
Route::post('/ingredients/addingredient/add', [IngredientsController::class, 'add']);
Route::get('/ingredients/deleteingredient/{id}', [IngredientsController::class, 'deleteIngredient']);
