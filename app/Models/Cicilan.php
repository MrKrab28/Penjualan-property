<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cicilan extends Model
{
    use HasFactory;

    protected $table = 'cicilan';
    protected $fillable = ['penjualan_id', 'nominal_cicilan', 'tgl_cicilan'];
}
