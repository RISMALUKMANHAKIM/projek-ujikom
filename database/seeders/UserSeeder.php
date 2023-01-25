<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat role
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Administrator";
        $adminRole->save();

        $admin = new User();
        $admin->name = 'Sim Pondok Yatim';
        $admin->email = 'admin@gmail.com';
        $admin->password = Hash::make('rahasia');
        $admin->save();
        $admin->attachRole($adminRole);
    }
}
