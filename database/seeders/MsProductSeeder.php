<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class MsProductSeeder extends Seeder
{
    public function run()
    {
        // Hapus data lama jika ada
        DB::table('ms_product')->truncate();

        // Tambahkan data dummy
        DB::table('ms_product')->insert([
            [
                'NamaProduk' => 'Jeruk',
                'Qty' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'NamaProduk' => 'Apel',
                'Qty' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'NamaProduk' => 'Pepaya',
                'Qty' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
