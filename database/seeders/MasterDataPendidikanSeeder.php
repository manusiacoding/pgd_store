<?php

namespace Database\Seeders;

use App\Models\MasterPendidikan;
use Illuminate\Database\Seeder;

class MasterDataPendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pendidikan = [
            'RA atau setara TK',
            'MI atau setara SD',
            'MTS atau setara SMP',
            'MA atau setara SMA',
            'Pesantren Salaf'
        ];

        foreach ($pendidikan as $value) {
            MasterPendidikan::firstOrCreate(['nama' => $value]);
        }
    }
}
