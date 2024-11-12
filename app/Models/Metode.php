<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metode extends Model
{
    use HasFactory;
    protected $table = 'metode';
    protected $fillable = ['nama', 'jumlah_pembayaran'];

    public function harga(){
        return $this->hasMany(Harga::class, 'metode_id');
    }
}
