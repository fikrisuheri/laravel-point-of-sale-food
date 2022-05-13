<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    
    public function run()
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'cashier']);

        $admin = User::create([
            'name'      => 'Admin POS',
            'email'     => 'admin@pos.com',
            'password'  => bcrypt('password'),
        ]);
        $admin->assignRole('admin');

        $kasir = User::create([
            'name'      => 'Kasir POS',
            'email'     => 'kasir@pos.com',
            'password'  => bcrypt('password'),
        ]);
        $kasir->assignRole('kasir');
    }
}
