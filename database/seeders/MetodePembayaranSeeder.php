<?php

namespace Database\Seeders;

use App\Models\PaymentMethods;
use Illuminate\Database\Seeder;

class MetodePembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $bri = PaymentMethods::create([
        //     'method_name' => 'Transfer Bank',
        //     'provider_name' => 'BANK BRI',
        //     'nama_rekening' => 'ZULKIFLI RAIHAN',
        //     'nomor_rekening' => '29072001'
        // ]);

        $bca = PaymentMethods::create([
            'method_name' => 'Transfer Bank',
            'provider_name' => 'BANK BCA',
            'nama_rekening' => 'FAWWAZ HUDZALFAH SAPUTRA',
            'nomor_rekening' => '1570007217038 '
        ]);
    }
}
