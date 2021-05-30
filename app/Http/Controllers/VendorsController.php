<?php

namespace App\Http\Controllers;
use App\Models\Vendors;
use Illuminate\Http\Request;

class VendorsController extends Controller
{
    
    public function getAllVendors() {
        return view('Vendors', [
            'vendors' => Vendors::all()
        ]);
    }

    public function deleteVendor($id) {
        Vendors::where('id', '=', $id)->delete();
        return view('Vendors', [
            'vendors' => Vendors::all()
        ]);
    }



}
