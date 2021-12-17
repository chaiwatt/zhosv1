<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FunctionTypesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('function_types')->insert([
            [
                'name' => 'menu'
            ], 
            [
                'name' => 'function'
            ] 
        ]);
    }
}
