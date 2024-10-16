<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $table = 'penjualan';

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
