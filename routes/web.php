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
Route::get('/vendors/addvendor', [VendorsController::class, 'addVendorForm']);
Route::post('/vendors/addvendor/add', [VendorsController::class, 'addVendor']);
Route::get('/vendors/editvendor/{id}', [VendorsController::class, 'editVendorForm']);
Route::post('/vendors/editvendor/edit/{id}', [VendorsController::class, 'editVendor']);

Use App\Http\Controllers\IngredientsController;
Route::get('/ingredients', [IngredientsController::class, 'getAllIngredients']);
Route::get('/ingredients/addingredient', [IngredientsController::class, 'addIngredientForm']);
Route::post('/ingredients/addingredient/add', [IngredientsController::class, 'addIngredient']);
Route::get('/ingredients/deleteingredient/{id}', [IngredientsController::class, 'deleteIngredient']);
Route::get('/ingredients/editingredient/{id}', [IngredientsController::class, 'editIngredientForm']);
Route::post('/ingredients/editingredient/edit/{id}', [IngredientsController::class, 'editIngredient']);