<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionsSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(PriceSeeder::class);
        $this->call(MasterDataPendidikanSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(MetodePembayaranSeeder::class);

    }
}
