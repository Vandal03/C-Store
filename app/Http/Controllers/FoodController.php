<?php

namespace App\Http\Controllers;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class FoodController extends Controller
{

   public function getFoodItems() {
    //    return response()->json([
    //     'foods' => Food::all()
    //    ], Response::HTTP_OK);

    


       return view('Foods', [
           'foods' =>Food::all()
       ]);
       
   }

   public function delete($id) {
           Food::where('id', '=', $id)->delete();
           return view('Foods', [
            'foods' =>Food::all()
        ]);
   }
 
    
}
