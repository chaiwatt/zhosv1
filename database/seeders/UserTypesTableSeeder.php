<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('user_types')->insert([
            [
                'name' =>'User',
            ],
            [
                'name' =>'Admin',
            ],
            [
                'name' =>'Super Admin',
            ]
        ]);
    }
}
