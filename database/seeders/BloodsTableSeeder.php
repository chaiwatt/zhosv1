<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BloodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bloods')->insert([
            [
                'name' =>'A',
            ],
            [
                'name' =>'B',
            ],
            [
                'name' =>'AB',
            ],
            [
                'name' =>'O',
            ]
        ]);
    }
}
