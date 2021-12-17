<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrefixTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('prefixes')->insert([
            [
            'prefix_code' => '001',
            'prefix_short' => 'ด.ช.',
            'prefix_full' => 'เด็กชาย',
            ],
            [
            'prefix_code' => '002',
            'prefix_short' => 'ด.ญ.',
            'prefix_full' => 'เด็กหญิง',
            ],
            [
            'prefix_code' => '003',
            'prefix_short' => 'นาย',
            'prefix_full' => 'นาย',
            ],
            [
            'prefix_code' => '004',
            'prefix_short' => 'น.ส.',
            'prefix_full' => 'นางสาว',
            ],
            [
            'prefix_code' => '005',
            'prefix_short' => 'นาง',
            'prefix_full' => 'นาง',
            ],
            [
            'prefix_code' => '006',
            'prefix_short' => 'น.ช.ม.ล.',
            'prefix_full' => 'นักโทษชายหม่อมหลวง',
            ],
            [
            'prefix_code' => '007',
            'prefix_short' => 'น.ช.',
            'prefix_full' => 'นักโทษชาย',
            ],
            [
            'prefix_code' => '008',
            'prefix_short' => 'น.ญ.',
            'prefix_full' => 'นักโทษหญิง',
            ],
            [
            'prefix_code' => '009',
            'prefix_short' => 'น.ช.จ.ส.อ.',
            'prefix_full' => 'นักโทษชายจ่าสิบเอก',
            ],
            [
            'prefix_code' => '010',
            'prefix_short' => 'น.ช.จ.อ.',
            'prefix_full' => 'นักโทษชายจ่าเอก',
            ],
            [
            'prefix_code' => '011',
            'prefix_short' => 'น.ช.พลฯ.',
            'prefix_full' => 'นักโทษชายพลทหาร',
            ],
            [
            'prefix_code' => '012',
            'prefix_short' => 'น.ช.ร.ต.',
            'prefix_full' => 'นักโทษชายร้อยตรี',
            ],
            [
            'prefix_code' => '099',
            'prefix_short' => 'พระเจ้าหลานเธอ พระองค์เจ้า',
            'prefix_full' => 'พระเจ้าหลานเธอ พระองค์เจ้า',
            ],
            [
            'prefix_code' => '100',
            'prefix_short' => 'พระบาทสมเด็จพระเจ้าอยู่หัว',
            'prefix_full' => 'พระบาทสมเด็จพระเจ้าอยู่หัว',
            ],
            [
            'prefix_code' => '101',
            'prefix_short' => 'สมเด็จพระนางเจ้า',
            'prefix_full' => 'สมเด็จพระนางเจ้า',
            ],
            [
            'prefix_code' => '102',
            'prefix_short' => 'สมเด็จพระศรีนครินทราบรมราชชนนี',
            'prefix_full' => 'สมเด็จพระศรีนครินทราบรมราชชนนี',
            ],
            [
            'prefix_code' => '103',
            'prefix_short' => 'พลโทสมเด็จพระบรมโอรสาธิราช',
            'prefix_full' => 'พลโทสมเด็จพระบรมโอรสาธิราช',
            ],
            [
            'prefix_code' => '104',
            'prefix_short' => 'พลตรีสมเด็จพระเทพรัตนราชสุดา',
            'prefix_full' => 'พลตรีสมเด็จพระเทพรัตนราชสุดา',
            ],
            [
            'prefix_code' => '105',
            'prefix_short' => 'พระเจ้าวรวงศ์เธอพระองค์หญิง',
            'prefix_full' => 'พระเจ้าวรวงศ์เธอพระองค์หญิง',
            ],
            [
            'prefix_code' => '106',
            'prefix_short' => 'พระเจ้าวรวงศ์เธอ พระองค์เจ้า',
            'prefix_full' => 'พระเจ้าวรวงศ์เธอ พระองค์เจ้า',
            ],
            [
            'prefix_code' => '107',
            'prefix_short' => 'สมเด็จพระราชชนนี',
            'prefix_full' => 'สมเด็จพระราชชนนี',
            ],
            [
            'prefix_code' => '108',
            'prefix_short' => 'สมเด็จพระเจ้าพี่นางเธอเจ้าฟ้า',
            'prefix_full' => 'สมเด็จพระเจ้าพี่นางเธอเจ้าฟ้า',
            ],
            [
            'prefix_code' => '109',
            'prefix_short' => 'สมเด็จพระ',
            'prefix_full' => 'สมเด็จพระ',
            ],
            [
            'prefix_code' => '110',
            'prefix_short' => 'สมเด็จพระเจ้าลูกเธอ',
            'prefix_full' => 'สมเด็จพระเจ้าลูกเธอ',
            ],
            [
            'prefix_code' => '111',
            'prefix_short' => 'สมเด็จพระเจ้าลูกยาเธอ',
            'prefix_full' => 'สมเด็จพระเจ้าลูกยาเธอ',
            ],
            [
            'prefix_code' => '112',
            'prefix_short' => 'สมเด็จเจ้าฟ้า',
            'prefix_full' => 'สมเด็จเจ้าฟ้า',
            ],
            [
            'prefix_code' => '113',
            'prefix_short' => 'พระเจ้าบรมวงศ์เธอ',
            'prefix_full' => 'พระเจ้าบรมวงศ์เธอ',
            ],
            [
            'prefix_code' => '114',
            'prefix_short' => 'พระเจ้าวรวงศ์เธอ',
            'prefix_full' => 'พระเจ้าวรวงศ์เธอ',
            ],
            [
            'prefix_code' => '115',
            'prefix_short' => 'พระเจ้าหลานเธอ',
            'prefix_full' => 'พระเจ้าหลานเธอ',
            ],
            [
            'prefix_code' => '116',
            'prefix_short' => 'พระเจ้าหลานยาเธอ',
            'prefix_full' => 'พระเจ้าหลานยาเธอ',
            ],
            [
            'prefix_code' => '117',
            'prefix_short' => 'พระวรวงศ์เธอ',
            'prefix_full' => 'พระวรวงศ์เธอ',
            ],
            [
            'prefix_code' => '118',
            'prefix_short' => 'สมเด็จพระเจ้าภคินีเธอ',
            'prefix_full' => 'สมเด็จพระเจ้าภคินีเธอ',
            ],
            [
            'prefix_code' => '119',
            'prefix_short' => 'พระองค์เจ้า',
            'prefix_full' => 'พระองค์เจ้า',
            ],
            [
            'prefix_code' => '120',
            'prefix_short' => 'ม.จ.',
            'prefix_full' => 'หม่อมเจ้า',
            ],
            [
            'prefix_code' => '121',
            'prefix_short' => 'ม.ร.ว.',
            'prefix_full' => 'หม่อมราชวงศ์',
            ],
            [
            'prefix_code' => '122',
            'prefix_short' => 'ม.ล.',
            'prefix_full' => 'หม่อมหลวง',
            ],
            [
            'prefix_code' => '123',
            'prefix_short' => 'พระยา',
            'prefix_full' => 'พระยา',
            ],
            [
            'prefix_code' => '124',
            'prefix_short' => 'หลวง',
            'prefix_full' => 'หลวง',
            ],
            [
            'prefix_code' => '125',
            'prefix_short' => 'ขุน',
            'prefix_full' => 'ขุน',
            ],
            [
            'prefix_code' => '126',
            'prefix_short' => 'หมื่น',
            'prefix_full' => 'หมื่น',
            ],
            [
            'prefix_code' => '127',
            'prefix_short' => 'เจ้าคุณ',
            'prefix_full' => 'เจ้าคุณ',
            ],
            [
            'prefix_code' => '128',
            'prefix_short' => 'พระวรวงศ์เธอพระองค์เจ้า',
            'prefix_full' => 'พระวรวงศ์เธอพระองค์เจ้า',
            ],
            [
            'prefix_code' => '129',
            'prefix_short' => 'คุณ',
            'prefix_full' => 'คุณ',
            ],
            [
            'prefix_code' => '130',
            'prefix_short' => 'คุณหญิง',
            'prefix_full' => 'คุณหญิง',
            ],
            [
            'prefix_code' => '131',
            'prefix_short' => 'ท่านผู้หญิง ม.ล.',
            'prefix_full' => 'ท่านผู้หญิงหม่อมหลวง',
            ],
            [
            'prefix_code' => '132',
            'prefix_short' => 'ศจ.น.พ.',
            'prefix_full' => 'ศาสตราจารย์นายแพทย์',
            ],
            [
            'prefix_code' => '133',
            'prefix_short' => 'พ.ญ.คุณหญิง',
            'prefix_full' => 'แพทย์หญิงคุณหญิง',
            ],
            [
            'prefix_code' => '134',
            'prefix_short' => 'น.พ.',
            'prefix_full' => 'นายแพทย์',
            ],
            [
            'prefix_code' => '135',
            'prefix_short' => 'พ.ญ.',
            'prefix_full' => 'แพทย์หญิง',
            ],
            [
            'prefix_code' => '136',
            'prefix_short' => 'ท.พ.',
            'prefix_full' => 'ทัณตแพทย์',
            ],
            [
            'prefix_code' => '137',
            'prefix_short' => 'ท.ญ.',
            'prefix_full' => 'ทัณตแพทย์หญิง',
            ],
            [
            'prefix_code' => '138',
            'prefix_short' => 'สพ.',
            'prefix_full' => 'สัตวแพทย์',
            ],
            [
            'prefix_code' => '139',
            'prefix_short' => 'สญ.',
            'prefix_full' => 'สัตวแพทย์หญิง',
            ],
            [
            'prefix_code' => '140',
            'prefix_short' => 'ดร.',
            'prefix_full' => 'ดอกเตอร์',
            ],
            [
            'prefix_code' => '141',
            'prefix_short' => 'ผศ.',
            'prefix_full' => 'ผู้ช่วยศาสตราจารย์',
            ],
            [
            'prefix_code' => '142',
            'prefix_short' => 'รศ.',
            'prefix_full' => 'รองศาสตราจารย์',
            ],
            [
            'prefix_code' => '143',
            'prefix_short' => 'ศจ.',
            'prefix_full' => 'ศาสตราจารย์',
            ],
            [
            'prefix_code' => '144',
            'prefix_short' => 'ภก.',
            'prefix_full' => 'เภสัชกรชาย',
            ],
            [
            'prefix_code' => '145',
            'prefix_short' => 'ภญ.',
            'prefix_full' => 'เภสัชกรหญิง',
            ],
            [
            'prefix_code' => '146',
            'prefix_short' => 'หม่อม',
            'prefix_full' => 'หม่อม',
            ],
            [
            'prefix_code' => '147',
            'prefix_short' => 'รองอำมาตย์เอก',
            'prefix_full' => 'รองอำมาตย์เอก',
            ],
            [
            'prefix_code' => '148',
            'prefix_short' => 'ท้าว',
            'prefix_full' => 'ท้าว',
            ],
            [
            'prefix_code' => '149',
            'prefix_short' => 'เจ้า',
            'prefix_full' => 'เจ้า',
            ],
            [
            'prefix_code' => '150',
            'prefix_short' => 'ท่านผู้หญิง',
            'prefix_full' => 'ท่านผู้หญิง',
            ],
            [
            'prefix_code' => '151',
            'prefix_short' => 'คุณพระ',
            'prefix_full' => 'คุณพระ',
            ],
            [
            'prefix_code' => '152',
            'prefix_short' => 'ศจ.คุณหญิง',
            'prefix_full' => 'ศาสตราจารย์คุณหญิง',
            ],
            [
            'prefix_code' => '153',
            'prefix_short' => 'ซิสเตอร์',
            'prefix_full' => 'ซิสเตอร์',
            ],
            [
            'prefix_code' => '154',
            'prefix_short' => 'เจ้าชาย',
            'prefix_full' => 'เจ้าชาย',
            ],
            [
            'prefix_code' => '155',
            'prefix_short' => 'เจ้าหญิง',
            'prefix_full' => 'เจ้าหญิง',
            ],
            [
            'prefix_code' => '156',
            'prefix_short' => 'รองเสวกตรี',
            'prefix_full' => 'รองเสวกตรี',
            ],
            [
            'prefix_code' => '157',
            'prefix_short' => 'เสด็จเจ้า',
            'prefix_full' => 'เสด็จเจ้า',
            ],
            [
            'prefix_code' => '158',
            'prefix_short' => 'เอกอัครราชฑูต',
            'prefix_full' => 'เอกอัครราชฑูต',
            ],
            [
            'prefix_code' => '159',
            'prefix_short' => 'พลสารวัตร',
            'prefix_full' => 'พลสารวัตร',
            ],
            [
            'prefix_code' => '160',
            'prefix_short' => 'สมเด็จเจ้า',
            'prefix_full' => 'สมเด็จเจ้า',
            ],
            [
            'prefix_code' => '161',
            'prefix_short' => 'เจ้าฟ้า',
            'prefix_full' => 'เจ้าฟ้า',
            ],
            [
            'prefix_code' => '162',
            'prefix_short' => 'รองอำมาตย์ตรี',
            'prefix_full' => 'รองอำมาตย์ตรี',
            ],
            [
            'prefix_code' => '163',
            'prefix_short' => 'ม.จ.หญิง',
            'prefix_full' => 'หม่อมเจ้าหญิง',
            ],
            [
            'prefix_code' => '164',
            'prefix_short' => 'ทูลกระหม่อม',
            'prefix_full' => 'ทูลกระหม่อม',
            ],
            [
            'prefix_code' => '165',
            'prefix_short' => 'ศ.ดร.',
            'prefix_full' => 'ศาสตราจารย์ดอกเตอร์',
            ],
            [
            'prefix_code' => '166',
            'prefix_short' => 'เจ้านาง',
            'prefix_full' => 'เจ้านาง',
            ],
            [
            'prefix_code' => '167',
            'prefix_short' => 'จ่าสำรอง',
            'prefix_full' => 'จ่าสำรอง',
            ],
            [
            'prefix_code' => '200',
            'prefix_short' => 'พล.อ.',
            'prefix_full' => 'พลเอก',
            ],
            [
            'prefix_code' => '201',
            'prefix_short' => 'ว่าที่ พล.อ.',
            'prefix_full' => 'ว่าที่พลเอก',
            ],
            [
            'prefix_code' => '202',
            'prefix_short' => 'พล.ท.',
            'prefix_full' => 'พลโท',
            ],
            [
            'prefix_code' => '204',
            'prefix_short' => 'พล.ต.',
            'prefix_full' => 'พลตรี',
            ],
            [
            'prefix_code' => '205',
            'prefix_short' => 'ว่าที่ พล.ต.',
            'prefix_full' => 'ว่าที่พลตรี',
            ],
            [
            'prefix_code' => '206',
            'prefix_short' => 'พ.อ.(พิเศษ)',
            'prefix_full' => 'พันเอกพิเศษ',
            ],
            [
            'prefix_code' => '207',
            'prefix_short' => 'ว่าที่ พ.อ.(พิเศษ)',
            'prefix_full' => 'ว่าที่พันเอกพิเศษ',
            ],
            [
            'prefix_code' => '208',
            'prefix_short' => 'พ.อ.',
            'prefix_full' => 'พันเอก',
            ],
            [
            'prefix_code' => '209',
            'prefix_short' => 'ว่าที่ พ.อ.',
            'prefix_full' => 'ว่าที่พันเอก',
            ],
            [
            'prefix_code' => '210',
            'prefix_short' => 'พ.ท.',
            'prefix_full' => 'พันโท',
            ],
            [
            'prefix_code' => '211',
            'prefix_short' => 'ว่าที่ พ.ท.',
            'prefix_full' => 'ว่าที่พันโท',
            ],
            [
            'prefix_code' => '212',
            'prefix_short' => 'พ.ต.',
            'prefix_full' => 'พันตรี',
            ],
            [
            'prefix_code' => '213',
            'prefix_short' => 'ว่าที่ พ.ต.',
            'prefix_full' => 'ว่าที่พันตรี',
            ],
            [
            'prefix_code' => '214',
            'prefix_short' => 'ร.อ.',
            'prefix_full' => 'ร้อยเอก',
            ],
            [
            'prefix_code' => '215',
            'prefix_short' => 'ว่าที่ ร.อ.',
            'prefix_full' => 'ว่าที่ร้อยเอก',
            ],
            [
            'prefix_code' => '216',
            'prefix_short' => 'ร.ท.',
            'prefix_full' => 'ร้อยโท',
            ],
            [
            'prefix_code' => '217',
            'prefix_short' => 'ว่าที่ ร.ท.',
            'prefix_full' => 'ว่าที่ร้อยโท',
            ],
            [
            'prefix_code' => '218',
            'prefix_short' => 'ร.ต.',
            'prefix_full' => 'ร้อยตรี',
            ],
            [
            'prefix_code' => '219',
            'prefix_short' => 'ว่าที่ ร.ต.',
            'prefix_full' => 'ว่าที่ร้อยตรี',
            ],
            [
            'prefix_code' => '220',
            'prefix_short' => 'จ.ส.อ.',
            'prefix_full' => 'จ่าสิบเอก',
            ],
            [
            'prefix_code' => '221',
            'prefix_short' => 'จ.ส.ท.',
            'prefix_full' => 'จ่าสิบโท',
            ],
            [
            'prefix_code' => '222',
            'prefix_short' => 'จ.ส.ต.',
            'prefix_full' => 'จ่าสิบตรี',
            ],
            [
            'prefix_code' => '223',
            'prefix_short' => 'ส.อ.',
            'prefix_full' => 'สิบเอก',
            ],
            [
            'prefix_code' => '224',
            'prefix_short' => 'ส.ท.',
            'prefix_full' => 'สิบโท',
            ],
            [
            'prefix_code' => '225',
            'prefix_short' => 'ส.ต.',
            'prefix_full' => 'สิบตรี',
            ],
            [
            'prefix_code' => '226',
            'prefix_short' => 'พลฯ',
            'prefix_full' => 'พลทหาร',
            ],
            [
            'prefix_code' => '227',
            'prefix_short' => 'นนร.',
            'prefix_full' => 'นักเรียนนายร้อย',
            ],
            [
            'prefix_code' => '228',
            'prefix_short' => 'นนส.',
            'prefix_full' => 'นักเรียนนายสิบ',
            ],
            [
            'prefix_code' => '229',
            'prefix_short' => 'พล.จ.',
            'prefix_full' => 'พลจัตวา',
            ],
            [
            'prefix_code' => '230',
            'prefix_short' => 'พลฯ อาสา',
            'prefix_full' => 'พลฯ อาสาสมัคร',
            ],
            [
            'prefix_code' => '231',
            'prefix_short' => 'ร.อ.ม.จ.',
            'prefix_full' => 'ร้อยเอกหม่อมเจ้า',
            ],
            [
            'prefix_code' => '232',
            'prefix_short' => 'พล.ท.ม.จ.',
            'prefix_full' => 'พลโทหม่อมเจ้า',
            ],
            [
            'prefix_code' => '233',
            'prefix_short' => 'ร.ต.ม.จ.',
            'prefix_full' => 'ร้อยตรีหม่อมเจ้า',
            ],
            [
            'prefix_code' => '234',
            'prefix_short' => 'ร.ท.ม.จ.',
            'prefix_full' => 'ร้อยโทหม่อมเจ้า',
            ],
            [
            'prefix_code' => '235',
            'prefix_short' => 'พ.ท.ม.จ.',
            'prefix_full' => 'พันโทหม่อมเจ้า',
            ],
            [
            'prefix_code' => '236',
            'prefix_short' => 'พ.อ.ม.จ.',
            'prefix_full' => 'พันเอกหม่อมเจ้า',
            ],
            [
            'prefix_code' => '237',
            'prefix_short' => 'พ.ต.ม.ร.ว.',
            'prefix_full' => 'พันตรีหม่อมราชวงศ์',
            ],
            [
            'prefix_code' => '238',
            'prefix_short' => 'พ.ท.ม.ร.ว.',
            'prefix_full' => 'พันโทหม่อมราชวงศ์',
            ],
            [
            'prefix_code' => '239',
            'prefix_short' => 'ส.ต.ม.ร.ว.',
            'prefix_full' => 'สิบตรีหม่อมราชวงศ์',
            ],
            [
            'prefix_code' => '240',
            'prefix_short' => 'พ.อ.ม.ร.ว.',
            'prefix_full' => 'พันเอกหม่อมราชวงศ์',
            ],
            [
            'prefix_code' => '241',
            'prefix_short' => 'จ.ส.อ.ม.ร.ว.',
            'prefix_full' => 'จ่าสิบเอกหม่อมราชวงศ์',
            ],
            [
            'prefix_code' => '242',
            'prefix_short' => 'ร.อ.ม.ร.ว.',
            'prefix_full' => 'ร้อยเอกหม่อมราชวงศ์',
            ],
            [
            'prefix_code' => '243',
            'prefix_short' => 'ร.ต.ม.ร.ว.',
            'prefix_full' => 'ร้อยตรีหม่อมราชวงศ์',
            ],
            [
            'prefix_code' => '244',
            'prefix_short' => 'ส.อ.ม.ร.ว.',
            'prefix_full' => 'สิบเอกหม่อมราชวงศ์',
            ],
            [
            'prefix_code' => '245',
            'prefix_short' => 'ร.ท.ม.ร.ว.',
            'prefix_full' => 'ร้อยโทหม่อมราชวงศ์',
            ],
            [
            'prefix_code' => '246',
            'prefix_short' => 'พ.อ.(พิเศษ)ม.ร.ว.',
            'prefix_full' => 'พันเอก(พิเศษ)หม่อมราชวงศ์',
            ],
            [
            'prefix_code' => '247',
            'prefix_short' => 'พลฯม.ล.',
            'prefix_full' => 'พลฯหม่อมหลวง',
            ],
            [
            'prefix_code' => '248',
            'prefix_short' => 'ร.อ.ม.ล.',
            'prefix_full' => 'ร้อยเอกหม่อมหลวง',
            ],
            [
            'prefix_code' => '249',
            'prefix_short' => 'ส.ท.ม.ล.',
            'prefix_full' => 'สิบโทหม่อมหลวง',
            ],
            [
            'prefix_code' => '250',
            'prefix_short' => 'พล.ท.ม.ล.',
            'prefix_full' => 'พลโทหม่อมหลวง',
            ],
            [
            'prefix_code' => '251',
            'prefix_short' => 'ร.ท.ม.ล.',
            'prefix_full' => 'ร้อยโทหม่อมหลวง',
            ],
            [
            'prefix_code' => '252',
            'prefix_short' => 'ร.ต.ม.ล.',
            'prefix_full' => 'ร้อยตรีหม่อมหลวง',
            ],
            [
            'prefix_code' => '253',
            'prefix_short' => 'ส.อ.ม.ล.',
            'prefix_full' => 'สิบเอกหม่อมหลวง',
            ],
            [
            'prefix_code' => '254',
            'prefix_short' => 'พล.ต.ม.ล.',
            'prefix_full' => 'พลตรีหม่อมหลวง',
            ],
            [
            'prefix_code' => '255',
            'prefix_short' => 'พ.ต.ม.ล.',
            'prefix_full' => 'พันตรีหม่อมหลวง',
            ],
            [
            'prefix_code' => '256',
            'prefix_short' => 'พ.อ.ม.ล.',
            'prefix_full' => 'พันเอกหม่อมหลวง',
            ],
            [
            'prefix_code' => '257',
            'prefix_short' => 'พ.ท.ม.ล.',
            'prefix_full' => 'พันโทหม่อมหลวง',
            ],
            [
            'prefix_code' => '258',
            'prefix_short' => 'จ.ส.ต.ม.ล.',
            'prefix_full' => 'จ่าสิบตรีหม่อมหลวง',
            ],
            [
            'prefix_code' => '259',
            'prefix_short' => 'นนร.ม.ล.',
            'prefix_full' => 'นักเรียนนายร้อยหม่อมหลวง',
            ],
            [
            'prefix_code' => '260',
            'prefix_short' => 'ว่าที่ร.ต.ม.ล.',
            'prefix_full' => 'ว่าที่ร้อยตรีหม่อมหลวง',
            ],
            [
            'prefix_code' => '261',
            'prefix_short' => 'จ.ส.อ.ม.ล.',
            'prefix_full' => 'จ่าสิบเอกหม่อมหลวง',
            ],
            [
            'prefix_code' => '262',
            'prefix_short' => 'ร.อ.น.พ.',
            'prefix_full' => 'ร้อยเอกนายแพทย์',
            ],
            [
            'prefix_code' => '263',
            'prefix_short' => 'ร.อ.พ.ญ.',
            'prefix_full' => 'ร้อยเอกแพทย์หญิง',
            ],
            [
            'prefix_code' => '264',
            'prefix_short' => 'ร.ท.น.พ.',
            'prefix_full' => 'ร้อยโทนายแพทย์',
            ],
            [
            'prefix_code' => '265',
            'prefix_short' => 'พ.ต.น.พ.',
            'prefix_full' => 'พันตรีนายแพทย์',
            ],
            [
            'prefix_code' => '266',
            'prefix_short' => 'ว่าที่ ร.ท.น.พ.',
            'prefix_full' => 'ว่าที่ร้อยโทนายแพทย์',
            ],
            [
            'prefix_code' => '267',
            'prefix_short' => 'พ.อ.น.พ.',
            'prefix_full' => 'พันเอกนายแพทย์',
            ],
            [
            'prefix_code' => '268',
            'prefix_short' => 'ร.ต.น.พ.',
            'prefix_full' => 'ร้อยตรีนายแพทย์',
            ],
            [
            'prefix_code' => '269',
            'prefix_short' => 'ร.ท.พ.ญ.',
            'prefix_full' => 'ร้อยโทแพทย์หญิง',
            ],
            [
            'prefix_code' => '270',
            'prefix_short' => 'พล.ต.น.พ.',
            'prefix_full' => 'พลตรีนายแพทย์',
            ],
            [
            'prefix_code' => '271',
            'prefix_short' => 'พ.ท.น.พ.',
            'prefix_full' => 'พันโทนายแพทย์',
            ],
            [
            'prefix_code' => '272',
            'prefix_short' => 'จอมพล',
            'prefix_full' => 'จอมพล',
            ],
            [
            'prefix_code' => '273',
            'prefix_short' => 'พ.ท.หลวง',
            'prefix_full' => 'พันโทหลวง',
            ],
            [
            'prefix_code' => '274',
            'prefix_short' => 'พ.ต.พระเจ้าวรวงศ์เธอพระองค์เจ้า',
            'prefix_full' => 'พันตรีพระเจ้าวรวงศ์เธอพระองค์เจ้า',
            ],
            [
            'prefix_code' => '275',
            'prefix_short' => 'ศจ.พ.อ.',
            'prefix_full' => 'ศาสตราจารย์พันเอก',
            ],
            [
            'prefix_code' => '276',
            'prefix_short' => 'พ.ต.หลวง',
            'prefix_full' => 'พันตรีหลวง',
            ],
            [
            'prefix_code' => '277',
            'prefix_short' => 'พล.ท.หลวง',
            'prefix_full' => 'พลโทหลวง',
            ],
            [
            'prefix_code' => '278',
            'prefix_short' => 'ร.ท.ดร.',
            'prefix_full' => 'ร้อยโทดอกเตอร์',
            ],
            [
            'prefix_code' => '279',
            'prefix_short' => 'ร.อ.ดร.',
            'prefix_full' => 'ร้อยเอกดอกเตอร์',
            ],
            [
            'prefix_code' => '280',
            'prefix_short' => 'ส.ห.',
            'prefix_full' => 'สารวัตรทหาร',
            ],
            [
            'prefix_code' => '281',
            'prefix_short' => 'ร.ต.ดร.',
            'prefix_full' => 'ร้อยตรีดอกเตอร์',
            ],
            [
            'prefix_code' => '282',
            'prefix_short' => 'พ.ต.คุณหญิง',
            'prefix_full' => 'พันตรีคุณหญิง',
            ],
            [
            'prefix_code' => '283',
            'prefix_short' => 'จ.ส.ต.ม.ร.ว.',
            'prefix_full' => 'จ่าสิบตรีหม่อมราชวงศ์',
            ],
            [
            'prefix_code' => '284',
            'prefix_short' => 'พล.จ.หลวง',
            'prefix_full' => 'พลจัตวาหลวง',
            ],
            [
            'prefix_code' => '285',
            'prefix_short' => 'พล.ต.ม.ร.ว.',
            'prefix_full' => 'พลตรีหม่อมราชวงศ์',
            ],
            [
            'prefix_code' => '286',
            'prefix_short' => 'พ.ต.พระเจ้าวรวงศ์เธอพระองค์',
            'prefix_full' => 'พันตรีพระเจ้าวรวงศ์เธอพระองค์',
            ],
            [
            'prefix_code' => '287',
            'prefix_short' => 'ท่านผู้หญิง ม.ร.ว.',
            'prefix_full' => 'ท่านผู้หญิงหม่อมราชวงศ์',
            ],
            [
            'prefix_code' => '288',
            'prefix_short' => 'ศจ.ร.อ.',
            'prefix_full' => 'ศาสตราจารย์ร้อยเอก',
            ],
            [
            'prefix_code' => '289',
            'prefix_short' => 'พ.ท.คุณหญิง',
            'prefix_full' => 'พันโทคุณหญิง',
            ],
            [
            'prefix_code' => '290',
            'prefix_short' => 'ร.ต.พ.ญ.',
            'prefix_full' => 'ร้อยตรีแพทย์หญิง',
            ],
            [
            'prefix_code' => '291',
            'prefix_short' => 'พล.อ.มล.',
            'prefix_full' => 'พลเอกหม่อมหลวง',
            ],
            [
            'prefix_code' => '292',
            'prefix_short' => 'ว่าที่ ร.ต.ม.ร.ว.',
            'prefix_full' => 'ว่าที่ร้อยตรีหม่อมราชวงศ์',
            ],
            [
            'prefix_code' => '293',
            'prefix_short' => 'พ.อ.หญิง คุณหญิง',
            'prefix_full' => 'พันเอกหญิงคุณหญิง',
            ],
            [
            'prefix_code' => '294',
            'prefix_short' => 'จ.ส.อ.พิเศษ',
            'prefix_full' => 'จ่าสิบเอกพิเศษ',
            ],
            [
            'prefix_code' => '351',
            'prefix_short' => 'พล.ร.อ.',
            'prefix_full' => 'พลเรือเอก',
            ],
            [
            'prefix_code' => '352',
            'prefix_short' => 'ว่าที่ พล.ร.อ.',
            'prefix_full' => 'ว่าที่พลเรือเอก',
            ],
            [
            'prefix_code' => '353',
            'prefix_short' => 'พล.ร.ท.',
            'prefix_full' => 'พลเรือโท',
            ],
            [
            'prefix_code' => '354',
            'prefix_short' => 'ว่าที่ พล.ร.ท.',
            'prefix_full' => 'ว่าที่พลเรือโท',
            ],
            [
            'prefix_code' => '355',
            'prefix_short' => 'พล.ร.ต.',
            'prefix_full' => 'พลเรือตรี',
            ],
            [
            'prefix_code' => '356',
            'prefix_short' => 'ว่าที่ พล.ร.ต.',
            'prefix_full' => 'ว่าที่พลเรือตรี',
            ],
            [
            'prefix_code' => '357',
            'prefix_short' => 'น.อ.พิเศษ',
            'prefix_full' => 'นาวาเอกพิเศษ',
            ],
            [
            'prefix_code' => '358',
            'prefix_short' => 'ว่าที่ น.อ.พิเศษ',
            'prefix_full' => 'ว่าที่นาวาเอกพิเศษ',
            ],
            [
            'prefix_code' => '359',
            'prefix_short' => 'น.อ.',
            'prefix_full' => 'นาวาเอก',
            ],
            [
            'prefix_code' => '360',
            'prefix_short' => 'ว่าที่ น.อ.',
            'prefix_full' => 'ว่าที่นาวาเอก',
            ],
            [
            'prefix_code' => '361',
            'prefix_short' => 'น.ท.',
            'prefix_full' => 'นาวาโท',
            ],
            [
            'prefix_code' => '362',
            'prefix_short' => 'ว่าที่ น.ท.',
            'prefix_full' => 'ว่าที่นาวาโท',
            ],
            [
            'prefix_code' => '363',
            'prefix_short' => 'น.ต.',
            'prefix_full' => 'นาวาตรี',
            ],
            [
            'prefix_code' => '364',
            'prefix_short' => 'ว่าที่ น.ต.',
            'prefix_full' => 'ว่าที่นาวาตรี',
            ],
            [
            'prefix_code' => '371',
            'prefix_short' => 'พ.จ.อ.',
            'prefix_full' => 'พันจ่าเอก',
            ],
            [
            'prefix_code' => '372',
            'prefix_short' => 'พ.จ.ท.',
            'prefix_full' => 'พันจ่าโท',
            ],
            [
            'prefix_code' => '373',
            'prefix_short' => 'พ.จ.ต.',
            'prefix_full' => 'พันจ่าตรี',
            ],
            [
            'prefix_code' => '374',
            'prefix_short' => 'จ.อ.',
            'prefix_full' => 'จ่าเอก',
            ],
            [
            'prefix_code' => '375',
            'prefix_short' => 'จ.ท.',
            'prefix_full' => 'จ่าโท',
            ],
            [
            'prefix_code' => '376',
            'prefix_short' => 'จ.ต.',
            'prefix_full' => 'จ่าตรี',
            ],
            [
            'prefix_code' => '379',
            'prefix_short' => 'นรจ.',
            'prefix_full' => 'นักเรียนจ่าทหารเรือ',
            ],
            [
            'prefix_code' => '380',
            'prefix_short' => 'พล.ร.จ.',
            'prefix_full' => 'พลเรือจัตวา',
            ],
            [
            'prefix_code' => '381',
            'prefix_short' => 'น.ท.ม.จ.',
            'prefix_full' => 'นาวาโทหม่อมเจ้า',
            ],
            [
            'prefix_code' => '382',
            'prefix_short' => 'น.อ.ม.จ.',
            'prefix_full' => 'นาวาเอกหม่อมเจ้า',
            ],
            [
            'prefix_code' => '383',
            'prefix_short' => 'น.ต.ม.จ.',
            'prefix_full' => 'นาวาตรีหม่อมเจ้า',
            ],
            [
            'prefix_code' => '384',
            'prefix_short' => 'พล.ร.ต.ม.ร.ว.',
            'prefix_full' => 'พลเรือตรีหม่อมราชวงศ์',
            ],
            [
            'prefix_code' => '385',
            'prefix_short' => 'น.อ.ม.ร.ว.',
            'prefix_full' => 'นาวาเอกหม่อมราชวงศ์',
            ],
            [
            'prefix_code' => '386',
            'prefix_short' => 'น.ท.ม.ร.ว.',
            'prefix_full' => 'นาวาโทหม่อมราชวงศ์',
            ],
            [
            'prefix_code' => '387',
            'prefix_short' => 'น.ต.ม.ร.ว.',
            'prefix_full' => 'นาวาตรีหม่อมราชวงศ์',
            ],
            [
            'prefix_code' => '388',
            'prefix_short' => 'น.ท.ม.ล.',
            'prefix_full' => 'นาวาโทหม่อมหลวง',
            ],
            [
            'prefix_code' => '389',
            'prefix_short' => 'น.ต.ม.ล.',
            'prefix_full' => 'นาวาตรีหม่อมหลวง',
            ],
            [
            'prefix_code' => '390',
            'prefix_short' => 'พ.จ.อ.ม.ล.',
            'prefix_full' => 'พันจ่าเอกหม่อมหลวง',
            ],
            [
            'prefix_code' => '391',
            'prefix_short' => 'น.ต.พ.ญ.',
            'prefix_full' => 'นาวาตรีแพทย์หญิง',
            ],
            [
            'prefix_code' => '392',
            'prefix_short' => 'น.อ.หลวง',
            'prefix_full' => 'นาวาอากาศเอกหลวง',
            ],
            [
            'prefix_code' => '393',
            'prefix_short' => 'พล.ร.ต.ม.จ.',
            'prefix_full' => 'พลเรือตรีหม่อมเจ้า',
            ],
            [
            'prefix_code' => '395',
            'prefix_short' => 'น.ต.น.พ.',
            'prefix_full' => 'นาวาตรีนายแพทย์',
            ],
            [
            'prefix_code' => '396',
            'prefix_short' => 'พล.ร.ต.ม.ล.',
            'prefix_full' => 'พลเรือตรีหม่อมหลวง',
            ],
            [
            'prefix_code' => '500',
            'prefix_short' => 'พล.อ.อ.',
            'prefix_full' => 'พลอากาศเอก',
            ],
            [
            'prefix_code' => '501',
            'prefix_short' => 'ว่าที่ พล.อ.อ.',
            'prefix_full' => 'ว่าที่พลอากาศเอก',
            ],
            [
            'prefix_code' => '502',
            'prefix_short' => 'พล.อ.ท.',
            'prefix_full' => 'พลอากาศโท',
            ],
            [
            'prefix_code' => '503',
            'prefix_short' => 'ว่าที่ พล.อ.ท.',
            'prefix_full' => 'ว่าที่พลอากาศโท',
            ],
            [
            'prefix_code' => '504',
            'prefix_short' => 'พล.อ.ต.',
            'prefix_full' => 'พลอากาศตรี',
            ],
            [
            'prefix_code' => '505',
            'prefix_short' => 'ว่าที่ พล.อ.ต.',
            'prefix_full' => 'ว่าที่พลอากาศตรี',
            ],
            [
            'prefix_code' => '520',
            'prefix_short' => 'พ.อ.อ.',
            'prefix_full' => 'พันจ่าอากาศเอก',
            ],
            [
            'prefix_code' => '521',
            'prefix_short' => 'พ.อ.ท.',
            'prefix_full' => 'พันจ่าอากาศโท',
            ],
            [
            'prefix_code' => '522',
            'prefix_short' => 'พ.อ.ต.',
            'prefix_full' => 'พันจ่าอากาศตรี',
            ],
            [
            'prefix_code' => '527',
            'prefix_short' => 'นนอ.',
            'prefix_full' => 'นักเรียนนายเรืออากาศ',
            ],
            [
            'prefix_code' => '528',
            'prefix_short' => 'นจอ.',
            'prefix_full' => 'นักเรียนจ่าอากาศ',
            ],
            [
            'prefix_code' => '529',
            'prefix_short' => 'น.พ.อ.',
            'prefix_full' => 'นักเรียนพยาบาลทหารอากาศ',
            ],
            [
            'prefix_code' => '530',
            'prefix_short' => 'พ.อ.อ.ม.ร.ว.',
            'prefix_full' => 'พันอากาศเอกหม่อมราชวงศ์',
            ],
            [
            'prefix_code' => '531',
            'prefix_short' => 'พล.อ.ต.ม.ร.ว.',
            'prefix_full' => 'พลอากาศตรีหม่อมราชวงศ์',
            ],
            [
            'prefix_code' => '532',
            'prefix_short' => 'พล.อ.ท.ม.ล.',
            'prefix_full' => 'พลอากาศโทหม่อมหลวง',
            ],
            [
            'prefix_code' => '533',
            'prefix_short' => 'ร.ท.ขุน',
            'prefix_full' => 'เรืออากาศโทขุน',
            ],
            [
            'prefix_code' => '534',
            'prefix_short' => 'พ.อ.อ.ม.ล.',
            'prefix_full' => 'พันจ่าอากาศเอกหม่อมหลวง',
            ],
            [
            'prefix_code' => '536',
            'prefix_short' => 'พล.อ.อ.ม.ร.ว.',
            'prefix_full' => 'พลอากาศเอกหม่อมราชวงศ์',
            ],
            [
            'prefix_code' => '537',
            'prefix_short' => 'พล.อ.ต.ม.ล.',
            'prefix_full' => 'พลอากาศตรีหม่อมหลวง',
            ],
            [
            'prefix_code' => '538',
            'prefix_short' => 'พล.อ.จ.',
            'prefix_full' => 'พลอากาศจัตวา',
            ],
            [
            'prefix_code' => '539',
            'prefix_short' => 'พล.อ.ท.ม.ร.ว.',
            'prefix_full' => 'พลอากาศโทหม่อมราชวงศ์',
            ],
            [
            'prefix_code' => '540',
            'prefix_short' => 'น.อ.ม.ล.',
            'prefix_full' => 'นาวาอากาศเอกหม่อมหลวง',
            ],
            [
            'prefix_code' => '606',
            'prefix_short' => 'พระครูพิบูลสมณธรรม',
            'prefix_full' => 'พระครูพิบูลสมณธรรม',
            ],
            [
            'prefix_code' => '651',
            'prefix_short' => 'พล.ต.อ.',
            'prefix_full' => 'พลตำรวจเอก',
            ],
            [
            'prefix_code' => '652',
            'prefix_short' => 'ว่าที่ พล.ต.อ.',
            'prefix_full' => 'ว่าที่พลตำรวจเอก',
            ],
            [
            'prefix_code' => '653',
            'prefix_short' => 'พล.ต.ท.',
            'prefix_full' => 'พลตำรวจโท',
            ],
            [
            'prefix_code' => '654',
            'prefix_short' => 'ว่าที่ พล.ต.ท.',
            'prefix_full' => 'ว่าที่พลตำรวจโท',
            ],
            [
            'prefix_code' => '655',
            'prefix_short' => 'พล.ต.ต.',
            'prefix_full' => 'พลตำรวจตรี',
            ],
            [
            'prefix_code' => '656',
            'prefix_short' => 'ว่าที่ พล.ต.ต.',
            'prefix_full' => 'ว่าที่พลตำรวจตรี',
            ],
            [
            'prefix_code' => '657',
            'prefix_short' => 'พล.ต.จ.',
            'prefix_full' => 'พลตำรวจจัตวา',
            ],
            [
            'prefix_code' => '658',
            'prefix_short' => 'ว่าที่พล.ต.จ.',
            'prefix_full' => 'ว่าที่พลตำรวจจัตวา',
            ],
            [
            'prefix_code' => '659',
            'prefix_short' => 'พ.ต.อ. (พิเศษ)',
            'prefix_full' => 'พันตำรวจเอก (พิเศษ)',
            ],
            [
            'prefix_code' => '660',
            'prefix_short' => 'ว่าที่ พ.ต.อ.พิเศษ',
            'prefix_full' => 'ว่าที่พันตำรวจเอก(พิเศษ)',
            ],
            [
            'prefix_code' => '661',
            'prefix_short' => 'พ.ต.อ.',
            'prefix_full' => 'พันตำรวจเอก',
            ],
            [
            'prefix_code' => '662',
            'prefix_short' => 'ว่าที่ พ.ต.อ.',
            'prefix_full' => 'ว่าที่พันตำรวจเอก',
            ],
            [
            'prefix_code' => '663',
            'prefix_short' => 'พ.ต.ท.',
            'prefix_full' => 'พันตำรวจโท',
            ],
            [
            'prefix_code' => '664',
            'prefix_short' => 'ว่าที่ พ.ต.ท.',
            'prefix_full' => 'ว่าที่พันตำรวจโท',
            ],
            [
            'prefix_code' => '665',
            'prefix_short' => 'พ.ต.ต.',
            'prefix_full' => 'พันตำรวจตรี',
            ],
            [
            'prefix_code' => '666',
            'prefix_short' => 'ว่าที่ พ.ต.ต.',
            'prefix_full' => 'ว่าที่พันตำรวจตรี',
            ],
            [
            'prefix_code' => '667',
            'prefix_short' => 'ร.ต.อ.',
            'prefix_full' => 'ร้อยตำรวจเอก',
            ],
            [
            'prefix_code' => '668',
            'prefix_short' => 'ว่าที่ ร.ต.อ.',
            'prefix_full' => 'ว่าที่ร้อยตำรวจเอก',
            ],
            [
            'prefix_code' => '669',
            'prefix_short' => 'ร.ต.ท.',
            'prefix_full' => 'ร้อยตำรวจโท',
            ],
            [
            'prefix_code' => '670',
            'prefix_short' => 'ว่าที่ ร.ต.ท.',
            'prefix_full' => 'ว่าที่ร้อยตำรวจโท',
            ],
            [
            'prefix_code' => '671',
            'prefix_short' => 'ร.ต.ต.',
            'prefix_full' => 'ร้อยตำรวจตรี',
            ],
            [
            'prefix_code' => '672',
            'prefix_short' => 'ว่าที่ ร.ต.ต.',
            'prefix_full' => 'ว่าที่ร้อยตำรวจตรี',
            ],
            [
            'prefix_code' => '673',
            'prefix_short' => 'ด.ต.',
            'prefix_full' => 'นายดาบตำรวจ',
            ],
            [
            'prefix_code' => '675',
            'prefix_short' => 'ส.ต.อ.',
            'prefix_full' => 'สิบตำรวจเอก',
            ],
            [
            'prefix_code' => '676',
            'prefix_short' => 'ส.ต.ท.',
            'prefix_full' => 'สิบตำรวจโท',
            ],
            [
            'prefix_code' => '677',
            'prefix_short' => 'ส.ต.ต.',
            'prefix_full' => 'สิบตำรวจตรี',
            ],
            [
            'prefix_code' => '678',
            'prefix_short' => 'นรต.',
            'prefix_full' => 'นักเรียนนายร้อยตำรวจ',
            ],
            [
            'prefix_code' => '679',
            'prefix_short' => 'นสต.',
            'prefix_full' => 'นักเรียนนายสิบตำรวจ',
            ],
            [
            'prefix_code' => '680',
            'prefix_short' => 'นพต.',
            'prefix_full' => 'นักเรียนพลตำรวจ',
            ],
            [
            'prefix_code' => '682',
            'prefix_short' => 'พลฯพิเศษ',
            'prefix_full' => 'พลตำรวจพิเศษ',
            ],
            [
            'prefix_code' => '683',
            'prefix_short' => 'พลฯอาสา',
            'prefix_full' => 'พลตำรวจอาสาสมัคร',
            ],
            [
            'prefix_code' => '684',
            'prefix_short' => 'พลฯสำรอง',
            'prefix_full' => 'พลตำรวจสำรอง',
            ],
            [
            'prefix_code' => '685',
            'prefix_short' => 'พลฯสำรองพิเศษ',
            'prefix_full' => 'พลตำรวจสำรองพิเศษ',
            ],
            [
            'prefix_code' => '686',
            'prefix_short' => 'พลฯสมัคร',
            'prefix_full' => 'พลตำรวจสมัคร',
            ],
            [
            'prefix_code' => '687',
            'prefix_short' => 'อส.',
            'prefix_full' => 'สมาชิกอาสารักษาดินแดน',
            ],
            [
            'prefix_code' => '688',
            'prefix_short' => 'ก.ญ.',
            'prefix_full' => 'นายกองใหญ่',
            ],
            [
            'prefix_code' => '689',
            'prefix_short' => 'ก.อ.',
            'prefix_full' => 'นายกองเอก',
            ],
            [
            'prefix_code' => '690',
            'prefix_short' => 'ก.ท.',
            'prefix_full' => 'นายกองโท',
            ],
            [
            'prefix_code' => '691',
            'prefix_short' => 'ก.ต.',
            'prefix_full' => 'นายกองตรี',
            ],
            [
            'prefix_code' => '692',
            'prefix_short' => 'มว.อ.',
            'prefix_full' => 'นายหมวดเอก',
            ],
            [
            'prefix_code' => '693',
            'prefix_short' => 'มว.ท.',
            'prefix_full' => 'นายหมวดโท',
            ],
            [
            'prefix_code' => '694',
            'prefix_short' => 'มว.ต.',
            'prefix_full' => 'นายหมวดตรี',
            ],
            [
            'prefix_code' => '695',
            'prefix_short' => 'ม.ญ.',
            'prefix_full' => 'นายหมู่ใหญ่',
            ],
            [
            'prefix_code' => '696',
            'prefix_short' => 'ม.อ.',
            'prefix_full' => 'นายหมู่เอก',
            ],
            [
            'prefix_code' => '697',
            'prefix_short' => 'ม.ท.',
            'prefix_full' => 'นายหมู่โท',
            ],
            [
            'prefix_code' => '698',
            'prefix_short' => 'ม.ต.',
            'prefix_full' => 'นายหมู่ตรี',
            ],
            [
            'prefix_code' => '699',
            'prefix_short' => 'สมาชิกเอก',
            'prefix_full' => 'สมาชิกเอก',
            ],
            [
            'prefix_code' => '700',
            'prefix_short' => 'สมาชิกโท',
            'prefix_full' => 'สมาชิกโท',
            ],
            [
            'prefix_code' => '701',
            'prefix_short' => 'สมาชิกตรี',
            'prefix_full' => 'สมาชิกตรี',
            ],
            [
            'prefix_code' => '702',
            'prefix_short' => 'อส.ทพ.',
            'prefix_full' => 'อาสาสมัครทหารพราน',
            ],
            [
            'prefix_code' => '703',
            'prefix_short' => 'พ.ต.ท.ม.จ.',
            'prefix_full' => 'พันตำรวจโทหม่อมเจ้า',
            ],
            [
            'prefix_code' => '704',
            'prefix_short' => 'พ.ต.อ.ม.จ.',
            'prefix_full' => 'พันตำรวจเอกหม่อมเจ้า',
            ],
            [
            'prefix_code' => '705',
            'prefix_short' => 'นรต.ม.จ.',
            'prefix_full' => 'นักเรียนนายร้อยตำรวจหม่อมเจ้า',
            ],
            [
            'prefix_code' => '706',
            'prefix_short' => 'พล.ต.ต.ม.ร.ว.',
            'prefix_full' => 'พลตำรวจตรีหม่อมราชวงศ์',
            ],
            [
            'prefix_code' => '707',
            'prefix_short' => 'พ.ต.ต.ม.ร.ว.',
            'prefix_full' => 'พันตำรวจตรีหม่อมราชวงศ์',
            ],
            [
            'prefix_code' => '708',
            'prefix_short' => 'พ.ต.ท.ม.ร.ว.',
            'prefix_full' => 'พันตำรวจโทหม่อมราชวงศ์',
            ],
            [
            'prefix_code' => '709',
            'prefix_short' => 'พ.ต.อ.ม.ร.ว.',
            'prefix_full' => 'พันตำรวจเอกหม่อมราชวงศ์',
            ],
            [
            'prefix_code' => '710',
            'prefix_short' => 'ร.ต.อ.ม.ร.ว.',
            'prefix_full' => 'ร้อยตำรวจเอกหม่อมราชวงศ์',
            ],
            [
            'prefix_code' => '711',
            'prefix_short' => 'ส.ต.อ.ม.ล.',
            'prefix_full' => 'สิบตำรวจเอกหม่อมหลวง',
            ],
            [
            'prefix_code' => '712',
            'prefix_short' => 'พ.ต.อ.ม.ล.',
            'prefix_full' => 'พันตำรวจเอกหม่อมหลวง',
            ],
            [
            'prefix_code' => '713',
            'prefix_short' => 'พ.ต.ท.ม.ล.',
            'prefix_full' => 'พันตำรวจโทหม่อมหลวง',
            ],
            [
            'prefix_code' => '714',
            'prefix_short' => 'นรต.ม.ล.',
            'prefix_full' => 'นักเรียนนายร้อยตำรวจหม่อมหลวง',
            ],
            [
            'prefix_code' => '715',
            'prefix_short' => 'ร.ต.ท.ม.ล.',
            'prefix_full' => 'ร้อยตำรวจโทหม่อมหลวง',
            ],
            [
            'prefix_code' => '716',
            'prefix_short' => 'ด.ต.ม.ล.',
            'prefix_full' => 'นายดาบตำรวจหม่อมหลวง',
            ],
            [
            'prefix_code' => '717',
            'prefix_short' => 'พ.ต.ต.ม.ล.',
            'prefix_full' => 'พันตำรวจตรีหม่อมหลวง',
            ],
            [
            'prefix_code' => '718',
            'prefix_short' => 'ศจ.น.พ.พ.ต.อ.',
            'prefix_full' => 'ศาสตราจารย์นายแพทย์พันตำรวจเอก',
            ],
            [
            'prefix_code' => '719',
            'prefix_short' => 'พ.ต.ท.น.พ.',
            'prefix_full' => 'พันตำรวจโทนายแพทย์',
            ],
            [
            'prefix_code' => '720',
            'prefix_short' => 'ร.ต.ท.น.พ.',
            'prefix_full' => 'ร้อยตำรวจโทนายแพทย์',
            ],
            [
            'prefix_code' => '721',
            'prefix_short' => 'ร.ต.อ.น.พ.',
            'prefix_full' => 'ร้อยตำรวจเอกนายแพทย์',
            ],
            [
            'prefix_code' => '722',
            'prefix_short' => 'พ.ต.ต.นพ.',
            'prefix_full' => 'พันตำรวจตรีนายแพทย์',
            ],
            [
            'prefix_code' => '723',
            'prefix_short' => 'พ.ต.อ.น.พ.',
            'prefix_full' => 'พันตำรวจเอกนายแพทย์',
            ],
            [
            'prefix_code' => '724',
            'prefix_short' => 'พ.ต.ต.หลวง',
            'prefix_full' => 'พันตำรวจตรีหลวง',
            ],
            [
            'prefix_code' => '725',
            'prefix_short' => 'ร.ต.ท.ดร.',
            'prefix_full' => 'ร้อยตำรวจโทดอกเตอร์',
            ],
            [
            'prefix_code' => '726',
            'prefix_short' => 'พ.ต.อ.ดร.',
            'prefix_full' => 'พันตำรวจเอกดอกเตอร์',
            ],
            [
            'prefix_code' => '727',
            'prefix_short' => 'ร.ต.อ.ม.ล.',
            'prefix_full' => 'ร้อยตำรวจเอกหม่อมหลวง',
            ],
            [
            'prefix_code' => '729',
            'prefix_short' => 'พ.ต.อ.หญิง ท่านผู้หญิง',
            'prefix_full' => 'พันตำรวจเอกหญิง ท่านผู้หญิง',
            ],
            [
            'prefix_code' => '730',
            'prefix_short' => 'พล.ต.ต.ม.ล.',
            'prefix_full' => 'พลตำรวจตรีหม่อมหลวง',
            ],
            [
            'prefix_code' => '731',
            'prefix_short' => 'พล.ต.หญิง คุณหญิง',
            'prefix_full' => 'พลตรีหญิง คุณหญิง',
            ],
            [
            'prefix_code' => '732',
            'prefix_short' => 'ว่าที่ ส.อ.',
            'prefix_full' => 'ว่าที่สิบเอก',
            ],
            [
            'prefix_code' => '733',
            'prefix_short' => 'พล.ต.อ.ดร.',
            'prefix_full' => 'พลตำรวจเอกดอกเตอร์',
            ],
            [
            'prefix_code' => '800',
            'prefix_short' => 'สมเด็จพระสังฆราชเจ้า',
            'prefix_full' => 'สมเด็จพระสังฆราชเจ้า',
            ],
            [
            'prefix_code' => '801',
            'prefix_short' => 'สมเด็จพระสังฆราช',
            'prefix_full' => 'สมเด็จพระสังฆราช',
            ],
            [
            'prefix_code' => '802',
            'prefix_short' => 'สมเด็จพระราชาคณะ',
            'prefix_full' => 'สมเด็จพระราชาคณะ',
            ],
            [
            'prefix_code' => '803',
            'prefix_short' => 'รองสมเด็จพระราชาคณะ',
            'prefix_full' => 'รองสมเด็จพระราชาคณะ',
            ],
            [
            'prefix_code' => '804',
            'prefix_short' => 'พระราชาคณะ',
            'prefix_full' => 'พระราชาคณะ',
            ],
            [
            'prefix_code' => '805',
            'prefix_short' => 'พระเปรียญธรรม',
            'prefix_full' => 'พระเปรียญธรรม',
            ],
            [
            'prefix_code' => '806',
            'prefix_short' => 'พระหิรัญยบัฏ',
            'prefix_full' => 'พระหิรัญยบัฏ',
            ],
            [
            'prefix_code' => '807',
            'prefix_short' => 'พระสัญญาบัตร',
            'prefix_full' => 'พระสัญญาบัตร',
            ],
            [
            'prefix_code' => '808',
            'prefix_short' => 'พระราช',
            'prefix_full' => 'พระราช',
            ],
            [
            'prefix_code' => '809',
            'prefix_short' => 'พระเทพ',
            'prefix_full' => 'พระเทพ',
            ],
            [
            'prefix_code' => '810',
            'prefix_short' => 'พระปลัดขวา',
            'prefix_full' => 'พระปลัดขวา',
            ],
            [
            'prefix_code' => '811',
            'prefix_short' => 'พระปลัดซ้าย',
            'prefix_full' => 'พระปลัดซ้าย',
            ],
            [
            'prefix_code' => '812',
            'prefix_short' => 'พระครูปลัด',
            'prefix_full' => 'พระครูปลัด',
            ],
            [
            'prefix_code' => '813',
            'prefix_short' => 'พระครูปลัดสุวัฒนญาณคุณ',
            'prefix_full' => 'พระครูปลัดสุวัฒนญาณคุณ',
            ],
            [
            'prefix_code' => '814',
            'prefix_short' => 'พระครูปลัดอาจารย์วัฒน์',
            'prefix_full' => 'พระครูปลัดอาจารย์วัฒน์',
            ],
            [
            'prefix_code' => '815',
            'prefix_short' => 'พระครูปลัดวิมลสิริวัฒน์',
            'prefix_full' => 'พระครูวิมลสิริวัฒน์',
            ],
            [
            'prefix_code' => '816',
            'prefix_short' => 'พระสมุห์',
            'prefix_full' => 'พระสมุห์',
            ],
            [
            'prefix_code' => '817',
            'prefix_short' => 'พระครูสมุห์',
            'prefix_full' => 'พระครูสมุห์',
            ],
            [
            'prefix_code' => '818',
            'prefix_short' => 'พระครู',
            'prefix_full' => 'พระครู',
            ],
            [
            'prefix_code' => '819',
            'prefix_short' => 'พระครูใบฎีกา',
            'prefix_full' => 'พระครูใบฎีกา',
            ],
            [
            'prefix_code' => '820',
            'prefix_short' => 'พระครูธรรมธร',
            'prefix_full' => 'พระครูธรรมธร',
            ],
            [
            'prefix_code' => '821',
            'prefix_short' => 'พระครูวิมลภาณ',
            'prefix_full' => 'พระครูวิมลภาณ',
            ],
            [
            'prefix_code' => '822',
            'prefix_short' => 'พระครูศัพทมงคล',
            'prefix_full' => 'พระครูศัพทมงคล',
            ],
            [
            'prefix_code' => '823',
            'prefix_short' => 'พระครูสังฆภารวิชัย',
            'prefix_full' => 'พระครูสังฆภารวิชัย',
            ],
            [
            'prefix_code' => '824',
            'prefix_short' => 'พระครูสังฆรักษ์',
            'prefix_full' => 'พระครูสังฆรักษ์',
            ],
            [
            'prefix_code' => '825',
            'prefix_short' => 'พระครูสังฆวิชัย',
            'prefix_full' => 'พระครูสังฆวิชัย',
            ],
            [
            'prefix_code' => '826',
            'prefix_short' => 'พระครูสังฆวิชิต',
            'prefix_full' => 'พระครูสังฆวิชิต',
            ],
            [
            'prefix_code' => '827',
            'prefix_short' => 'พระปิฎก',
            'prefix_full' => 'พระปิฎก',
            ],
            [
            'prefix_code' => '828',
            'prefix_short' => 'พระปริยัติ',
            'prefix_full' => 'พระปริยัติ',
            ],
            [
            'prefix_code' => '829',
            'prefix_short' => 'เจ้าอธิการ',
            'prefix_full' => 'เจ้าอธิการ',
            ],
            [
            'prefix_code' => '830',
            'prefix_short' => 'พระอธิการ',
            'prefix_full' => 'พระอธิการ',
            ],
            [
            'prefix_code' => '831',
            'prefix_short' => 'พระ',
            'prefix_full' => 'พระ',
            ],
            [
            'prefix_code' => '832',
            'prefix_short' => 'ส.ณ.',
            'prefix_full' => 'สามเณร',
            ],
            [
            'prefix_code' => '833',
            'prefix_short' => 'พระปลัด',
            'prefix_full' => 'พระปลัด',
            ],
            [
            'prefix_code' => '834',
            'prefix_short' => 'สมเด็จพระอริยวงศาคตญาณ',
            'prefix_full' => 'สมเด็จพระอริยวงศาคตญาณ',
            ],
            [
            'prefix_code' => '835',
            'prefix_short' => 'พระคาร์ดินัล',
            'prefix_full' => 'พระคาร์ดินัล',
            ],
            [
            'prefix_code' => '836',
            'prefix_short' => 'พระสังฆราช',
            'prefix_full' => 'พระสังฆราช',
            ],
            [
            'prefix_code' => '837',
            'prefix_short' => 'พระคุณเจ้า',
            'prefix_full' => 'พระคุณเจ้า',
            ],
            [
            'prefix_code' => '838',
            'prefix_short' => 'บาทหลวง',
            'prefix_full' => 'บาทหลวง',
            ],
            [
            'prefix_code' => '839',
            'prefix_short' => 'พระมหา',
            'prefix_full' => 'พระมหา',
            ],
            [
            'prefix_code' => '840',
            'prefix_short' => 'พระราชปัญญา',
            'prefix_full' => 'พระราชปัญญา',
            ],
            [
            'prefix_code' => '841',
            'prefix_short' => 'ภาราดา',
            'prefix_full' => 'ภาราดา',
            ],
            [
            'prefix_code' => '842',
            'prefix_short' => 'พระศรีปริยัติธาดา',
            'prefix_full' => 'พระศรีปริยัติธาดา',
            ],
            [
            'prefix_code' => '843',
            'prefix_short' => 'พระญาณโศภณ',
            'prefix_full' => 'พระญาณโศภณ',
            ],
            [
            'prefix_code' => '844',
            'prefix_short' => 'สมเด็จพระมหาวีรวงศ์',
            'prefix_full' => 'สมเด็จพระมหาวีรวงศ์',
            ],
            [
            'prefix_code' => '845',
            'prefix_short' => 'พระโสภณธรรมาภรณ์',
            'prefix_full' => 'พระโสภณธรรมาภรณ์',
            ],
            [
            'prefix_code' => '846',
            'prefix_short' => 'พระวิริวัฒน์วิสุทธิ์',
            'prefix_full' => 'พระวิริวัฒน์วิสุทธิ์',
            ],
            [
            'prefix_code' => '847',
            'prefix_short' => 'พระญาณ',
            'prefix_full' => 'พระญาณ',
            ],
            [
            'prefix_code' => '848',
            'prefix_short' => 'พระอัครสังฆราช',
            'prefix_full' => 'พระอัครสังฆราช',
            ],
            [
            'prefix_code' => '849',
            'prefix_short' => 'พระธรรม',
            'prefix_full' => 'พระธรรม',
            ],
            [
            'prefix_code' => '850',
            'prefix_short' => 'พระสาสนโสภณ',
            'prefix_full' => 'พระสาสนโสภณ',
            ],
            [
            'prefix_code' => '851',
            'prefix_short' => 'พระธรรมโสภณ',
            'prefix_full' => 'พระธรรมโสภณ',
            ],
            [
            'prefix_code' => '852',
            'prefix_short' => 'พระอุดมสารโสภณ',
            'prefix_full' => 'พระอุดมสารโสภณ',
            ],
            [
            'prefix_code' => '853',
            'prefix_short' => 'พระครูวิมลญาณโสภณ',
            'prefix_full' => 'พระครูวิมลญาณโสภณ',
            ],
            [
            'prefix_code' => '854',
            'prefix_short' => 'พระครูปัญญาภรณโสภณ',
            'prefix_full' => 'พระครูปัญญาภรณโสภณ',
            ],
            [
            'prefix_code' => '855',
            'prefix_short' => 'พระครูโสภณปริยัติคุณ',
            'prefix_full' => 'พระครูโสภณปริยัติคุณ',
            ],
            [
            'prefix_code' => '856',
            'prefix_short' => 'พระอธิธรรม',
            'prefix_full' => 'พระอธิธรรม',
            ],
            [
            'prefix_code' => '857',
            'prefix_short' => 'พระราชญาณ',
            'prefix_full' => 'พระราชญาณ',
            ],
            [
            'prefix_code' => '858',
            'prefix_short' => 'พระสุธีวัชโรดม',
            'prefix_full' => 'พระสุธีวัชโรดม',
            ],
            [
            'prefix_code' => '859',
            'prefix_short' => 'รองเจ้าอธิการ',
            'prefix_full' => 'รองเจ้าอธิการ',
            ],
            [
            'prefix_code' => '860',
            'prefix_short' => 'พระครูวินัยธร',
            'prefix_full' => 'พระครูวินัยธร',
            ],
            [
            'prefix_code' => '861',
            'prefix_short' => 'พระศรีวชิราภรณ์',
            'prefix_full' => 'พระศรีวชิราภรณ์',
            ],
            [
            'prefix_code' => '862',
            'prefix_short' => 'พระราชบัณฑิต',
            'prefix_full' => 'พระราชบัณฑิต',
            ],
            [
            'prefix_code' => '863',
            'prefix_short' => 'แม่ชี',
            'prefix_full' => 'แม่ชี',
            ],
            [
            'prefix_code' => '864',
            'prefix_short' => 'นักบวช',
            'prefix_full' => 'นักบวช',
            ],
            [
            'prefix_code' => '865',
            'prefix_short' => 'พระรัตน',
            'prefix_full' => 'พระรัตน',
            ],
            [
            'prefix_code' => '866',
            'prefix_short' => 'พระโสภณปริยัติธรรม',
            'prefix_full' => 'พระโสภณปริยัติธรรม',
            ],
            [
            'prefix_code' => '867',
            'prefix_short' => 'พระครูวิศาลปัญญาคุณ',
            'prefix_full' => 'พระครูวิศาลปัญญาคุณ',
            ],
            [
            'prefix_code' => '868',
            'prefix_short' => 'พระศรีปริยัติโมลี',
            'prefix_full' => 'พระศรีปริยัติโมลี',
            ],
            [
            'prefix_code' => '869',
            'prefix_short' => 'พระครูวัชรสีลาภรณ์',
            'prefix_full' => 'พระครูวัชรสีลาภรณ์',
            ],
            [
            'prefix_code' => '870',
            'prefix_short' => 'พระครูพิพัฒน์บรรณกิจ',
            'prefix_full' => 'พระครูพิพัฒน์บรรณกิจ',
            ],
            [
            'prefix_code' => '871',
            'prefix_short' => 'พระครูวิบูลธรรมกิจ',
            'prefix_full' => 'พระครูวิบูลธรรมกิจ',
            ],
            [
            'prefix_code' => '872',
            'prefix_short' => 'พระครูพัฒนสารคุณ',
            'prefix_full' => 'พระครูพัฒนสารคุณ',
            ],
            [
            'prefix_code' => '873',
            'prefix_short' => 'พระครูสุวรรณพัฒนคุณ',
            'prefix_full' => 'พระครูสุวรรณพัฒนคุณ',
            ],
            [
            'prefix_code' => '874',
            'prefix_short' => 'พระครูพรหมวีรสุนทร',
            'prefix_full' => 'พระครูพรหมวีรสุนทร',
            ],
            [
            'prefix_code' => '875',
            'prefix_short' => 'พระครูอุปถัมภ์นันทกิจ',
            'prefix_full' => 'พระครูอุปถัมภ์นันทกิจ',
            ],
            [
            'prefix_code' => '876',
            'prefix_short' => 'พระครูวิจารณ์สังฆกิจ',
            'prefix_full' => 'พระครูวิจารณ์สังฆกิจ',
            ],
            [
            'prefix_code' => '877',
            'prefix_short' => 'พระครูวิมลสารวิสุทธิ์',
            'prefix_full' => 'พระครูวิมลสารวิสุทธิ์',
            ],
            [
            'prefix_code' => '878',
            'prefix_short' => 'พระครูไพศาลศุภกิจ',
            'prefix_full' => 'พระครูไพศาลศุภกิจ',
            ],
            [
            'prefix_code' => '879',
            'prefix_short' => 'พระครูโอภาสธรรมพิมล',
            'prefix_full' => 'พระครูโอภาสธรรมพิมล',
            ],
            [
            'prefix_code' => '880',
            'prefix_short' => 'พระครูพิพิธวรคุณ',
            'prefix_full' => 'พระครูพิพิธวรคุณ',
            ],
            [
            'prefix_code' => '881',
            'prefix_short' => 'พระครูสุนทรปภากร',
            'prefix_full' => 'พระครูสุนทรปภากร',
            ],
            [
            'prefix_code' => '882',
            'prefix_short' => 'พระครูสิริชัยสถิต',
            'prefix_full' => 'พระครูสิริชัยสถิต',
            ],
            [
            'prefix_code' => '883',
            'prefix_short' => 'พระครูเกษมธรรมานันท์',
            'prefix_full' => 'พระครูเกษมธรรมานันท์',
            ],
            [
            'prefix_code' => '884',
            'prefix_short' => 'พระครูถาวรสันติคุณ',
            'prefix_full' => 'พระครูถาวรสันติคุณ',
            ],
            [
            'prefix_code' => '885',
            'prefix_short' => 'พระครูวิสุทธาจารวิมล',
            'prefix_full' => 'พระครูวิสุทธาจารวิมล',
            ],
            [
            'prefix_code' => '886',
            'prefix_short' => 'พระครูปภัสสราธิคุณ',
            'prefix_full' => 'พระครูปภัสสราธิคุณ',
            ],
            [
            'prefix_code' => '887',
            'prefix_short' => 'พระครูวรสังฆกิจ',
            'prefix_full' => 'พระครูวรสังฆกิจ',
            ],
            [
            'prefix_code' => '888',
            'prefix_short' => 'พระครูไพบูลชัยสิทธิ์',
            'prefix_full' => 'พระครูไพบูลชัยสิทธิ์',
            ],
            [
            'prefix_code' => '889',
            'prefix_short' => 'พระครูโกวิทธรรมโสภณ',
            'prefix_full' => 'พระครูโกวิทธรรมโสภณ',
            ],
            [
            'prefix_code' => '890',
            'prefix_short' => 'พระครูสุพจน์วราภรณ์',
            'prefix_full' => 'พระครูสุพจน์วราภรณ์',
            ],
            [
            'prefix_code' => '891',
            'prefix_short' => 'พระครูไพโรจน์อริญชัย',
            'prefix_full' => 'พระครูไพโรจน์อริญชัย',
            ],
            [
            'prefix_code' => '892',
            'prefix_short' => 'พระครูสุนทรคณาภิรักษ์',
            'prefix_full' => 'พระครูสุนทรคณาภิรักษ์',
            ],
            [
            'prefix_code' => '893',
            'prefix_short' => 'พระสรภาณโกศล',
            'prefix_full' => 'พระสรภาณโกศล',
            ],
            [
            'prefix_code' => '894',
            'prefix_short' => 'พระครูประโชติธรรมรัตน์',
            'prefix_full' => 'พระครูประโชติธรรมรัตน์',
            ],
            [
            'prefix_code' => '895',
            'prefix_short' => 'พระครูจารุธรรมกิตติ์',
            'prefix_full' => 'พระครูจารุธรรมกิตติ์',
            ],
            [
            'prefix_code' => '896',
            'prefix_short' => 'พระครูพิทักษ์พรหมรังษี',
            'prefix_full' => 'พระครูพิทักษ์พรหมรังษี',
            ],
            [
            'prefix_code' => '897',
            'prefix_short' => 'พระศรีปริยัติบัณฑิต',
            'prefix_full' => 'พระศรีปริยัติบัณฑิต',
            ],
            [
            'prefix_code' => '898',
            'prefix_short' => 'พระครูพุทธิธรรมานุศาสน์',
            'prefix_full' => 'พระครูพุทธิธรรมานุศาสน์',
            ],
            [
            'prefix_code' => '899',
            'prefix_short' => 'พระธรรมเมธาจารย์',
            'prefix_full' => 'พระธรรมเมธาจารย์',
            ],
            [
            'prefix_code' => '900',
            'prefix_short' => 'พระครูกิตติกาญจนวงศ์',
            'prefix_full' => 'พระครูกิตติกาญจนวงศ์',
            ],
            [
            'prefix_code' => '901',
            'prefix_short' => 'พระครูปลัดสัมพิพัฒนวิริยาจารย์',
            'prefix_full' => 'พระครูปลัดสัมพิพัฒนวิริยาจารย์',
            ],
            [
            'prefix_code' => '902',
            'prefix_short' => 'พระครูศีลกันตาภรณ์',
            'prefix_full' => 'พระครูศีลกันตาภรณ์',
            ],
            [
            'prefix_code' => '903',
            'prefix_short' => 'พระครูประกาศพุทธพากย์',
            'prefix_full' => 'พระครูประกาศพุทธพากย์',
            ],
            [
            'prefix_code' => '904',
            'prefix_short' => 'พระครูอมรวิสุทธิคุณ',
            'prefix_full' => 'พระครูอมรวิสุทธิคุณ',
            ],
            [
            'prefix_code' => '905',
            'prefix_short' => 'พระครูสุทัศน์ธรรมาภิรม',
            'prefix_full' => 'พระครูสุทัศน์ธรรมาภิรม',
            ],
            [
            'prefix_code' => '906',
            'prefix_short' => 'พระครูอุปถัมภ์วชิโรภาส',
            'prefix_full' => 'พระครูอุปถัมภ์วชิโรภาส',
            ],
            [
            'prefix_code' => '907',
            'prefix_short' => 'พระครูสุนทรสมณคุณ',
            'prefix_full' => 'พระครูสุนทรสมณคุณ',
            ],
            [
            'prefix_code' => '908',
            'prefix_short' => 'พระพรหมมุนี',
            'prefix_full' => 'พระพรหมมุนี',
            ],
            [
            'prefix_code' => '909',
            'prefix_short' => 'พระครูสิริคุณารักษ์',
            'prefix_full' => 'พระครูสิริคุณารักษ์',
            ],
            [
            'prefix_code' => '910',
            'prefix_short' => 'พระครูวิชิตพัฒนคุณ',
            'prefix_full' => 'พระครูวิชิตพัฒนคุณ',
            ],
            [
            'prefix_code' => '911',
            'prefix_short' => 'พระครูพิบูลโชติธรรม',
            'prefix_full' => 'พระครูพิบูลโชติธรรม',
            ],
            [
            'prefix_code' => '912',
            'prefix_short' => 'พระพิศาลสารคุณ',
            'prefix_full' => 'พระพิศาลสารคุณ',
            ],
            [
            'prefix_code' => '913',
            'prefix_short' => 'พระรัตนมงคลวิสุทธ์',
            'prefix_full' => 'พระรัตนมงคลวิสุทธ์',
            ],
            [
            'prefix_code' => '914',
            'prefix_short' => 'พระครูโสภณคุณานุกูล',
            'prefix_full' => 'พระครูโสภณคุณานุกูล',
            ],
            [
            'prefix_code' => '915',
            'prefix_short' => 'พระครูผาสุกวิหารการ',
            'prefix_full' => 'พระครูผาสุกวิหารการ',
            ],
            [
            'prefix_code' => '916',
            'prefix_short' => 'พระครูวชิรวุฒิกร',
            'prefix_full' => 'พระครูวชิรวุฒิกร',
            ],
            [
            'prefix_code' => '917',
            'prefix_short' => 'พระครูกาญจนยติกิจ',
            'prefix_full' => 'พระครูกาญจนยติกิจ',
            ],
            [
            'prefix_code' => '918',
            'prefix_short' => 'พระครูบวรรัตนวงศ์',
            'prefix_full' => 'พระครูบวรรัตนวงศ์',
            ],
            [
            'prefix_code' => '919',
            'prefix_short' => 'พระราชพัชราภรณ์',
            'prefix_full' => 'พระราชพัชราภรณ์',
            ],
            [
            'prefix_code' => '920',
            'prefix_short' => 'พระครูพิพิธอุดมคุณ',
            'prefix_full' => 'พระครูพิพิธอุดมคุณ',
            ],
            [
            'prefix_code' => '921',
            'prefix_short' => 'องสุตบทบวร',
            'prefix_full' => 'องสุตบทบวร',
            ],
            [
            'prefix_code' => '922',
            'prefix_short' => 'พระครูจันทเขมคุณ',
            'prefix_full' => 'พระครูจันทเขมคุณ',
            ],
            [
            'prefix_code' => '923',
            'prefix_short' => 'พระครูศีลสารวิสุทธิ์',
            'prefix_full' => 'พระครูศีลสารวิสุทธิ์',
            ],
            [
            'prefix_code' => '924',
            'prefix_short' => 'พระครูสุธรรมโสภิต',
            'prefix_full' => 'พระครูสุธรรมโสภิต',
            ],
            [
            'prefix_code' => '925',
            'prefix_short' => 'พระครูอุเทศธรรมนิวิฐ',
            'prefix_full' => 'พระครูอุเทศธรรมนิวิฐ',
            ],
            [
            'prefix_code' => '926',
            'prefix_short' => 'พระครูบรรณวัตร',
            'prefix_full' => 'พระครูบรรณวัตร',
            ],
            [
            'prefix_code' => '927',
            'prefix_short' => 'พระครูวิสุทธาจาร',
            'prefix_full' => 'พระครูวิสุทธาจาร',
            ],
            [
            'prefix_code' => '928',
            'prefix_short' => 'พระครูสุนทรวรวัฒน์',
            'prefix_full' => 'พระครูสุนทรวรวัฒน์',
            ],
            [
            'prefix_code' => '929',
            'prefix_short' => 'พระเทพชลธารมุนี ศรีชลบุราจารย์',
            'prefix_full' => 'พระเทพชลธารมุนี ศรีชลบุราจารย์',
            ],
            [
            'prefix_code' => '930',
            'prefix_short' => 'พระครูโสภณสมุทรคุณ',
            'prefix_full' => 'พระครูโสภณสมุทรคุณ',
            ],
            [
            'prefix_code' => '931',
            'prefix_short' => 'พระราชเมธาภรณ์',
            'prefix_full' => 'พระราชเมธาภรณ์',
            ],
            [
            'prefix_code' => '932',
            'prefix_short' => 'พระครูศรัทธาธรรมโสภณ',
            'prefix_full' => 'พระครูศรัทธาธรรมโสภณ',
            ],
            [
            'prefix_code' => '933',
            'prefix_short' => 'พระครูสังฆบริรักษ์',
            'prefix_full' => 'พระครูสังฆบริรักษ์',
            ],
            [
            'prefix_code' => '934',
            'prefix_short' => 'พระมหานายก',
            'prefix_full' => 'พระมหานายก',
            ],
            [
            'prefix_code' => '935',
            'prefix_short' => 'พระครูโอภาสสมาจาร',
            'prefix_full' => 'พระครูโอภาสสมาจาร',
            ],
            [
            'prefix_code' => '936',
            'prefix_short' => 'พระครูศรีธวัชคุณาภรณ์',
            'prefix_full' => 'พระครูศรีธวัชคุณาภรณ์',
            ],
            [
            'prefix_code' => '937',
            'prefix_short' => 'พระครูโสภิตวัชรกิจ',
            'prefix_full' => 'พระครูโสภิตวัชรกิจ',
            ],
            [
            'prefix_code' => '938',
            'prefix_short' => 'พระราชวชิราภรณ์',
            'prefix_full' => 'พระราชวชิราภรณ์',
            ],
            [
            'prefix_code' => '939',
            'prefix_short' => 'พระครูสุนทรวรธัช',
            'prefix_full' => 'พระครูสุนทรวรธัช',
            ],
            [
            'prefix_code' => '940',
            'prefix_short' => 'พระครูอาทรโพธิกิจ',
            'prefix_full' => 'พระครูอาทรโพธิกิจ',
            ],
            [
            'prefix_code' => '941',
            'prefix_short' => 'พระครูวิบูลกาญจนกิจ',
            'prefix_full' => 'พระครูวิบูลกาญจนกิจ',
            ],
            [
            'prefix_code' => '942',
            'prefix_short' => 'พระพรหมวชิรญาณ',
            'prefix_full' => 'พระพรหมวชิรญาณ',
            ],
            [
            'prefix_code' => '943',
            'prefix_short' => 'พระครูสุพจน์วรคุณ',
            'prefix_full' => 'พระครูสุพจน์วรคุณ',
            ],
            [
            'prefix_code' => '944',
            'prefix_short' => 'พระราชวิมลโมลี',
            'prefix_full' => 'พระราชาวิมลโมลี',
            ],
            [
            'prefix_code' => '945',
            'prefix_short' => 'พระครูอมรธรรมนายก',
            'prefix_full' => 'พระครูอมรธรรมนายก',
            ],
            [
            'prefix_code' => '946',
            'prefix_short' => 'พระครูพิศิษฎ์ศาสนการ',
            'prefix_full' => 'พระครูพิศิษฎ์ศาสนการ',
            ],
            [
            'prefix_code' => '947',
            'prefix_short' => 'พระครูเมธีธรรมานุยุต',
            'prefix_full' => 'พระครูเมธีธรรมานุยุต',
            ],
            [
            'prefix_code' => '948',
            'prefix_short' => 'พระครูปิยสีลสาร',
            'prefix_full' => 'พระครูปิยสีลสาร',
            ],
            [
            'prefix_code' => '949',
            'prefix_short' => 'พระครูสถิตบุญวัฒน์',
            'prefix_full' => 'พระครูสถิตบุญวัฒน์',
            ],
            [
            'prefix_code' => '950',
            'prefix_short' => 'พระครูนิเทศปิยธรรม',
            'prefix_full' => 'พระครูนิเทศปิยธรรม',
            ],
            [
            'prefix_code' => '951',
            'prefix_short' => 'พระครูวิสุทธิ์กิจจานุกูล',
            'prefix_full' => 'พระครูวิสุทธิ์กิจจานุกูล',
            ],
            [
            'prefix_code' => '952',
            'prefix_short' => 'พระครูสถิตย์บุญวัฒน์',
            'prefix_full' => 'พระครูสถิตย์บุญวัฒน์',
            ],
            [
            'prefix_code' => '953',
            'prefix_short' => 'พระครูประโชติธรรมานุกูล',
            'prefix_full' => 'พระครูประโชติธรรมานุกูล',
            ],
            [
            'prefix_code' => '954',
            'prefix_short' => 'พระเทพญาณกวี',
            'prefix_full' => 'พระเทพญาณกวี',
            ],
            [
            'prefix_code' => '955',
            'prefix_short' => 'พระครูพิพัฒน์ชินวงศ์',
            'prefix_full' => 'พระครูพิพัฒน์ชินวงศ์',
            ],
            [
            'prefix_code' => '956',
            'prefix_short' => 'พระครูสมุทรขันตยาภรณ์',
            'prefix_full' => 'พระครูสมุทรขันตยาภรณ์',
            ],
            [
            'prefix_code' => '957',
            'prefix_short' => 'พระครูภาวนาวรกิจ',
            'prefix_full' => 'พระครูภาวนาวรกิจ',
            ],
            [
            'prefix_code' => '958',
            'prefix_short' => 'พระครูศรีศาสนคุณ',
            'prefix_full' => 'พระครูศรีศาสนคุณ',
            ],
            [
            'prefix_code' => '959',
            'prefix_short' => 'พระครูวิบูลย์ธรรมศาสก์',
            'prefix_full' => 'พระครูวิบูลย์ธรรมศาสก์',
            ]    
        ]);
    }
}
