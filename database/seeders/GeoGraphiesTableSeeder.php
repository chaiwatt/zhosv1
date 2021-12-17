<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeoGraphiesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('geographies')->insert([
            [
                'name' =>'ภาคเหนือ',
            ],
            [
                'name' =>'ภาคกลาง',
            ],
            [
                'name' =>'ภาคตะวันออกเฉียงเหนือ',
            ],
            [
                'name' =>'ภาคตะวันตก',
            ],
            [
                'name' =>'ภาคตะวันออก',
            ],
            [
                'name' =>'ภาคใต้',
            ]
        ]);
    }
}
