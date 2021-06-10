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

    public function addVendor() {
        return view('AddVendor', [

        ]);
    }

    public function add(Request $request) {

        Vendors::create(['company'=> $request->get("vendorName"), 'poc' => $request->get("pocName"), 'phonenumber' => $request->get("phoneNumber")]);
        return view('Vendors', [
            'vendors' => Vendors::all()
        ]);
    }

    public function ingredients() {
        return $this->hasMany(Ingredients::class);
    }

    public function editForm($id) {
        return view('EditVendor', [
            'vendor' => Vendors::where('id', '=', $id)->first()
        ]);
    }

    public function edit(Request $request, $id) {
        Vendors::where('id', '=', $id)->update(['company'=> $request->get("vendorName"), 'poc' => $request->get("pocName"), 'phonenumber' => $request->get("phoneNumber")]);
        return view('Vendors', [
            'vendors' => Vendors::all()
        ]);
    }
}
