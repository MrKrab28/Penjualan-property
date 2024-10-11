<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\PropertyImage;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\File;

class PropertyImgController extends Controller
{
    public function index(Request $request, Property $property)
    {
        $data = $request->validate([
            'img' => 'required|image',
        ]);

        $data['property_id'] = $property->id;

        $file = $request->file('img');
        $filename = 'property' . '-' . time() . '.' . $file->extension();
        $file->move(public_path('img/properties'), $filename);

        $data['filename'] = $filename;

        PropertyImage::create($data);

        return redirect()->back()->with('success', 'Berhasil Menambahkan Gambar Property');
    }

    public function destroy(PropertyImage $image): RedirectResponse
    {
        File::delete(public_path('img/properties/' . $image->filename));

        $image->delete();

        return redirect()->back()->with('success', 'Berhasil Menghapus Gambar Property');
    }
}
