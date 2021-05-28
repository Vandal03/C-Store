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
// Route::get('/Foods', function (){
//     return view('Foods');
// });
Route::get('/Foods', [FoodController::class, 'getFoodItems']);
Route::get('/deletefood/{id}', [FoodController::class, 'delete']);

