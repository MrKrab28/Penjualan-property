<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'property';
    use HasFactory;
    protected $fillable = [
        'property',
        'type_id',
        'spesifikasi_id',
        'harga',
        'lokasi',
        'deskripsi',
        'nominal_book'
    ];



    public function types()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }

    public function spesifikasi()
    {
        return $this->belongsTo(Spesifikasi::class, 'spesifikasi_id');
    }

    public function images()
    {
        return $this->hasMany(PropertyImage::class, 'property_id');
    }

    public function harga()
    {
        return $this->hasMany(Harga::class, 'property_id');
    }

  
}
