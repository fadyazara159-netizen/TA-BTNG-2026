<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skincare extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_produk',
        'brand',
        'kategori',
        'harga',
        'ukuran_ml',
        'tipe_kulit',
        'status',
        'foto',
    ];
}
