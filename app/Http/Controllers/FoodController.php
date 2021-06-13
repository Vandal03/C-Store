<?php

namespace App\Http\Controllers;
use App\Models\Food;
use App\Models\Ingredients;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class FoodController extends Controller
{

   public function getFoodItems() {
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

   public function addFoodForm() {
       return view('AddFood', [
        'ingredients' => Ingredients::join('vendors', 'ingredients.vendor_id', '=', 'vendors.id')
                                        ->select('ingredients.*', 'vendors.vendor')
                                        ->get()
       ]);
   }


   public function addFood($request) {

   }
 
    
}
