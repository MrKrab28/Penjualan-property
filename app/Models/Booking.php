<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'booking';
    protected $fillable = ['nama_property', 'user_id', 'status', 'no_rek', 'foto_ktp', 'tanggal'];


    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    
}
