<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::firstOrCreate([
            'name' => 'Admin',
            'email' => 'admin@demo.com',
            'password' => Hash::make('123123'),
        ]);

        $staff = User::firstOrCreate([
            'name' => 'Staff PGD',
            'email' => 'staff@demo.com',
            'password' => Hash::make('123123'),
        ]);

        $user = User::firstOrCreate([
            'name' => 'User Indonesia',
            'email' => 'user@demo.com',
            'password' => Hash::make('123123'),
        ]);

        $staff->assignRole('staff');
        $user->assignRole('user');
        $admin->assignRole('super admin')->givePermissionTo(Permission::all());
    }
}
