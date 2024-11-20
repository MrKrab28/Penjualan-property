<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $table = 'penjualan';
    protected $fillable = [
        'nama_property',
        'nama_type',
        'user_id',
        'jumlah_pembayaran',
        'metode',
        'nominal_dp',
        'nominal_harga',
        'no_rek',
        'nama_bank',
        'foto_ktp',
        'status_kawin',
        'alamat',
        'pekerjaan',
        'nama_tempat_bekerja',
        'alamat_tempat_bekerja',
        'gaji',
        'nama_orang_terdekat',
        'alamat_orang_terdekat',
        'no_hp_orang_terdekat',
        'tanggal'
    ];
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
