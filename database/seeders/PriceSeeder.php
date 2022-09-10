<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('price')->insert([
            'nama_paket' => 'Piloting Project',
            'harga_paket' => '',
            'deskripsi' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('price')->insert([
            'nama_paket' => 'Langganan 1 Tahun',
            'harga_paket' => '1000000',
            'deskripsi' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
