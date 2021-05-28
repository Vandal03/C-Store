<?php

namespace App\Http\Controllers;
use App\Food;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class FoodController extends Controller
{

   public function index() {
       return response()->json([
        'foods' => DB::table('food')->get()
       ], Response::HTTP_OK);
       
   }

   public function delete($id) {
       return response()->json([
           DB::table('food')->where('id', '=', $id)->delete()
       ], Response::HTTP_OK);
   }
 
    
}
