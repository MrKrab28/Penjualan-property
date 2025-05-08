<?php

namespace App\Models;

use App\Models\Cicilan;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penjualan extends Model
{
    use HasFactory;
    protected $table = 'penjualan';
    protected $fillable = [
        'nama_property',
        'nama_type',
        'user_id',
        'agent_id',
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

    public function cicilan()
    {
        return $this->hasMany(Cicilan::class, 'penjualan_id')->orderBy('tgl_cicilan', 'desc');
    }

    public function agents()
    {
        return $this->belongsTo(Marketing::class, 'agent_id');
    }


    public function lunas(): Attribute
    {

        return Attribute::make(


            get: fn() =>  round($this->cicilan->sum('nominal_cicilan'), -3) >= $this->nominal_harga

        );
    }

    public function CashLunas(): Attribute
    {
        $metode = Metode::where('id', $this->metode)->first();
        return Attribute::make(
            get: fn() => $this->metode == $metode->id
        );
    }
    public function harga()
    {
        return $this->belongsTo(Harga::class, 'nominal_harga', 'nominal');
        // Atau jika nominal_harga menyimpan ID dari tabel harga
        // return $this->belongsTo(Harga::class, 'nominal_harga', 'id');
    }

    public function properti()
    {
        return $this->belongsTo(Property::class, 'nama_property', 'property');
        // Atau jika menggunakan ID
        // return $this->belongsTo(Property::class, 'property_id');
    }
}
