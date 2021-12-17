<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuleTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('modules')->insert([
         [
            'order' => 1,
            'menu_icon' => 'fa-book-medical',
            'function_type_id' => 1,
            'name' => 'ทะเบียนผู้ป่วย',
            'code' => 'registry',
            'is_active' => 1
         ],
         [
            'order' => 2,
            'menu_icon' => 'fa-notes-medical',
            'function_type_id' => 1,
            'name' => 'ซักประวัติ',
            'code' => 'screen',
            'is_active' => 1
         ],
         [
            'order' => 3,
            'menu_icon' => 'fa-user-md',
            'function_type_id' => 1,
            'name' => 'ห้องตรวจแพทย์',
            'code' => 'doctor',
            'is_active' => 1
         ],
         [
            'order' => 4,
            'menu_icon' => '<iclass="fa-tooth',
            'function_type_id' => 1,
            'name' => 'ทันตกรรม',
            'code' => 'dental',
            'is_active' => 0
         ],
         [
            'order' => 5,
            'menu_icon' => 'fa-x-ray',
            'function_type_id' => 1,
            'name' => 'รังสีวินิจฉัย',
            'code' => 'xray',
            'is_active' => 0
         ],
         [
            'order' => 6,
            'menu_icon' => 'fa-vials',
            'function_type_id' => 1,
            'name' => 'ตรวจทางห้องปฏิบัติการ',
            'code' => 'lab',
            'is_active' => 0
         ],
         [
            'order' => 7,
            'menu_icon' => 'fa-donate',
            'function_type_id' => 1,
            'name' => 'การเงิน',
            'code' => 'finance',
            'is_active' => 0
         ],
         [
            'order' => 8,
            'menu_icon' => 'fasfa-heartbeat',
            'function_type_id' => 1,
            'name' => 'ห้องฉุกเฉิน',
            'code' => 'er',
            'is_active' => 0
         ],
         [
            'order' => 9,
            'menu_icon' => 'fa-prescription',
            'function_type_id' => 1,
            'name' => 'ห้องจ่ายยา',
            'code' => 'dispensing',
            'is_active' => 0
         ],
         [
            'order' => 10,
            'menu_icon' => 'fa-boxes',
            'function_type_id' => 1,
            'name' => 'งานคลัง',
            'code' => 'inventory',
            'is_active' => 0
         ],
         [
            'order' => 11,
            'menu_icon' => 'fa-utensils',
            'function_type_id' => 1,
            'name' => 'โภชนาการ',
            'code' => 'nutrition',
            'is_active' => 0
         ],
         [
            'order' => 12,
            'menu_icon' => '<iclass="fa-tshirt',
            'function_type_id' => 1,
            'name' => 'งานผ้า',
            'code' => 'supply1',
            'is_active' => 0
         ],
         [
            'order' => 13,
            'menu_icon' => 'fa-heart',
            'function_type_id' => 1,
            'name' => 'สังคมสงเคราะห์',
            'code' => 'social',
            'is_active' => 0
         ],
         [
            'order' => 14,
            'menu_icon' => 'fa-user-check',
            'function_type_id' => 1,
            'name' => 'ตรวจสุขภาพ',
            'code' => 'checkup',
            'is_active' => 0
         ],
         [
            'order' => 15,
            'menu_icon' => 'feather-home',
            'function_type_id' => 1,
            'name' => 'ผ่าตัด',
            'code' => 'operation',
            'is_active' => 0
         ],
         [
            'order' => 16,
            'menu_icon' => 'feather-home',
            'function_type_id' => 1,
            'name' => 'ปลอดเชื้อ',
            'code' => 'supply2',
            'is_active' => 0
         ],
         [
            'order' => 17,
            'menu_icon' => 'feather-home',
            'function_type_id' => 1,
            'name' => 'นัดหมาย',
            'code' => 'appoint',
            'is_active' => 0
         ],
         [
            'order' => 18,
            'menu_icon' => 'feather-home',
            'function_type_id' => 1,
            'name' => 'ส่งต่อผู้ป่วย',
            'code' => 'refer',
            'is_active' => 0
         ],
         [
            'order' => 19,
            'menu_icon' => 'feather-home',
            'function_type_id' => 1,
            'name' => 'รายงาน',
            'code' => 'report',
            'is_active' => 0
         ],
         [
            'order' => 20,
            'menu_icon' => 'feather-home',
            'function_type_id' => 1,
            'name' => 'เชื่อมโยงข้อมูล',
            'code' => 'datalink',
            'is_active' => 0
         ],
         [
            'order' => 21,
            'menu_icon' => 'feather-home',
            'function_type_id' => 1,
            'name' => 'ผู้ป่วยใน',
            'code' => 'ipd',
            'is_active' => 0
         ],
         [
            'order' => 22,
            'menu_icon' => 'feather-home',
            'function_type_id' => 1,
            'name' => 'ระบบงานบุคลากร',
            'code' => 'hr',
            'is_active' => 0
         ],
         [
            'order' => 23,
            'menu_icon' => 'feather-home',
            'function_type_id' => 1,
            'name' => 'ระบบงานทะเบียนครุภัณฑ์',
            'code' => 'durable',
            'is_active' => 0
         ],
         [
            'order' => 24,
            'menu_icon' => 'feather-home',
            'function_type_id' => 1,
            'name' => 'ระบบงานสารบรรณ',
            'code' => 'document',
            'is_active' => 0
         ],
         [
            'order' => 25,
            'menu_icon' => 'feather-home',
            'function_type_id' => 1,
            'name' => 'ผู้ใช้งาน',
            'code' => 'user',
            'is_active' => 0
         ],
         [
            'order' => 26,
            'menu_icon' => 'feather-home',
            'function_type_id' => 1,
            'name' => 'กายภาพบำบัด',
            'code' => 'physic',
            'is_active' => 0
         ],
         [
            'order' => 27,
            'menu_icon' => 'feather-home',
            'function_type_id' => 1,
            'name' => 'บริหารความเสี่ยง',
            'code' => 'riskmgm',
            'is_active' => 0
         ],
         [
            'order' => 28,
            'menu_icon' => 'feather-home',
            'function_type_id' => 1,
            'name' => 'คลังโลหิต',
            'code' => 'bloodbank',
            'is_active' => 0
         ],
         [
            'order' => 29,
            'menu_icon' => 'feather-home',
            'function_type_id' => 1,
            'name' => 'ใบส่งตัวพนักงาน',
            'code' => 'emp_refer',
            'is_active' => 0
         ],
         [
            'order' => 30,
            'menu_icon' => 'feather-home',
            'function_type_id' => 1,
            'name' => 'ใบเบิกค่ารักษาพนักงาน',
            'code' => 'emp_expense',
            'is_active' => 0
         ],
         [
            'order' => 31,
            'menu_icon' => 'feather-home',
            'function_type_id' => 1,
            'name' => 'ระบบissuetracker',
            'code' => 'issue',
            'is_active' => 0
         ],
         [
            'order' => 32,
            'menu_icon' => 'feather-home',
            'function_type_id' => 1,
            'name' => 'งานprimarycare',
            'code' => 'pcu',
            'is_active' => 0
         ],
         [
            'order' => 33,
            'menu_icon' => 'feather-home',
            'function_type_id' => 1,
            'name' => 'ทะเบียนผู้ป่วยโรคเรื้อรัง',
            'code' => 'chronic_registry',
            'is_active' => 0
         ],
         [
            'order' => 34,
            'menu_icon' => 'feather-home',
            'function_type_id' => 1,
            'name' => 'จิตเวช',
            'code' => 'psych',
            'is_active' => 0
         ],
         [
            'order' => 35,
            'menu_icon' => 'feather-home',
            'function_type_id' => 1,
            'name' => 'คลินิกarv',
            'code' => 'arv_clinic',
            'is_active' => 0
         ],
         [
            'order' => 36,
            'menu_icon' => 'feather-home',
            'function_type_id' => 1,
            'name' => 'ระบบงานโครงการ',
            'code' => 'project',
            'is_active' => 0
         ],
         [
            'order' => 37,
            'menu_icon' => 'feather-home',
            'function_type_id' => 1,
            'name' => 'ส่งออกข้อมูล',
            'code' => 'data_export',
            'is_active' => 0
         ],
         [
            'order' => 38,
            'menu_icon' => 'feather-home',
            'function_type_id' => 1,
            'name' => 'งานhomehealthcare',
            'code' => 'hhc',
            'is_active' => 0
         ],
         [
            'order' => 39,
            'menu_icon' => 'feather-home',
            'function_type_id' => 1,
            'name' => 'ศูนย์จัดเก็บรายได้',
            'code' => 'collect_center',
            'is_active' => 0
         ],
         [
            'order' => 40,
            'menu_icon' => 'feather-home',
            'function_type_id' => 1,
            'name' => 'ระบบประเมิน',
            'code' => 'assetment',
            'is_active' => 0
         ],
         [
            'order' => 41,
            'menu_icon' => 'feather-home',
            'function_type_id' => 1,
            'name' => 'superuser',
            'code' => 'super_user',
            'is_active' => 0
         ],
         [
            'order' => 42,
            'menu_icon' => 'feather-home',
            'function_type_id' => 1,
            'name' => 'ผู้ดูแลระบบ',
            'code' => 'admin',
            'is_active' => 0
         ],
         [
            'order' => 43,
            'menu_icon' => 'feather-home',
            'function_type_id' => 2,
            'name' => 'allmodule',
            'code' => 'all',
            'is_active' => 0
         ]
      ]);
    }
}
