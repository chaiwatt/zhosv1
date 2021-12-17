<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            [
                'prefix_id' => 48,
                'name' => 'ชัยวัฒน์',
                'username' => 'jo',
                'lastname' => 'ทวีจันทร์',
                'email' => 'jo@npcsolution.com',
                'password' => Hash::make('11111111'), 
                'user_type_id' => 3,
                'created_at' => Carbon::now()->toDateString()
            ],
            [
                'prefix_id' => 49,
                'name' => 'กาญจนา',
                'username' => 'karn',
                'lastname' => 'ทวีจันทร์',
                'email' => 'karn@npcsolution.com',
                'user_type_id' => 2,
                'password' => Hash::make('11111111'), 
                'created_at' => Carbon::now()->toDateString()
            ],
            [
                'prefix_id' => 48,
                'name' => 'ณัฎฐพัชร์',
                'username' => 'program',
                'lastname' => 'ทวีจันทร์',
                'email' => 'program@npcsolution.com',
                'user_type_id' => 1,
                'password' => Hash::make('11111111'), 
                'created_at' => Carbon::now()->toDateString()
            ],
            [
                'prefix_id' => 49,
                'name' => 'จรัสศรี',
                'username' => 'tim',
                'lastname' => 'มะโนวรรณา',
                'email' => 'tim@npcsolution.com',
                'user_type_id' => 1,
                'password' => Hash::make('11111111'), 
                'created_at' => Carbon::now()->toDateString()
            ]
        ]);
    }
}
