<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'nama',
        'email',
        'password',
        'jk',
        'no_hp',
        
    ];



    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    public function penjualan()
    {
        return $this->hasMany(Penjualan::class, 'user_id');
    }


    public function statusBooking()
    {
        return $this->hasMany(Booking::class, 'user_id');
    }



    public function PenjualanTerkahir(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->penjualan->sortByDesc('tanggal')->first()
        );
    }
}
