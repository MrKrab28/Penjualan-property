<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        return view('pages.user.book');
    }
}
