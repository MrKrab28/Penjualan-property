<?php

namespace App\Http\Controllers\User;

use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {   $properties = Property::query()->take(3)->get();
        return view('pages.user.home', compact('properties'));
    }
}
