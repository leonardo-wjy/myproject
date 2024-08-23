<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MsProduct extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak mengikuti konvensi penamaan Laravel
    protected $table = 'ms_product';

    // Tentukan kolom yang dapat diisi secara massal
    protected $fillable = [
        'NamaProduk',
        'Qty',
    ];

    // Jika Anda menggunakan timestamp, Anda bisa menonaktifkannya jika tidak ada kolom `created_at` dan `updated_at`
    public $timestamps = true;

    // Jika tabel tidak menggunakan timestamp, nonaktifkan dengan cara ini:
    // public $timestamps = false;
}
