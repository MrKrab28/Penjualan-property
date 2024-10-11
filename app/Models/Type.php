<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'type';
    use HasFactory;
    protected $fillable = ['nama_type', 'keterangan'];

    public function properties()
    {
        return $this->hasMany(Property::class, 'type_id');
    }
}
