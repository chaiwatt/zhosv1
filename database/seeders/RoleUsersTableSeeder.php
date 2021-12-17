<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleUsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('role_users')->insert([
            [
                'user_id' => 1,
                'role_id' => 1
            ],
            [
                'user_id' => 1,
                'role_id' => 2
            ],
            [
                'user_id' => 2,
                'role_id' => 2
            ],
            [
                'user_id' => 3,
                'role_id' => 1
            ],
            [
                'user_id' => 4,
                'role_id' => 2
            ]
        ]);
    }
}
