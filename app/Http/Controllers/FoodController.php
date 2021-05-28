<?php

namespace App\Http\Controllers;
use App\Food;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FoodController extends Controller
{
    public function index() {
        return view('Foods');
    }

    public function getFood() {
        return response()->json([
            'foods' => \App\Models\Food::all()
        ], Response::HTTP_OK);
    }
    
}
