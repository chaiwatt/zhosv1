<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReligionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('religions')->insert([
            [
                'name' =>'พุทธ',
            ],
            [
                'name' =>'คริสต์',
            ],
            [
                'name' =>'อิสลาม',
            ],
            [
                'name' =>'ฮินดู',
            ],
            [
                'name' =>'พราหมณ์',
            ],
            [
                'name' =>'อื่นๆ',
            ]
        ]);
    }
}
