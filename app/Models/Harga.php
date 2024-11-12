<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Harga extends Model
{
    use HasFactory;
    protected $table = 'harga';
    protected $fillable = [
        'property_id',
        'metode_id',
        'nominal',
        'nominal_dp',
        
    ];

    public function properties()
    {
        return $this->belongsTo(Property::class, 'property_id');
    }

    public function metode()
    {
        return $this->belongsTo(Metode::class, 'metode_id');
    }
}
