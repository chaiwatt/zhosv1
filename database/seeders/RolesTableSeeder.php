<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->insert([
            [
                'name' => 'ห้องเวชระเบียน'
            ],
            [
                'name' => 'ห้องตรวจแพทย์',
            ],
            [
                'name' => 'ห้องยา',
            ],
            [
                'name' => 'ห้อง LAB',
            ]
        ]);
    }
}
