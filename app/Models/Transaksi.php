<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksis';

    protected $fillable = [
        'pembeli_id',
        'produk_id',
        'jumlah',
        'total_harga',
    ];

    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class);
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
