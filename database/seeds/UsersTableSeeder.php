<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
                    'name' => 'Admin Admin',
                    'email' => 'admin@tutor.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('secret'),
                    'role_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now()
                ],['name' => 'Teacher',
                    'email' => 'teacher@tutor.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('secret'),
                    'role_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now()]]);
    }
}
