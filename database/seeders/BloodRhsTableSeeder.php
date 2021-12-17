<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BloodRhsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blood_rhs')->insert([
            [
                'name' =>'Rh+',
            ],
            [
                'name' =>'Rh-',
            ]
        ]);
    }
}
