<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spesifikasi extends Model
{
    protected $table = 'spesifikasi';
    use HasFactory;
    protected $fillable = [

        'nama_spesifikasi',
        'luas_tanah',
        'luas_bangunan',
        'kamar',
        'wc',
    ];

    public function properties()
    {
        return $this->hasMany(Property::class, 'spesifikasi_id');
    }
}
