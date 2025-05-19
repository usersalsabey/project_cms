<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $fillable = ['nama', 'kategori', 'harga'];

    public function transaksis()
{
    return $this->hasMany(Transaksi::class);
}

}

