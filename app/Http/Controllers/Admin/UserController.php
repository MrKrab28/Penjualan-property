<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('pages.admin.user', compact('users'));
    }
    public function store(Request $request){
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'jk' => 'required',
            'password' => 'required',
        ]);

        $user = new User();
        $user->nama = $request->nama;
        $user->jk = $request->jk;
        $user->email = $request->email;
        $user->no_hp = $request->no_hp;
        $user->password =  bcrypt($request->password);
        $user->save();

        return redirect()->back()->with('success', 'Berhasil Menambahkan Data User');

    }

    public function edit(User $user){

        return view('pages.admin.user-edit', compact('user'));
    }

    public function update(Request $request, User $user){
        $user = User::find($user->id);
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

    public function destroy(User $user){
        $user->delete();
        return redirect()->back()->with('success', 'User deleted successfully');
    }
}
