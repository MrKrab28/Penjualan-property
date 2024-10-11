<?php

namespace App\Http\Controllers\Admin;

use App\Models\Type;
use App\Models\Property;
use App\Models\Spesifikasi;
use Illuminate\Http\Request;
use App\Models\PropertyImage;
use App\Http\Controllers\Controller;

class PropertyController extends Controller
{
    public function index()
    {
        return view('pages.admin.property',[
            'properties' => Property::all(),
            'speks' => Spesifikasi::all(),
            'types' => Type::all(),
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'property' => 'required',
            'type_id' => 'required',
            'spesifikasi_id' => 'required',
            'harga' => 'required',
            'harga_book' => 'required',
            'lokasi' => 'required',
            'deskripsi' => 'required',
            'img' => 'required|image',
        ]);

        $property = Property::create($data);

        $file = $request->file('img');
        $filename = 'property'. '-' . time() . '.' . $file->extension();
        $file->move(public_path('img/properties'), $filename);

        $image = new PropertyImage();
        $image->property_id = $property->id;
        $image->filename = $filename;
        $image->save();

        return redirect()->back()->with('success', 'Berhasil Menambahkan Data Property');
    }

    public function detail(Property $property)
    {

        return view('pages.admin.property-detail', [
            'property' => $property,
            // 'speks' => Spesifikasi::all(),
            // 'types' => Type::all(),
        ]);
    }

    public function edit(Property $property)
    {
        return view('pages.admin.property-edit', [
            'property' => $property,
            'speks' => Spesifikasi::all(),
            'types' => Type::all(),
        ]);
    }

    public function update(Request $request, Property $property)
    {
        $data = $request->validate([
            'property' => 'required',
            'type_id' => 'required',
            'spesifikasi_id' => 'required',
            'harga' => 'required',
            'harga_book' => 'required',
            'lokasi' => 'required',
            'deskripsi' => 'required',
        ]);

        $property->update($data);
        return redirect()->back()->with('success', 'Berhasil Mengupdate Data Property');
    }

    public function destroy(Property $property)
    {
        $property->delete();
        return redirect()->back()->with('success', 'Berhasil Menghapus Data Property');
    }
}
