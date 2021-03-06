<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OccupationsTableSeeder extends Seeder
{
 
    public function run()
    {
        DB::table('occupations')->insert([
            [
               'name' =>'สถาปนิก'
            ],
            [
               'name' =>'วิศวกร'
            ],
            [
               'name' =>'นักสำรวจ'
            ],
            [
               'name' =>'ช่างเทคนิควิศวกรรม'
            ],
            [
               'name' =>'นักวิทยาศาสตร์'
            ],
            [
               'name' =>'แพทย์'
            ],
            [
               'name' =>'ศัลยแพทย์'
            ],
            [
               'name' =>'ทันตแพทย์'
            ],
            [
               'name' =>'สัตวแพทย์'
            ],
            [
               'name' =>'อาจารย์มหาวิทยาลัย'
            ],
            [
               'name' =>'อาจารย์โรงเรียน'
            ],
            [
               'name' =>'พยาบาล'
            ],
            [
               'name' =>'เภสัชกร'
            ],
            [
               'name' =>'ผู้ปฏิบัติงานทางเทคนิคการแพทย์'
            ],
            [
               'name' =>'พนักงานที่ทำงานช่วยเหลือด้านการแพทย์'
            ],
            [
               'name' =>'ผู้พิพากษา'
            ],
            [
               'name' =>'อัยการ'
            ],
            [
               'name' =>'ประติมากร'
            ],
            [
               'name' =>'จิตรกร'
            ],
            [
               'name' =>'ช่างศิลป์'
            ],
            [
               'name' =>'ช่างภาพ'
            ],
            [
               'name' =>'นักประพันธ์'
            ],
            [
               'name' =>'นักข่าว'
            ],
            [
               'name' =>'นักหนังสือพิมพ์'
            ],
            [
               'name' =>'นักแสดง'
            ],
            [
               'name' =>'นางแบบ'
            ],
            [
               'name' =>'นักร้อง'
            ],
            [
               'name' =>'นักดนตรี'
            ],
            [
               'name' =>'นักสังคมสงเคราะห์'
            ],
            [
               'name' =>'นักสังคมวิทยา'
            ],
            [
               'name' =>'นักสถิติ'
            ],
            [
               'name' =>'นักเศรษฐศาสตร์'
            ],
            [
               'name' =>'ผู้สอนศาสนา'
            ],
            [
               'name' =>'อนุศาสนาจารย์'
            ],
            [
               'name' =>'นักบัญชี'
            ],
            [
               'name' =>'ผู้ปฏิบัติงานที่ใช้วิชาการอื่น ๆ'
            ],
            [
               'name' =>'ทนายความ'
            ],
            [
               'name' =>'หมอดู'
            ],
            [
               'name' =>'รับราชการ (ข้าราชการพลเรือน)'
            ],
            [
               'name' =>'ทหารบก'
            ],
            [
               'name' =>'ทหารเรือ'
            ],
            [
               'name' =>'ทหารอากาศ'
            ],
            [
               'name' =>'ตำรวจ'
            ],
            [
               'name' =>'ข้าราชการการเมือง'
            ],
            [
               'name' =>'ผู้ปฏิบัติงานหน่วยงานของรัฐอื่น ๆ'
            ],
            [
               'name' =>'ข้าราชการบำนาญ'
            ],
            [
               'name' =>'ลูกจ้างชั่วคราว'
            ],
            [
               'name' =>'ลูกจ้างประจำ'
            ],
            [
               'name' =>'กำนัน'
            ],
            [
               'name' =>'สารวัตรกำนัน'
            ],
            [
               'name' =>'ผู้ใหญ่บ้าน'
            ],
            [
               'name' =>'ผู้ช่วยผู้ใหญ่บ้าน'
            ],
            [
               'name' =>'แพทย์ประจำตำบล'
            ],
            [
               'name' =>'นักการ-ภารโรง'
            ],
            [
               'name' =>'ผู้บริหารรัฐวิสาหกิจ'
            ],
            [
               'name' =>'พนักงานรัฐวิสาหกิจ'
            ],
            [
               'name' =>'ผู้ปฏิบัติงานหน่วยงานรัฐวิสาหกิจอื่น ๆ'
            ],
            [
               'name' =>'เจ้าของกิจการ'
            ],
            [
               'name' =>'พนักงานหน่วยงานเอกชน'
            ],
            [
               'name' =>'รับจ้าง'
            ],
            [
               'name' =>'กรรมกร'
            ],
            [
               'name' =>'ผู้ปฏิบัติงานหน่วยงานเอกชนอื่น ๆ'
            ],
            [
               'name' =>'เสมียน'
            ],
            [
               'name' =>'กสิกรรม'
            ],
            [
               'name' =>'เกษตรกรรม'
            ],
            [
               'name' =>'ทำนา'
            ],
            [
               'name' =>'ทำสวน'
            ],
            [
               'name' =>'ทำไร่'
            ],
            [
               'name' =>'ทำฟาร์ม'
            ],
            [
               'name' =>'ประมง'
            ],
            [
               'name' =>'ล่าสัตว์'
            ],
            [
               'name' =>'ผู้ปฏิบัติงานด้านกสิกรรม เลี้ยงสัตว์อื่น ๆ'
            ],
            [
               'name' =>'ค้าส่ง'
            ],
            [
               'name' =>'ค้าปลีก'
            ],
            [
               'name' =>'หาบเร่'
            ],
            [
               'name' =>'ตัวแทนจำหน่าย'
            ],
            [
               'name' =>'ผู้ปฏิบัติงานเกี่ยวกับการค้าอื่น ๆ'
            ],
            [
               'name' =>'ค้าขาย'
            ],
            [
               'name' =>'นายหน้า'
            ],
            [
               'name' =>'พนักงานขาย'
            ],
            [
               'name' =>'พนักงานโฆษณา'
            ],
            [
               'name' =>'พนักงานประชาสัมพันธ์'
            ],
            [
               'name' =>'พนักงานเสริฟ'
            ],
            [
               'name' =>'พนักงานโรงแรม'
            ],
            [
               'name' =>'พนักงานประจำสถานบริการ'
            ],
            [
               'name' =>'พนักงานขับรถเมล์'
            ],
            [
               'name' =>'คนขับรถรับจ้าง'
            ],
            [
               'name' =>'คนขับรถที่ใช้สัตว์ลากเทียม'
            ],
            [
               'name' =>'คนขับเรือ'
            ],
            [
               'name' =>'คนปรุงอาหาร'
            ],
            [
               'name' =>'คนเลี้ยงเด็ก'
            ],
            [
               'name' =>'คนรับใช้'
            ],
            [
               'name' =>'คนทำความสะอาด'
            ],
            [
               'name' =>'คนซักรีด'
            ],
            [
               'name' =>'ช่างตัดผม'
            ],
            [
               'name' =>'ช่างเสริมสวย'
            ],
            [
               'name' =>'ผู้ปฏิบัติงานด้านบริการอื่น ๆ'
            ],
            [
               'name' =>'ผู้รักษาความปลอดภัย'
            ],
            [
               'name' =>'ช่างตัดเย็บเสื้อผ้า'
            ],
            [
               'name' =>'ช่างเย็บหนัง'
            ],
            [
               'name' =>'ช่างซ่อมเครื่องไฟฟ้า'
            ],
            [
               'name' =>'ช่างซ่อมวิทยุโทรทัศน์'
            ],
            [
               'name' =>'ช่างซ่อมเครื่องยนต์'
            ],
            [
               'name' =>'ช่างอีเลคโทรนิคส์'
            ],
            [
               'name' =>'ช่างเคาะพ่นสีรถยนต์'
            ],
            [
               'name' =>'ช่างซ่อมนาฬิกา'
            ],
            [
               'name' =>'ช่างทอง'
            ],
            [
               'name' =>'ช่างเพชรพบอย'
            ],
            [
               'name' =>'ช่างเหล็ก'
            ],
            [
               'name' =>'ช่างโลหะ'
            ],
            [
               'name' =>'ช่างเชื่อมโลหะ'
            ],
            [
               'name' =>'ช่างหลอมโลหะ'
            ],
            [
               'name' =>'ช่างชุบโลหะ'
            ],
            [
               'name' =>'ช่างไม้'
            ],
            [
               'name' =>'ช่างเฟอร์นิเจอร์'
            ],
            [
               'name' =>'ช่างปูน'
            ],
            [
               'name' =>'ช่างทาสี'
            ],
            [
               'name' =>'ช่างพิมพ์'
            ],
            [
               'name' =>'ช่างทอ ปั่น จักสาน'
            ],
            [
               'name' =>'ช่างถ่ายรูป'
            ],
            [
               'name' =>'ช่างล้างอัดรูป'
            ],
            [
               'name' =>'ผู้ปฏิบัติงานด้านช่างอื่น ๆ'
            ],
            [
               'name' =>'นักเรียน นักศึกษา แม่บ้าน (ไม่ได้ทำงาน)'
            ],
            [
               'name' =>'นักบวช'
            ],
            [
               'name' =>'ในความปกครอง'
            ]
        ]);
    }
}
