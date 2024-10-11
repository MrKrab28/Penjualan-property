<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(){
        $properties = Property::all();
        return view('pages.user.property', compact('properties'));
    }

    public function detail(Property $property){
        return view('pages.user.property-detail', [
            'property' => $property
        ]);
    }
}
