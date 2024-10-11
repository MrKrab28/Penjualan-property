<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index(Property $property)
    {
        return view('pages.user.book', [
            'property' => $property
        ]);
    }
}
