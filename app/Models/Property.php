<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
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

    public function hargaCash() : Attribute
    {
        // return $this->hasOne(Harga::class, 'property_id', 'id')->where('metode_id', Metode::select('id')->where('nama', 'Cash'));
        $hargaCash = $this->harga->each(function ($harga) {
            if ($harga->metode->nama == 'Cash') {
                return $harga;
            }
        });
        return Attribute::make(
            get: fn() =>  $hargaCash->first()

        );
    }
}
