<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    use HasFactory;
    protected $table = 'KASIR';
    protected $fillable = ['nama', 'jadwal_kerja', 'kontak'];
}
