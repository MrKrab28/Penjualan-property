<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marketing extends Model
{
    use HasFactory;
    protected $table = 'marketing';
    protected $fillable = [
        'agency',
        'nama',
        'no_rek',
        'no_hp',
        'ktp',
    ];

    public function penjualan()
    {
        return $this->hasMany(Penjualan::class, 'agent_id');
    }
}
