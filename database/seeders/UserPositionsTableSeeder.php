<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserPositionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('user_positions')->insert([
            [
                'name' => 'แพทย์',
            ],
            [
                'name' => 'ทันตแพทย์',
            ],
            [
                'name' => 'เภสัชกร',
            ],
            [
                'name' => 'พยาบาลวิชาชีพ',
            ],
            [
                'name' => 'วิสัญญีพยาบาล',
            ],
            [
                'name' => 'นักวิชาการสาธารณสุข',
            ],
            [
                'name' => 'นักจัดการบริหารงานทั่วไป',
            ],
            [
                'name' => 'เจ้าหน้าที่บริหารงานสาธารณสุขชุมชน',
            ],
            [
                'name' => 'เจ้าพนักงานสาธารณสุขชุมชน',
            ],
            [
                'name' => 'พยาบาลเทคนิค',
            ],
            [
                'name' => 'เจ้าพนักงานทันตสาธารณสุข',
            ],
            [
                'name' => 'เจ้าพนักงานเภสัชกรรม',
            ],
            [
                'name' => 'นักเทคนิกการแพทย์',
            ],
            [
                'name' => 'เจ้าพนักงานวิทยาศาสตร์การแพทย์',
            ],
            [
                'name' => 'นักกายภาพบำบัด',
            ],
            [
                'name' => 'เจ้าพนักงานรังสีการแพทย์',
            ],
            [
                'name' => 'เจ้าพนักงานเวชสถิติ',
            ],
            [
                'name' => 'เจ้าพนักงานธุรการ',
            ],
            [
                'name' => 'เจ้าพนักงานการเงินและบัญชี',
            ],
            [
                'name' => 'โภชนากร',
            ]
        ]);
    }
}
