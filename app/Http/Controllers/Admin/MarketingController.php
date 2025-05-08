<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Marketing;
use Illuminate\Http\Request;

class MarketingController extends Controller
{
    public function index(){
        $agents = Marketing::all();
        return view('pages.admin.marketing', compact('agents'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'nama' => 'required',
            'agency' => 'required',
            'no_rek' => 'required',
            'no_hp' => 'required',
            'ktp' => 'required',
        ]);
        $file = $request->file('ktp');
        $filename = 'ktp' . '-' . time() . '-'  . $file->extension();
        $file->move(public_path('img/agent/ktp'), $filename);


        $data['ktp'] = $filename;
        Marketing::create($data);
        return redirect()->back()->with('success', 'Berhasil Menambahkan Data Marketing');
    }

    public function edit(Marketing $agents ){
        return view('pages.admin.marketing-edit', [
            'agents' => $agents]);
    }

    public function update(Request $request, Marketing $agents){
        $data = $request->validate([
            'nama' => 'required',
            'agency' => 'required',
            'no_rek' => 'required',
            'no_hp' => 'required',
            'ktp' => 'required',
        ]);

        $agents->update($data);
        return redirect()->back()->with('success', 'Berhasil Mengubah Data Marketing');
    }

    public function delete(Marketing $agents){
        $agents->delete();
        return redirect()->back()->with('success', 'Berhasil Menghapus Data');
    }
}
