<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->insert([
            [
                'prefix_id' => 3,
                'name' => 'ธิติพันธุ์',
                'lastname' => 'วิชัยยา',
                'hn' => 'H111222333',
                'hid' => '5988162591551', 
            ],
            [
                'prefix_id' => 4,
                'name' => 'กนกนันทร์',
                'lastname' => 'สุเชาว์อินทร์',
                'hn' => 'H112233445',
                'hid' => '9955634503731', 
            ],
            [
                'prefix_id' => 4,
                'name' => 'ปฐวีณา',
                'lastname' => 'แก้วแจ้ง',
                'hn' => 'H555212455',
                'hid' => '9908968928636', 
            ],
            [
                'prefix_id' => 4,
                'name' => 'อรุณรัตน์',
                'lastname' => 'อาวัชนากร',
                'hn' => 'H112154128',
                'hid' => '9548853765681', 
            ]
        ]);
    }
}
