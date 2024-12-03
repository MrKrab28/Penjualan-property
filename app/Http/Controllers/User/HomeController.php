<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {   $properties = Property::query()->take(3)->get();
        return view('pages.user.home', compact('properties'));
    }

    public function about()
    {
        return view('pages.user.about');
    }

    public function profile(User $user){
        return view('pages.profile', ['users' => $user]);
    }

    public function profileUpdate(Request $request, User $user){
       $user->id = auth()->user()->id;
        $user->nama = $request->nama;
        $user->jk = $request->jk;
        $user->email = $request->email;
        $user->no_hp = $request->no_hp;
        if($request->password){

            $user->password = bcrypt($request->password);
        }
        $user->update();
        return redirect()->back()->with('success', 'Berhasil Mengubah Data User');
    }

}
