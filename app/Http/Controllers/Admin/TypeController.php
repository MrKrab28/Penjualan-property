<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::all();
        return view('pages.admin.type', compact('types'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'nama_type' => 'required',
            'keterangan' => 'required',
         ]);

        Type::create($data);
        return redirect()->back()->with('success', 'Berhasil Menambahkan Data Type');

    }

    public function edit(Type $type)
    {
        return view('pages.admin.type-edit', compact('type'));
    }

    public function update(Request $request, Type $type)
    {
        $data = $request->validate([
            'nama_type' => 'required',
            'keterangan' => 'required',
        ]);

        $type->update($data);
        return redirect()->back()->with('success', 'Berhasil Mengupdate Data Type');
    }

    public function destroy(Type $type)
    {
        $type->delete();
        return redirect()->back()->with('success', 'Berhasil Menghapus Data Type');
    }


}
