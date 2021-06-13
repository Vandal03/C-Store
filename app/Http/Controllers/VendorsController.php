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

    public function addVendorForm() {
        return view('AddVendor', [

        ]);
    }

    public function addVendor(Request $request) {

        Vendors::create(['vendor'=> $request->get("vendorName"), 'point_of_contact' => $request->get("pointOfContact"), 'phone_number' => $request->get("phoneNumber")]);
        return view('Vendors', [
            'vendors' => Vendors::all()
        ]);
    }

    public function ingredients() {
        return $this->hasMany(Ingredients::class);
    }

    public function editVendorForm($id) {
        return view('EditVendor', [
            'vendor' => Vendors::where('id', '=', $id)->first()
        ]);
    }

    public function editVendor(Request $request, $id) {
        Vendors::where('id', '=', $id)->update(['vendor'=> $request->get("vendorName"), 'point_of_contact' => $request->get("pointOfContact"), 'phone_number' => $request->get("phoneNumber")]);
        return view('Vendors', [
            'vendors' => Vendors::all()
        ]);
    }
}
