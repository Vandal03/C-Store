<?php

namespace App\Http\Controllers;
use App\Models\Ingredients;
use App\Models\Vendors;
use Illuminate\Http\Request;

class IngredientsController extends Controller
{
    
    public function getAllIngredients() {
        return view('Ingredients', [
            'ingredients' => Ingredients::all()
        ]);
    }

    public function addIngredient() {

        return view('AddIngredient', [
            'vendors' => Vendors::all()
        ]);
    }

    public function vendors() {
        return $this->belongsTo(Vendors::class);
    }

    public function add(Request $request) {

        Ingredients::create(['name'=> $request->get("ingredientName"), 'unitcost' => $request->get("unitCost"), 'unitweight' => $request->get("unitWeight"), 'unit_of_measure' => $request->get("unitOfMeasure"), 'vendor_id' => $request->get("vendorID")]);
        return view('Ingredients', [
            'ingredients' => Ingredients::all()
        ]);
    }

    public function deleteIngredient($id) {
        Ingredients::where('id', '=', $id)->delete();
        return view('Ingredients', [
            'ingredients' => Ingredients::all()
        ]);
    }


}
