<?php

namespace App\Http\Controllers;
use App\Models\Ingredients;
use App\Models\Vendors;
use Illuminate\Http\Request;

class IngredientsController extends Controller
{
    
    public function getAllIngredients() {
        return view('Ingredients', [
            'ingredients' => Ingredients::join('vendors', 'ingredients.vendor_id', '=', 'vendors.id')
                                            ->select('ingredients.*', 'vendors.vendor')
                                            ->get()
        ]);
    }

    public function addIngredientForm() {

        return view('AddIngredient', [
            'vendors' => Vendors::all()
        ]);
    }

    public function vendors() {
        return $this->belongsTo(Vendors::class);
    }

    public function addIngredient(Request $request) {

        Ingredients::create(['name'=> $request->get("ingredientName"),  'description' => $request->get("description"), 'unit_cost' => $request->get("unitCost"), 'unit_weight_oz' => $request->get("unitWeightOz"), 'vendor_id' => $request->get("vendorID")]);
        return view('Ingredients', [
            'ingredients' => Ingredients::join('vendors', 'ingredients.vendor_id', '=', 'vendors.id')
                                             ->select('ingredients.*', 'vendors.vendor')
                                             ->get()
        ]);
    }

    public function deleteIngredient($id) {
        Ingredients::where('id', '=', $id)->delete();
        return view('Ingredients', [
            'ingredients' => Ingredients::join('vendors', 'ingredients.vendor_id', '=', 'vendors.id')
                                            ->select('ingredients.*', 'vendors.vendor')
                                            ->get()
        ]);
    }

    public function editIngredientForm($id) {
        return view('EditIngredient', [
            'ingredient' => Ingredients::where('id', '=', $id)->first(),
            'vendors' => Vendors::all()
        ]);
    }

    public function editIngredient(Request $request, $id) {
        Ingredients::where('id', '=', $id)->update(['name'=> $request->get("ingredientName"),  'description' => $request->get("description"), 'unit_cost' => $request->get("unitCost"), 'unit_weight_oz' => $request->get("unitWeightOz"),  'vendor_id' => $request->get("vendorID")]);
        return view('Ingredients', [
            'ingredients' => Ingredients::join('vendors', 'ingredients.vendor_id', '=', 'vendors.id')
                                            ->select('ingredients.*', 'vendors.vendor')
                                            ->get()
        ]);
    }

}
