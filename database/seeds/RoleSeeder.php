<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('roles')->truncate();

        $roles = [
            [
                'name' => 'Admin',
                'slug' => 'admin',
            ],
            [
                'name' => 'Teacher',
                'slug' => 'teacher',
            ],
            [
                'name' => 'Student',
                'slug' => 'student',
            ],
            [
                'name' => 'Parent',
                'slug' => 'parent',
            ]
        ];

        DB::table('roles')->insert($roles);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
