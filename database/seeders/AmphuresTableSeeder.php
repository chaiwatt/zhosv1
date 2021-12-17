<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Resource\Amphure;

class AmphuresTableSeeder extends Seeder
{
    private $amphureData = array();
    
    public function run()
    {
        $amphureData =[
            [
                'code' =>'1001',
                'province_id' => '1',
                'name_th' => 'เขตพระนคร',
                'name_en' => 'Khet Phra Nakhon'
              ],
              [
                'code' =>'1002',
                'province_id' => '1',
                'name_th' => 'เขตดุสิต',
                'name_en' => 'Khet Dusit'
              ],
              [
                'code' =>'1003',
                'province_id' => '1',
                'name_th' => 'เขตหนองจอก',
                'name_en' => 'Khet Nong Chok'
              ],
              [
                'code' =>'1004',
                'province_id' => '1',
                'name_th' => 'เขตบางรัก',
                'name_en' => 'Khet Bang Rak'
              ],
              [
                'code' =>'1005',
                'province_id' => '1',
                'name_th' => 'เขตบางเขน',
                'name_en' => 'Khet Bang Khen'
              ],
              [
                'code' =>'1006',
                'province_id' => '1',
                'name_th' => 'เขตบางกะปิ',
                'name_en' => 'Khet Bang Kapi'
              ],
              [
                'code' =>'1007',
                'province_id' => '1',
                'name_th' => 'เขตปทุมวัน',
                'name_en' => 'Khet Pathum Wan'
              ],
              [
                'code' =>'1008',
                'province_id' => '1',
                'name_th' => 'เขตป้อมปราบศัตรูพ่าย',
                'name_en' => 'Khet Pom Prap Sattru Phai'
              ],
              [
                'code' =>'1009',
                'province_id' => '1',
                'name_th' => 'เขตพระโขนง',
                'name_en' => 'Khet Phra Khanong'
              ],
              [
                'code' =>'1010',
                'province_id' => '1',
                'name_th' => 'เขตมีนบุรี',
                'name_en' => 'Khet Min Buri'
              ],
              [
                'code' =>'1011',
                'province_id' => '1',
                'name_th' => 'เขตลาดกระบัง',
                'name_en' => 'Khet Lat Krabang'
              ],
              [
                'code' =>'1012',
                'province_id' => '1',
                'name_th' => 'เขตยานนาวา',
                'name_en' => 'Khet Yan Nawa'
              ],
              [
                'code' =>'1013',
                'province_id' => '1',
                'name_th' => 'เขตสัมพันธวงศ์',
                'name_en' => 'Khet Samphanthawong'
              ],
              [
                'code' =>'1014',
                'province_id' => '1',
                'name_th' => 'เขตพญาไท',
                'name_en' => 'Khet Phaya Thai'
              ],
              [
                'code' =>'1015',
                'province_id' => '1',
                'name_th' => 'เขตธนบุรี',
                'name_en' => 'Khet Thon Buri'
              ],
              [
                'code' =>'1016',
                'province_id' => '1',
                'name_th' => 'เขตบางกอกใหญ่',
                'name_en' => 'Khet Bangkok Yai'
              ],
              [
                'code' =>'1017',
                'province_id' => '1',
                'name_th' => 'เขตห้วยขวาง',
                'name_en' => 'Khet Huai Khwang'
              ],
              [
                'code' =>'1018',
                'province_id' => '1',
                'name_th' => 'เขตคลองสาน',
                'name_en' => 'Khet Khlong San'
              ],
              [
                'code' =>'1019',
                'province_id' => '1',
                'name_th' => 'เขตตลิ่งชัน',
                'name_en' => 'Khet Taling Chan'
              ],
              [
                'code' =>'1020',
                'province_id' => '1',
                'name_th' => 'เขตบางกอกน้อย',
                'name_en' => 'Khet Bangkok Noi'
              ],
              [
                'code' =>'1021',
                'province_id' => '1',
                'name_th' => 'เขตบางขุนเทียน',
                'name_en' => 'Khet Bang Khun Thian'
              ],
              [
                'code' =>'1022',
                'province_id' => '1',
                'name_th' => 'เขตภาษีเจริญ',
                'name_en' => 'Khet Phasi Charoen'
              ],
              [
                'code' =>'1023',
                'province_id' => '1',
                'name_th' => 'เขตหนองแขม',
                'name_en' => 'Khet Nong Khaem'
              ],
              [
                'code' =>'1024',
                'province_id' => '1',
                'name_th' => 'เขตราษฎร์บูรณะ',
                'name_en' => 'Khet Rat Burana'
              ],
              [
                'code' =>'1025',
                'province_id' => '1',
                'name_th' => 'เขตบางพลัด',
                'name_en' => 'Khet Bang Phlat'
              ],
              [
                'code' =>'1026',
                'province_id' => '1',
                'name_th' => 'เขตดินแดง',
                'name_en' => 'Khet Din Daeng'
              ],
              [
                'code' =>'1027',
                'province_id' => '1',
                'name_th' => 'เขตบึงกุ่ม',
                'name_en' => 'Khet Bueng Kum'
              ],
              [
                'code' =>'1028',
                'province_id' => '1',
                'name_th' => 'เขตสาทร',
                'name_en' => 'Khet Sathon'
              ],
              [
                'code' =>'1029',
                'province_id' => '1',
                'name_th' => 'เขตบางซื่อ',
                'name_en' => 'Khet Bang Sue'
              ],
              [
                'code' =>'1030',
                'province_id' => '1',
                'name_th' => 'เขตจตุจักร',
                'name_en' => 'Khet Chatuchak'
              ],
              [
                'code' =>'1031',
                'province_id' => '1',
                'name_th' => 'เขตบางคอแหลม',
                'name_en' => 'Khet Bang Kho Laem'
              ],
              [
                'code' =>'1032',
                'province_id' => '1',
                'name_th' => 'เขตประเวศ',
                'name_en' => 'Khet Prawet'
              ],
              [
                'code' =>'1033',
                'province_id' => '1',
                'name_th' => 'เขตคลองเตย',
                'name_en' => 'Khet Khlong Toei'
              ],
              [
                'code' =>'1034',
                'province_id' => '1',
                'name_th' => 'เขตสวนหลวง',
                'name_en' => 'Khet Suan Luang'
              ],
              [
                'code' =>'1035',
                'province_id' => '1',
                'name_th' => 'เขตจอมทอง',
                'name_en' => 'Khet Chom Thong'
              ],
              [
                'code' =>'1036',
                'province_id' => '1',
                'name_th' => 'เขตดอนเมือง',
                'name_en' => 'Khet Don Mueang'
              ],
              [
                'code' =>'1037',
                'province_id' => '1',
                'name_th' => 'เขตราชเทวี',
                'name_en' => 'Khet Ratchathewi'
              ],
              [
                'code' =>'1038',
                'province_id' => '1',
                'name_th' => 'เขตลาดพร้าว',
                'name_en' => 'Khet Lat Phrao'
              ],
              [
                'code' =>'1039',
                'province_id' => '1',
                'name_th' => 'เขตวัฒนา',
                'name_en' => 'Khet Watthana'
              ],
              [
                'code' =>'1040',
                'province_id' => '1',
                'name_th' => 'เขตบางแค',
                'name_en' => 'Khet Bang Khae'
              ],
              [
                'code' =>'1041',
                'province_id' => '1',
                'name_th' => 'เขตหลักสี่',
                'name_en' => 'Khet Lak Si'
              ],
              [
                'code' =>'1042',
                'province_id' => '1',
                'name_th' => 'เขตสายไหม',
                'name_en' => 'Khet Sai Mai'
              ],
              [
                'code' =>'1043',
                'province_id' => '1',
                'name_th' => 'เขตคันนายาว',
                'name_en' => 'Khet Khan Na Yao'
              ],
              [
                'code' =>'1044',
                'province_id' => '1',
                'name_th' => 'เขตสะพานสูง',
                'name_en' => 'Khet Saphan Sung'
              ],
              [
                'code' =>'1045',
                'province_id' => '1',
                'name_th' => 'เขตวังทองหลาง',
                'name_en' => 'Khet Wang Thonglang'
              ],
              [
                'code' =>'1046',
                'province_id' => '1',
                'name_th' => 'เขตคลองสามวา',
                'name_en' => 'Khet Khlong Sam Wa'
              ],
              [
                'code' =>'1047',
                'province_id' => '1',
                'name_th' => 'เขตบางนา',
                'name_en' => 'Khet Bang Na'
              ],
              [
                'code' =>'1048',
                'province_id' => '1',
                'name_th' => 'เขตทวีวัฒนา',
                'name_en' => 'Khet Thawi Watthana'
              ],
              [
                'code' =>'1049',
                'province_id' => '1',
                'name_th' => 'เขตทุ่งครุ',
                'name_en' => 'Khet Thung Khru'
              ],
              [
                'code' =>'1050',
                'province_id' => '1',
                'name_th' => 'เขตบางบอน',
                'name_en' => 'Khet Bang Bon'
              ],
              [
                'code' =>'1081',
                'province_id' => '1',
                'name_th' => '*บ้านทะวาย',
                'name_en' => '*Bantawai'
              ],
              [
                'code' =>'1101',
                'province_id' => '2',
                'name_th' => 'เมืองสมุทรปราการ',
                'name_en' => 'Mueang Samut Prakan'
              ],
              [
                'code' =>'1102',
                'province_id' => '2',
                'name_th' => 'บางบ่อ',
                'name_en' => 'Bang Bo'
              ],
              [
                'code' =>'1103',
                'province_id' => '2',
                'name_th' => 'บางพลี',
                'name_en' => 'Bang Phli'
              ],
              [
                'code' =>'1104',
                'province_id' => '2',
                'name_th' => 'พระประแดง',
                'name_en' => 'Phra Pradaeng'
              ],
              [
                'code' =>'1105',
                'province_id' => '2',
                'name_th' => 'พระสมุทรเจดีย์',
                'name_en' => 'Phra Samut Chedi'
              ],
              [
                'code' =>'1106',
                'province_id' => '2',
                'name_th' => 'บางเสาธง',
                'name_en' => 'Bang Sao Thong'
              ],
              [
                'code' =>'1201',
                'province_id' => '3',
                'name_th' => 'เมืองนนทบุรี',
                'name_en' => 'Mueang Nonthaburi'
              ],
              [
                'code' =>'1202',
                'province_id' => '3',
                'name_th' => 'บางกรวย',
                'name_en' => 'Bang Kruai'
              ],
              [
                'code' =>'1203',
                'province_id' => '3',
                'name_th' => 'บางใหญ่',
                'name_en' => 'Bang Yai'
              ],
              [
                'code' =>'1204',
                'province_id' => '3',
                'name_th' => 'บางบัวทอง',
                'name_en' => 'Bang Bua Thong'
              ],
              [
                'code' =>'1205',
                'province_id' => '3',
                'name_th' => 'ไทรน้อย',
                'name_en' => 'Sai Noi'
              ],
              [
                'code' =>'1206',
                'province_id' => '3',
                'name_th' => 'ปากเกร็ด',
                'name_en' => 'Pak Kret'
              ],
              [
                'code' =>'1251',
                'province_id' => '3',
                'name_th' => 'เทศบาลนครนนทบุรี (สาขาแขวงท่าทราย)*',
                'name_en' => 'Tetsaban Nonthaburi'
              ],
              [
                'code' =>'1297',
                'province_id' => '3',
                'name_th' => 'เทศบาลเมืองปากเกร็ด*',
                'name_en' => 'Tetsaban Pak Kret'
              ],
              [
                'code' =>'1301',
                'province_id' => '4',
                'name_th' => 'เมืองปทุมธานี',
                'name_en' => 'Mueang Pathum Thani'
              ],
              [
                'code' =>'1302',
                'province_id' => '4',
                'name_th' => 'คลองหลวง',
                'name_en' => 'Khlong Luang'
              ],
              [
                'code' =>'1303',
                'province_id' => '4',
                'name_th' => 'ธัญบุรี',
                'name_en' => 'Thanyaburi'
              ],
              [
                'code' =>'1304',
                'province_id' => '4',
                'name_th' => 'หนองเสือ',
                'name_en' => 'Nong Suea'
              ],
              [
                'code' =>'1305',
                'province_id' => '4',
                'name_th' => 'ลาดหลุมแก้ว',
                'name_en' => 'Lat Lum Kaeo'
              ],
              [
                'code' =>'1306',
                'province_id' => '4',
                'name_th' => 'ลำลูกกา',
                'name_en' => 'Lam Luk Ka'
              ],
              [
                'code' =>'1307',
                'province_id' => '4',
                'name_th' => 'สามโคก',
                'name_en' => 'Sam Khok'
              ],
              [
                'code' =>'1351',
                'province_id' => '4',
                'name_th' => 'ลำลูกกา (สาขาตำบลคูคต)*',
                'name_en' => 'Khlong Luang(Kukod)'
              ],
              [
                'code' =>'1401',
                'province_id' => '5',
                'name_th' => 'พระนครศรีอยุธยา',
                'name_en' => 'Phra Nakhon Si Ayutthaya'
              ],
              [
                'code' =>'1402',
                'province_id' => '5',
                'name_th' => 'ท่าเรือ',
                'name_en' => 'Tha Ruea'
              ],
              [
                'code' =>'1403',
                'province_id' => '5',
                'name_th' => 'นครหลวง',
                'name_en' => 'Nakhon Luang'
              ],
              [
                'code' =>'1404',
                'province_id' => '5',
                'name_th' => 'บางไทร',
                'name_en' => 'Bang Sai'
              ],
              [
                'code' =>'1405',
                'province_id' => '5',
                'name_th' => 'บางบาล',
                'name_en' => 'Bang Ban'
              ],
              [
                'code' =>'1406',
                'province_id' => '5',
                'name_th' => 'บางปะอิน',
                'name_en' => 'Bang Pa-in'
              ],
              [
                'code' =>'1407',
                'province_id' => '5',
                'name_th' => 'บางปะหัน',
                'name_en' => 'Bang Pahan'
              ],
              [
                'code' =>'1408',
                'province_id' => '5',
                'name_th' => 'ผักไห่',
                'name_en' => 'Phak Hai'
              ],
              [
                'code' =>'1409',
                'province_id' => '5',
                'name_th' => 'ภาชี',
                'name_en' => 'Phachi'
              ],
              [
                'code' =>'1410',
                'province_id' => '5',
                'name_th' => 'ลาดบัวหลวง',
                'name_en' => 'Lat Bua Luang'
              ],
              [
                'code' =>'1411',
                'province_id' => '5',
                'name_th' => 'วังน้อย',
                'name_en' => 'Wang Noi'
              ],
              [
                'code' =>'1412',
                'province_id' => '5',
                'name_th' => 'เสนา',
                'name_en' => 'Sena'
              ],
              [
                'code' =>'1413',
                'province_id' => '5',
                'name_th' => 'บางซ้าย',
                'name_en' => 'Bang Sai'
              ],
              [
                'code' =>'1414',
                'province_id' => '5',
                'name_th' => 'อุทัย',
                'name_en' => 'Uthai'
              ],
              [
                'code' =>'1415',
                'province_id' => '5',
                'name_th' => 'มหาราช',
                'name_en' => 'Maha Rat'
              ],
              [
                'code' =>'1416',
                'province_id' => '5',
                'name_th' => 'บ้านแพรก',
                'name_en' => 'Ban Phraek'
              ],
              [
                'code' =>'1501',
                'province_id' => '6',
                'name_th' => 'เมืองอ่างทอง',
                'name_en' => 'Mueang Ang Thong'
              ],
              [
                'code' =>'1502',
                'province_id' => '6',
                'name_th' => 'ไชโย',
                'name_en' => 'Chaiyo'
              ],
              [
                'code' =>'1503',
                'province_id' => '6',
                'name_th' => 'ป่าโมก',
                'name_en' => 'Pa Mok'
              ],
              [
                'code' =>'1504',
                'province_id' => '6',
                'name_th' => 'โพธิ์ทอง',
                'name_en' => 'Pho Thong'
              ],
              [
                'code' =>'1505',
                'province_id' => '6',
                'name_th' => 'แสวงหา',
                'name_en' => 'Sawaeng Ha'
              ],
              [
                'code' =>'1506',
                'province_id' => '6',
                'name_th' => 'วิเศษชัยชาญ',
                'name_en' => 'Wiset Chai Chan'
              ],
              [
                'code' =>'1507',
                'province_id' => '6',
                'name_th' => 'สามโก้',
                'name_en' => 'Samko'
              ],
              [
                'code' =>'1601',
                'province_id' => '7',
                'name_th' => 'เมืองลพบุรี',
                'name_en' => 'Mueang Lop Buri'
              ],
              [
                'code' =>'1602',
                'province_id' => '7',
                'name_th' => 'พัฒนานิคม',
                'name_en' => 'Phatthana Nikhom'
              ],
              [
                'code' =>'1603',
                'province_id' => '7',
                'name_th' => 'โคกสำโรง',
                'name_en' => 'Khok Samrong'
              ],
              [
                'code' =>'1604',
                'province_id' => '7',
                'name_th' => 'ชัยบาดาล',
                'name_en' => 'Chai Badan'
              ],
              [
                'code' =>'1605',
                'province_id' => '7',
                'name_th' => 'ท่าวุ้ง',
                'name_en' => 'Tha Wung'
              ],
              [
                'code' =>'1606',
                'province_id' => '7',
                'name_th' => 'บ้านหมี่',
                'name_en' => 'Ban Mi'
              ],
              [
                'code' =>'1607',
                'province_id' => '7',
                'name_th' => 'ท่าหลวง',
                'name_en' => 'Tha Luang'
              ],
              [
                'code' =>'1608',
                'province_id' => '7',
                'name_th' => 'สระโบสถ์',
                'name_en' => 'Sa Bot'
              ],
              [
                'code' =>'1609',
                'province_id' => '7',
                'name_th' => 'โคกเจริญ',
                'name_en' => 'Khok Charoen'
              ],
              [
                'code' =>'1610',
                'province_id' => '7',
                'name_th' => 'ลำสนธิ',
                'name_en' => 'Lam Sonthi'
              ],
              [
                'code' =>'1611',
                'province_id' => '7',
                'name_th' => 'หนองม่วง',
                'name_en' => 'Nong Muang'
              ],
              [
                'code' =>'1681',
                'province_id' => '7',
                'name_th' => '*อ.บ้านเช่า จ.ลพบุรี',
                'name_en' => '*Amphoe Ban Chao'
              ],
              [
                'code' =>'1701',
                'province_id' => '8',
                'name_th' => 'เมืองสิงห์บุรี',
                'name_en' => 'Mueang Sing Buri'
              ],
              [
                'code' =>'1702',
                'province_id' => '8',
                'name_th' => 'บางระจัน',
                'name_en' => 'Bang Rachan'
              ],
              [
                'code' =>'1703',
                'province_id' => '8',
                'name_th' => 'ค่ายบางระจัน',
                'name_en' => 'Khai Bang Rachan'
              ],
              [
                'code' =>'1704',
                'province_id' => '8',
                'name_th' => 'พรหมบุรี',
                'name_en' => 'Phrom Buri'
              ],
              [
                'code' =>'1705',
                'province_id' => '8',
                'name_th' => 'ท่าช้าง',
                'name_en' => 'Tha Chang'
              ],
              [
                'code' =>'1706',
                'province_id' => '8',
                'name_th' => 'อินทร์บุรี',
                'name_en' => 'In Buri'
              ],
              [
                'code' =>'1801',
                'province_id' => '9',
                'name_th' => 'เมืองชัยนาท',
                'name_en' => 'Mueang Chai Nat'
              ],
              [
                'code' =>'1802',
                'province_id' => '9',
                'name_th' => 'มโนรมย์',
                'name_en' => 'Manorom'
              ],
              [
                'code' =>'1803',
                'province_id' => '9',
                'name_th' => 'วัดสิงห์',
                'name_en' => 'Wat Sing'
              ],
              [
                'code' =>'1804',
                'province_id' => '9',
                'name_th' => 'สรรพยา',
                'name_en' => 'Sapphaya'
              ],
              [
                'code' =>'1805',
                'province_id' => '9',
                'name_th' => 'สรรคบุรี',
                'name_en' => 'Sankhaburi'
              ],
              [
                'code' =>'1806',
                'province_id' => '9',
                'name_th' => 'หันคา',
                'name_en' => 'Hankha'
              ],
              [
                'code' =>'1807',
                'province_id' => '9',
                'name_th' => 'หนองมะโมง',
                'name_en' => 'Nong Mamong'
              ],
              [
                'code' =>'1808',
                'province_id' => '9',
                'name_th' => 'เนินขาม',
                'name_en' => 'Noen Kham'
              ],
              [
                'code' =>'1901',
                'province_id' => '10',
                'name_th' => 'เมืองสระบุรี',
                'name_en' => 'Mueang Saraburi'
              ],
              [
                'code' =>'1902',
                'province_id' => '10',
                'name_th' => 'แก่งคอย',
                'name_en' => 'Kaeng Khoi'
              ],
              [
                'code' =>'1903',
                'province_id' => '10',
                'name_th' => 'หนองแค',
                'name_en' => 'Nong Khae'
              ],
              [
                'code' =>'1904',
                'province_id' => '10',
                'name_th' => 'วิหารแดง',
                'name_en' => 'Wihan Daeng'
              ],
              [
                'code' =>'1905',
                'province_id' => '10',
                'name_th' => 'หนองแซง',
                'name_en' => 'Nong Saeng'
              ],
              [
                'code' =>'1906',
                'province_id' => '10',
                'name_th' => 'บ้านหมอ',
                'name_en' => 'Ban Mo'
              ],
              [
                'code' =>'1907',
                'province_id' => '10',
                'name_th' => 'ดอนพุด',
                'name_en' => 'Don Phut'
              ],
              [
                'code' =>'1908',
                'province_id' => '10',
                'name_th' => 'หนองโดน',
                'name_en' => 'Nong Don'
              ],
              [
                'code' =>'1909',
                'province_id' => '10',
                'name_th' => 'พระพุทธบาท',
                'name_en' => 'Phra Phutthabat'
              ],
              [
                'code' =>'1910',
                'province_id' => '10',
                'name_th' => 'เสาไห้',
                'name_en' => 'Sao Hai'
              ],
              [
                'code' =>'1911',
                'province_id' => '10',
                'name_th' => 'มวกเหล็ก',
                'name_en' => 'Muak Lek'
              ],
              [
                'code' =>'1912',
                'province_id' => '10',
                'name_th' => 'วังม่วง',
                'name_en' => 'Wang Muang'
              ],
              [
                'code' =>'1913',
                'province_id' => '10',
                'name_th' => 'เฉลิมพระเกียรติ',
                'name_en' => 'Chaloem Phra Kiat'
              ],
              [
                'code' =>'2001',
                'province_id' => '11',
                'name_th' => 'เมืองชลบุรี',
                'name_en' => 'Mueang Chon Buri'
              ],
              [
                'code' =>'2002',
                'province_id' => '11',
                'name_th' => 'บ้านบึง',
                'name_en' => 'Ban Bueng'
              ],
              [
                'code' =>'2003',
                'province_id' => '11',
                'name_th' => 'หนองใหญ่',
                'name_en' => 'Nong Yai'
              ],
              [
                'code' =>'2004',
                'province_id' => '11',
                'name_th' => 'บางละมุง',
                'name_en' => 'Bang Lamung'
              ],
              [
                'code' =>'2005',
                'province_id' => '11',
                'name_th' => 'พานทอง',
                'name_en' => 'Phan Thong'
              ],
              [
                'code' =>'2006',
                'province_id' => '11',
                'name_th' => 'พนัสนิคม',
                'name_en' => 'Phanat Nikhom'
              ],
              [
                'code' =>'2007',
                'province_id' => '11',
                'name_th' => 'ศรีราชา',
                'name_en' => 'Si Racha'
              ],
              [
                'code' =>'2008',
                'province_id' => '11',
                'name_th' => 'เกาะสีชัง',
                'name_en' => 'Ko Sichang'
              ],
              [
                'code' =>'2009',
                'province_id' => '11',
                'name_th' => 'สัตหีบ',
                'name_en' => 'Sattahip'
              ],
              [
                'code' =>'2010',
                'province_id' => '11',
                'name_th' => 'บ่อทอง',
                'name_en' => 'Bo Thong'
              ],
              [
                'code' =>'2011',
                'province_id' => '11',
                'name_th' => 'เกาะจันทร์',
                'name_en' => 'Ko Chan'
              ],
              [
                'code' =>'2051',
                'province_id' => '11',
                'name_th' => 'สัตหีบ (สาขาตำบลบางเสร่)*',
                'name_en' => 'Sattahip(Bang Sre)*'
              ],
              [
                'code' =>'2072',
                'province_id' => '11',
                'name_th' => 'ท้องถิ่นเทศบาลเมืองหนองปรือ*',
                'name_en' => 'Tong Tin Tetsaban Mueang Nong Prue*'
              ],
              [
                'code' =>'2093',
                'province_id' => '11',
                'name_th' => 'เทศบาลตำบลแหลมฉบัง*',
                'name_en' => 'Tetsaban Tambon Lamsabang*'
              ],
              [
                'code' =>'2099',
                'province_id' => '11',
                'name_th' => 'เทศบาลเมืองชลบุรี*',
                'name_en' => 'Mueang Chon Buri'
              ],
              [
                'code' =>'2101',
                'province_id' => '12',
                'name_th' => 'เมืองระยอง',
                'name_en' => 'Mueang Rayong'
              ],
              [
                'code' =>'2102',
                'province_id' => '12',
                'name_th' => 'บ้านฉาง',
                'name_en' => 'Ban Chang'
              ],
              [
                'code' =>'2103',
                'province_id' => '12',
                'name_th' => 'แกลง',
                'name_en' => 'Klaeng'
              ],
              [
                'code' =>'2104',
                'province_id' => '12',
                'name_th' => 'วังจันทร์',
                'name_en' => 'Wang Chan'
              ],
              [
                'code' =>'2105',
                'province_id' => '12',
                'name_th' => 'บ้านค่าย',
                'name_en' => 'Ban Khai'
              ],
              [
                'code' =>'2106',
                'province_id' => '12',
                'name_th' => 'ปลวกแดง',
                'name_en' => 'Pluak Daeng'
              ],
              [
                'code' =>'2107',
                'province_id' => '12',
                'name_th' => 'เขาชะเมา',
                'name_en' => 'Khao Chamao'
              ],
              [
                'code' =>'2108',
                'province_id' => '12',
                'name_th' => 'นิคมพัฒนา',
                'name_en' => 'Nikhom Phatthana'
              ],
              [
                'code' =>'2151',
                'province_id' => '12',
                'name_th' => 'สาขาตำบลมาบข่า*',
                'name_en' => 'Saka Tambon Mabka'
              ],
              [
                'code' =>'2201',
                'province_id' => '13',
                'name_th' => 'เมืองจันทบุรี',
                'name_en' => 'Mueang Chanthaburi'
              ],
              [
                'code' =>'2202',
                'province_id' => '13',
                'name_th' => 'ขลุง',
                'name_en' => 'Khlung'
              ],
              [
                'code' =>'2203',
                'province_id' => '13',
                'name_th' => 'ท่าใหม่',
                'name_en' => 'Tha Mai'
              ],
              [
                'code' =>'2204',
                'province_id' => '13',
                'name_th' => 'โป่งน้ำร้อน',
                'name_en' => 'Pong Nam Ron'
              ],
              [
                'code' =>'2205',
                'province_id' => '13',
                'name_th' => 'มะขาม',
                'name_en' => 'Makham'
              ],
              [
                'code' =>'2206',
                'province_id' => '13',
                'name_th' => 'แหลมสิงห์',
                'name_en' => 'Laem Sing'
              ],
              [
                'code' =>'2207',
                'province_id' => '13',
                'name_th' => 'สอยดาว',
                'name_en' => 'Soi Dao'
              ],
              [
                'code' =>'2208',
                'province_id' => '13',
                'name_th' => 'แก่งหางแมว',
                'name_en' => 'Kaeng Hang Maeo'
              ],
              [
                'code' =>'2209',
                'province_id' => '13',
                'name_th' => 'นายายอาม',
                'name_en' => 'Na Yai Am'
              ],
              [
                'code' =>'2210',
                'province_id' => '13',
                'name_th' => 'เขาคิชฌกูฏ',
                'name_en' => 'Khoa Khitchakut'
              ],
              [
                'code' =>'2281',
                'province_id' => '13',
                'name_th' => '*กิ่ง อ.กำพุธ จ.จันทบุรี',
                'name_en' => '*King Amphoe Kampud'
              ],
              [
                'code' =>'2301',
                'province_id' => '14',
                'name_th' => 'เมืองตราด',
                'name_en' => 'Mueang Trat'
              ],
              [
                'code' =>'2302',
                'province_id' => '14',
                'name_th' => 'คลองใหญ่',
                'name_en' => 'Khlong Yai'
              ],
              [
                'code' =>'2303',
                'province_id' => '14',
                'name_th' => 'เขาสมิง',
                'name_en' => 'Khao Saming'
              ],
              [
                'code' =>'2304',
                'province_id' => '14',
                'name_th' => 'บ่อไร่',
                'name_en' => 'Bo Rai'
              ],
              [
                'code' =>'2305',
                'province_id' => '14',
                'name_th' => 'แหลมงอบ',
                'name_en' => 'Laem Ngop'
              ],
              [
                'code' =>'2306',
                'province_id' => '14',
                'name_th' => 'เกาะกูด',
                'name_en' => 'Ko Kut'
              ],
              [
                'code' =>'2307',
                'province_id' => '14',
                'name_th' => 'เกาะช้าง',
                'name_en' => 'Ko Chang'
              ],
              [
                'code' =>'2401',
                'province_id' => '15',
                'name_th' => 'เมืองฉะเชิงเทรา',
                'name_en' => 'Mueang Chachoengsao'
              ],
              [
                'code' =>'2402',
                'province_id' => '15',
                'name_th' => 'บางคล้า',
                'name_en' => 'Bang Khla'
              ],
              [
                'code' =>'2403',
                'province_id' => '15',
                'name_th' => 'บางน้ำเปรี้ยว',
                'name_en' => 'Bang Nam Priao'
              ],
              [
                'code' =>'2404',
                'province_id' => '15',
                'name_th' => 'บางปะกง',
                'name_en' => 'Bang Pakong'
              ],
              [
                'code' =>'2405',
                'province_id' => '15',
                'name_th' => 'บ้านโพธิ์',
                'name_en' => 'Ban Pho'
              ],
              [
                'code' =>'2406',
                'province_id' => '15',
                'name_th' => 'พนมสารคาม',
                'name_en' => 'Phanom Sarakham'
              ],
              [
                'code' =>'2407',
                'province_id' => '15',
                'name_th' => 'ราชสาส์น',
                'name_en' => 'Ratchasan'
              ],
              [
                'code' =>'2408',
                'province_id' => '15',
                'name_th' => 'สนามชัยเขต',
                'name_en' => 'Sanam Chai Khet'
              ],
              [
                'code' =>'2409',
                'province_id' => '15',
                'name_th' => 'แปลงยาว',
                'name_en' => 'Plaeng Yao'
              ],
              [
                'code' =>'2410',
                'province_id' => '15',
                'name_th' => 'ท่าตะเกียบ',
                'name_en' => 'Tha Takiap'
              ],
              [
                'code' =>'2411',
                'province_id' => '15',
                'name_th' => 'คลองเขื่อน',
                'name_en' => 'Khlong Khuean'
              ],
              [
                'code' =>'2501',
                'province_id' => '16',
                'name_th' => 'เมืองปราจีนบุรี',
                'name_en' => 'Mueang Prachin Buri'
              ],
              [
                'code' =>'2502',
                'province_id' => '16',
                'name_th' => 'กบินทร์บุรี',
                'name_en' => 'Kabin Buri'
              ],
              [
                'code' =>'2503',
                'province_id' => '16',
                'name_th' => 'นาดี',
                'name_en' => 'Na Di'
              ],
              [
                'code' =>'2504',
                'province_id' => '16',
                'name_th' => '*สระแก้ว',
                'name_en' => 'Sa Kaeo'
              ],
              [
                'code' =>'2505',
                'province_id' => '16',
                'name_th' => '*วังน้ำเย็น',
                'name_en' => 'Wang Nam Yen'
              ],
              [
                'code' =>'2506',
                'province_id' => '16',
                'name_th' => 'บ้านสร้าง',
                'name_en' => 'Ban Sang'
              ],
              [
                'code' =>'2507',
                'province_id' => '16',
                'name_th' => 'ประจันตคาม',
                'name_en' => 'Prachantakham'
              ],
              [
                'code' =>'2508',
                'province_id' => '16',
                'name_th' => 'ศรีมหาโพธิ',
                'name_en' => 'Si Maha Phot'
              ],
              [
                'code' =>'2509',
                'province_id' => '16',
                'name_th' => 'ศรีมโหสถ',
                'name_en' => 'Si Mahosot'
              ],
              [
                'code' =>'2510',
                'province_id' => '16',
                'name_th' => '*อรัญประเทศ',
                'name_en' => 'Aranyaprathet'
              ],
              [
                'code' =>'2511',
                'province_id' => '16',
                'name_th' => '*ตาพระยา',
                'name_en' => 'Ta Phraya'
              ],
              [
                'code' =>'2512',
                'province_id' => '16',
                'name_th' => '*วัฒนานคร',
                'name_en' => 'Watthana Nakhon'
              ],
              [
                'code' =>'2513',
                'province_id' => '16',
                'name_th' => '*คลองหาด',
                'name_en' => 'Khlong Hat'
              ],
              [
                'code' =>'2601',
                'province_id' => '17',
                'name_th' => 'เมืองนครนายก',
                'name_en' => 'Mueang Nakhon Nayok'
              ],
              [
                'code' =>'2602',
                'province_id' => '17',
                'name_th' => 'ปากพลี',
                'name_en' => 'Pak Phli'
              ],
              [
                'code' =>'2603',
                'province_id' => '17',
                'name_th' => 'บ้านนา',
                'name_en' => 'Ban Na'
              ],
              [
                'code' =>'2604',
                'province_id' => '17',
                'name_th' => 'องครักษ์',
                'name_en' => 'Ongkharak'
              ],
              [
                'code' =>'2701',
                'province_id' => '18',
                'name_th' => 'เมืองสระแก้ว',
                'name_en' => 'Mueang Sa Kaeo'
              ],
              [
                'code' =>'2702',
                'province_id' => '18',
                'name_th' => 'คลองหาด',
                'name_en' => 'Khlong Hat'
              ],
              [
                'code' =>'2703',
                'province_id' => '18',
                'name_th' => 'ตาพระยา',
                'name_en' => 'Ta Phraya'
              ],
              [
                'code' =>'2704',
                'province_id' => '18',
                'name_th' => 'วังน้ำเย็น',
                'name_en' => 'Wang Nam Yen'
              ],
              [
                'code' =>'2705',
                'province_id' => '18',
                'name_th' => 'วัฒนานคร',
                'name_en' => 'Watthana Nakhon'
              ],
              [
                'code' =>'2706',
                'province_id' => '18',
                'name_th' => 'อรัญประเทศ',
                'name_en' => 'Aranyaprathet'
              ],
              [
                'code' =>'2707',
                'province_id' => '18',
                'name_th' => 'เขาฉกรรจ์',
                'name_en' => 'Khao Chakan'
              ],
              [
                'code' =>'2708',
                'province_id' => '18',
                'name_th' => 'โคกสูง',
                'name_en' => 'Khok Sung'
              ],
              [
                'code' =>'2709',
                'province_id' => '18',
                'name_th' => 'วังสมบูรณ์',
                'name_en' => 'Wang Sombun'
              ],
              [
                'code' =>'3001',
                'province_id' => '19',
                'name_th' => 'เมืองนครราชสีมา',
                'name_en' => 'Mueang Nakhon Ratchasima'
              ],
              [
                'code' =>'3002',
                'province_id' => '19',
                'name_th' => 'ครบุรี',
                'name_en' => 'Khon Buri'
              ],
              [
                'code' =>'3003',
                'province_id' => '19',
                'name_th' => 'เสิงสาง',
                'name_en' => 'Soeng Sang'
              ],
              [
                'code' =>'3004',
                'province_id' => '19',
                'name_th' => 'คง',
                'name_en' => 'Khong'
              ],
              [
                'code' =>'3005',
                'province_id' => '19',
                'name_th' => 'บ้านเหลื่อม',
                'name_en' => 'Ban Lueam'
              ],
              [
                'code' =>'3006',
                'province_id' => '19',
                'name_th' => 'จักราช',
                'name_en' => 'Chakkarat'
              ],
              [
                'code' =>'3007',
                'province_id' => '19',
                'name_th' => 'โชคชัย',
                'name_en' => 'Chok Chai'
              ],
              [
                'code' =>'3008',
                'province_id' => '19',
                'name_th' => 'ด่านขุนทด',
                'name_en' => 'Dan Khun Thot'
              ],
              [
                'code' =>'3009',
                'province_id' => '19',
                'name_th' => 'โนนไทย',
                'name_en' => 'Non Thai'
              ],
              [
                'code' =>'3010',
                'province_id' => '19',
                'name_th' => 'โนนสูง',
                'name_en' => 'Non Sung'
              ],
              [
                'code' =>'3011',
                'province_id' => '19',
                'name_th' => 'ขามสะแกแสง',
                'name_en' => 'Kham Sakaesaeng'
              ],
              [
                'code' =>'3012',
                'province_id' => '19',
                'name_th' => 'บัวใหญ่',
                'name_en' => 'Bua Yai'
              ],
              [
                'code' =>'3013',
                'province_id' => '19',
                'name_th' => 'ประทาย',
                'name_en' => 'Prathai'
              ],
              [
                'code' =>'3014',
                'province_id' => '19',
                'name_th' => 'ปักธงชัย',
                'name_en' => 'Pak Thong Chai'
              ],
              [
                'code' =>'3015',
                'province_id' => '19',
                'name_th' => 'พิมาย',
                'name_en' => 'Phimai'
              ],
              [
                'code' =>'3016',
                'province_id' => '19',
                'name_th' => 'ห้วยแถลง',
                'name_en' => 'Huai Thalaeng'
              ],
              [
                'code' =>'3017',
                'province_id' => '19',
                'name_th' => 'ชุมพวง',
                'name_en' => 'Chum Phuang'
              ],
              [
                'code' =>'3018',
                'province_id' => '19',
                'name_th' => 'สูงเนิน',
                'name_en' => 'Sung Noen'
              ],
              [
                'code' =>'3019',
                'province_id' => '19',
                'name_th' => 'ขามทะเลสอ',
                'name_en' => 'Kham Thale So'
              ],
              [
                'code' =>'3020',
                'province_id' => '19',
                'name_th' => 'สีคิ้ว',
                'name_en' => 'Sikhio'
              ],
              [
                'code' =>'3021',
                'province_id' => '19',
                'name_th' => 'ปากช่อง',
                'name_en' => 'Pak Chong'
              ],
              [
                'code' =>'3022',
                'province_id' => '19',
                'name_th' => 'หนองบุญมาก',
                'name_en' => 'Nong Bunnak'
              ],
              [
                'code' =>'3023',
                'province_id' => '19',
                'name_th' => 'แก้งสนามนาง',
                'name_en' => 'Kaeng Sanam Nang'
              ],
              [
                'code' =>'3024',
                'province_id' => '19',
                'name_th' => 'โนนแดง',
                'name_en' => 'Non Daeng'
              ],
              [
                'code' =>'3025',
                'province_id' => '19',
                'name_th' => 'วังน้ำเขียว',
                'name_en' => 'Wang Nam Khiao'
              ],
              [
                'code' =>'3026',
                'province_id' => '19',
                'name_th' => 'เทพารักษ์',
                'name_en' => 'Thepharak'
              ],
              [
                'code' =>'3027',
                'province_id' => '19',
                'name_th' => 'เมืองยาง',
                'name_en' => 'Mueang Yang'
              ],
              [
                'code' =>'3028',
                'province_id' => '19',
                'name_th' => 'พระทองคำ',
                'name_en' => 'Phra Thong Kham'
              ],
              [
                'code' =>'3029',
                'province_id' => '19',
                'name_th' => 'ลำทะเมนชัย',
                'name_en' => 'Lam Thamenchai'
              ],
              [
                'code' =>'3030',
                'province_id' => '19',
                'name_th' => 'บัวลาย',
                'name_en' => 'Bua Lai'
              ],
              [
                'code' =>'3031',
                'province_id' => '19',
                'name_th' => 'สีดา',
                'name_en' => 'Sida'
              ],
              [
                'code' =>'3032',
                'province_id' => '19',
                'name_th' => 'เฉลิมพระเกียรติ',
                'name_en' => 'Chaloem Phra Kiat'
              ],
              [
                'code' =>'3049',
                'province_id' => '19',
                'name_th' => 'ท้องถิ่นเทศบาลตำบลโพธิ์กลาง*',
                'name_en' => 'Pho Krang'
              ],
              [
                'code' =>'3051',
                'province_id' => '19',
                'name_th' => 'สาขาตำบลมะค่า-พลสงคราม*',
                'name_en' => 'Ma Ka-Pon Songkram*'
              ],
              [
                'code' =>'3081',
                'province_id' => '19',
                'name_th' => '*โนนลาว',
                'name_en' => '*Non Lao'
              ],
              [
                'code' =>'3101',
                'province_id' => '20',
                'name_th' => 'เมืองบุรีรัมย์',
                'name_en' => 'Mueang Buri Ram'
              ],
              [
                'code' =>'3102',
                'province_id' => '20',
                'name_th' => 'คูเมือง',
                'name_en' => 'Khu Mueang'
              ],
              [
                'code' =>'3103',
                'province_id' => '20',
                'name_th' => 'กระสัง',
                'name_en' => 'Krasang'
              ],
              [
                'code' =>'3104',
                'province_id' => '20',
                'name_th' => 'นางรอง',
                'name_en' => 'Nang Rong'
              ],
              [
                'code' =>'3105',
                'province_id' => '20',
                'name_th' => 'หนองกี่',
                'name_en' => 'Nong Ki'
              ],
              [
                'code' =>'3106',
                'province_id' => '20',
                'name_th' => 'ละหานทราย',
                'name_en' => 'Lahan Sai'
              ],
              [
                'code' =>'3107',
                'province_id' => '20',
                'name_th' => 'ประโคนชัย',
                'name_en' => 'Prakhon Chai'
              ],
              [
                'code' =>'3108',
                'province_id' => '20',
                'name_th' => 'บ้านกรวด',
                'name_en' => 'Ban Kruat'
              ],
              [
                'code' =>'3109',
                'province_id' => '20',
                'name_th' => 'พุทไธสง',
                'name_en' => 'Phutthaisong'
              ],
              [
                'code' =>'3110',
                'province_id' => '20',
                'name_th' => 'ลำปลายมาศ',
                'name_en' => 'Lam Plai Mat'
              ],
              [
                'code' =>'3111',
                'province_id' => '20',
                'name_th' => 'สตึก',
                'name_en' => 'Satuek'
              ],
              [
                'code' =>'3112',
                'province_id' => '20',
                'name_th' => 'ปะคำ',
                'name_en' => 'Pakham'
              ],
              [
                'code' =>'3113',
                'province_id' => '20',
                'name_th' => 'นาโพธิ์',
                'name_en' => 'Na Pho'
              ],
              [
                'code' =>'3114',
                'province_id' => '20',
                'name_th' => 'หนองหงส์',
                'name_en' => 'Nong Hong'
              ],
              [
                'code' =>'3115',
                'province_id' => '20',
                'name_th' => 'พลับพลาชัย',
                'name_en' => 'Phlapphla Chai'
              ],
              [
                'code' =>'3116',
                'province_id' => '20',
                'name_th' => 'ห้วยราช',
                'name_en' => 'Huai Rat'
              ],
              [
                'code' =>'3117',
                'province_id' => '20',
                'name_th' => 'โนนสุวรรณ',
                'name_en' => 'Non Suwan'
              ],
              [
                'code' =>'3118',
                'province_id' => '20',
                'name_th' => 'ชำนิ',
                'name_en' => 'Chamni'
              ],
              [
                'code' =>'3119',
                'province_id' => '20',
                'name_th' => 'บ้านใหม่ไชยพจน์',
                'name_en' => 'Ban Mai Chaiyaphot'
              ],
              [
                'code' =>'3120',
                'province_id' => '20',
                'name_th' => 'โนนดินแดง',
                'name_en' => 'Din Daeng'
              ],
              [
                'code' =>'3121',
                'province_id' => '20',
                'name_th' => 'บ้านด่าน',
                'name_en' => 'Ban Dan'
              ],
              [
                'code' =>'3122',
                'province_id' => '20',
                'name_th' => 'แคนดง',
                'name_en' => 'Khaen Dong'
              ],
              [
                'code' =>'3123',
                'province_id' => '20',
                'name_th' => 'เฉลิมพระเกียรติ',
                'name_en' => 'Chaloem Phra Kiat'
              ],
              [
                'code' =>'3201',
                'province_id' => '21',
                'name_th' => 'เมืองสุรินทร์',
                'name_en' => 'Mueang Surin'
              ],
              [
                'code' =>'3202',
                'province_id' => '21',
                'name_th' => 'ชุมพลบุรี',
                'name_en' => 'Chumphon Buri'
              ],
              [
                'code' =>'3203',
                'province_id' => '21',
                'name_th' => 'ท่าตูม',
                'name_en' => 'Tha Tum'
              ],
              [
                'code' =>'3204',
                'province_id' => '21',
                'name_th' => 'จอมพระ',
                'name_en' => 'Chom Phra'
              ],
              [
                'code' =>'3205',
                'province_id' => '21',
                'name_th' => 'ปราสาท',
                'name_en' => 'Prasat'
              ],
              [
                'code' =>'3206',
                'province_id' => '21',
                'name_th' => 'กาบเชิง',
                'name_en' => 'Kap Choeng'
              ],
              [
                'code' =>'3207',
                'province_id' => '21',
                'name_th' => 'รัตนบุรี',
                'name_en' => 'Rattanaburi'
              ],
              [
                'code' =>'3208',
                'province_id' => '21',
                'name_th' => 'สนม',
                'name_en' => 'Sanom'
              ],
              [
                'code' =>'3209',
                'province_id' => '21',
                'name_th' => 'ศีขรภูมิ',
                'name_en' => 'Sikhoraphum'
              ],
              [
                'code' =>'3210',
                'province_id' => '21',
                'name_th' => 'สังขะ',
                'name_en' => 'Sangkha'
              ],
              [
                'code' =>'3211',
                'province_id' => '21',
                'name_th' => 'ลำดวน',
                'name_en' => 'Lamduan'
              ],
              [
                'code' =>'3212',
                'province_id' => '21',
                'name_th' => 'สำโรงทาบ',
                'name_en' => 'Samrong Thap'
              ],
              [
                'code' =>'3213',
                'province_id' => '21',
                'name_th' => 'บัวเชด',
                'name_en' => 'Buachet'
              ],
              [
                'code' =>'3214',
                'province_id' => '21',
                'name_th' => 'พนมดงรัก',
                'name_en' => 'Phanom Dong Rak'
              ],
              [
                'code' =>'3215',
                'province_id' => '21',
                'name_th' => 'ศรีณรงค์',
                'name_en' => 'Si Narong'
              ],
              [
                'code' =>'3216',
                'province_id' => '21',
                'name_th' => 'เขวาสินรินทร์',
                'name_en' => 'Khwao Sinarin'
              ],
              [
                'code' =>'3217',
                'province_id' => '21',
                'name_th' => 'โนนนารายณ์',
                'name_en' => 'Non Narai'
              ],
              [
                'code' =>'3301',
                'province_id' => '22',
                'name_th' => 'เมืองศรีสะเกษ',
                'name_en' => 'Mueang Si Sa Ket'
              ],
              [
                'code' =>'3302',
                'province_id' => '22',
                'name_th' => 'ยางชุมน้อย',
                'name_en' => 'Yang Chum Noi'
              ],
              [
                'code' =>'3303',
                'province_id' => '22',
                'name_th' => 'กันทรารมย์',
                'name_en' => 'Kanthararom'
              ],
              [
                'code' =>'3304',
                'province_id' => '22',
                'name_th' => 'กันทรลักษ์',
                'name_en' => 'Kantharalak'
              ],
              [
                'code' =>'3305',
                'province_id' => '22',
                'name_th' => 'ขุขันธ์',
                'name_en' => 'Khukhan'
              ],
              [
                'code' =>'3306',
                'province_id' => '22',
                'name_th' => 'ไพรบึง',
                'name_en' => 'Phrai Bueng'
              ],
              [
                'code' =>'3307',
                'province_id' => '22',
                'name_th' => 'ปรางค์กู่',
                'name_en' => 'Prang Ku'
              ],
              [
                'code' =>'3308',
                'province_id' => '22',
                'name_th' => 'ขุนหาญ',
                'name_en' => 'Khun Han'
              ],
              [
                'code' =>'3309',
                'province_id' => '22',
                'name_th' => 'ราษีไศล',
                'name_en' => 'Rasi Salai'
              ],
              [
                'code' =>'3310',
                'province_id' => '22',
                'name_th' => 'อุทุมพรพิสัย',
                'name_en' => 'Uthumphon Phisai'
              ],
              [
                'code' =>'3311',
                'province_id' => '22',
                'name_th' => 'บึงบูรพ์',
                'name_en' => 'Bueng Bun'
              ],
              [
                'code' =>'3312',
                'province_id' => '22',
                'name_th' => 'ห้วยทับทัน',
                'name_en' => 'Huai Thap Than'
              ],
              [
                'code' =>'3313',
                'province_id' => '22',
                'name_th' => 'โนนคูณ',
                'name_en' => 'Non Khun'
              ],
              [
                'code' =>'3314',
                'province_id' => '22',
                'name_th' => 'ศรีรัตนะ',
                'name_en' => 'Si Rattana'
              ],
              [
                'code' =>'3315',
                'province_id' => '22',
                'name_th' => 'น้ำเกลี้ยง',
                'name_en' => 'Si Rattana'
              ],
              [
                'code' =>'3316',
                'province_id' => '22',
                'name_th' => 'วังหิน',
                'name_en' => 'Wang Hin'
              ],
              [
                'code' =>'3317',
                'province_id' => '22',
                'name_th' => 'ภูสิงห์',
                'name_en' => 'Phu Sing'
              ],
              [
                'code' =>'3318',
                'province_id' => '22',
                'name_th' => 'เมืองจันทร์',
                'name_en' => 'Mueang Chan'
              ],
              [
                'code' =>'3319',
                'province_id' => '22',
                'name_th' => 'เบญจลักษ์',
                'name_en' => 'Benchalak'
              ],
              [
                'code' =>'3320',
                'province_id' => '22',
                'name_th' => 'พยุห์',
                'name_en' => 'Phayu'
              ],
              [
                'code' =>'3321',
                'province_id' => '22',
                'name_th' => 'โพธิ์ศรีสุวรรณ',
                'name_en' => 'Pho Si Suwan'
              ],
              [
                'code' =>'3322',
                'province_id' => '22',
                'name_th' => 'ศิลาลาด',
                'name_en' => 'Sila Lat'
              ],
              [
                'code' =>'3401',
                'province_id' => '23',
                'name_th' => 'เมืองอุบลราชธานี',
                'name_en' => 'Mueang Ubon Ratchathani'
              ],
              [
                'code' =>'3402',
                'province_id' => '23',
                'name_th' => 'ศรีเมืองใหม่',
                'name_en' => 'Si Mueang Mai'
              ],
              [
                'code' =>'3403',
                'province_id' => '23',
                'name_th' => 'โขงเจียม',
                'name_en' => 'Khong Chiam'
              ],
              [
                'code' =>'3404',
                'province_id' => '23',
                'name_th' => 'เขื่องใน',
                'name_en' => 'Khueang Nai'
              ],
              [
                'code' =>'3405',
                'province_id' => '23',
                'name_th' => 'เขมราฐ',
                'name_en' => 'Khemarat'
              ],
              [
                'code' =>'3406',
                'province_id' => '23',
                'name_th' => '*ชานุมาน',
                'name_en' => '*Shanuman'
              ],
              [
                'code' =>'3407',
                'province_id' => '23',
                'name_th' => 'เดชอุดม',
                'name_en' => 'Det Udom'
              ],
              [
                'code' =>'3408',
                'province_id' => '23',
                'name_th' => 'นาจะหลวย',
                'name_en' => 'Na Chaluai'
              ],
              [
                'code' =>'3409',
                'province_id' => '23',
                'name_th' => 'น้ำยืน',
                'name_en' => 'Nam Yuen'
              ],
              [
                'code' =>'3410',
                'province_id' => '23',
                'name_th' => 'บุณฑริก',
                'name_en' => 'Buntharik'
              ],
              [
                'code' =>'3411',
                'province_id' => '23',
                'name_th' => 'ตระการพืชผล',
                'name_en' => 'Trakan Phuet Phon'
              ],
              [
                'code' =>'3412',
                'province_id' => '23',
                'name_th' => 'กุดข้าวปุ้น',
                'name_en' => 'Kut Khaopun'
              ],
              [
                'code' =>'3413',
                'province_id' => '23',
                'name_th' => '*พนา',
                'name_en' => '*Phana'
              ],
              [
                'code' =>'3414',
                'province_id' => '23',
                'name_th' => 'ม่วงสามสิบ',
                'name_en' => 'Muang Sam Sip'
              ],
              [
                'code' =>'3415',
                'province_id' => '23',
                'name_th' => 'วารินชำราบ',
                'name_en' => 'Warin Chamrap'
              ],
              [
                'code' =>'3416',
                'province_id' => '23',
                'name_th' => '*อำนาจเจริญ',
                'name_en' => '*Amnat Charoen'
              ],
              [
                'code' =>'3417',
                'province_id' => '23',
                'name_th' => '*เสนางคนิคม',
                'name_en' => '*Senangkhanikhom'
              ],
              [
                'code' =>'3418',
                'province_id' => '23',
                'name_th' => '*หัวตะพาน',
                'name_en' => '*Hua Taphan'
              ],
              [
                'code' =>'3419',
                'province_id' => '23',
                'name_th' => 'พิบูลมังสาหาร',
                'name_en' => 'Phibun Mangsahan'
              ],
              [
                'code' =>'3420',
                'province_id' => '23',
                'name_th' => 'ตาลสุม',
                'name_en' => 'Tan Sum'
              ],
              [
                'code' =>'3421',
                'province_id' => '23',
                'name_th' => 'โพธิ์ไทร',
                'name_en' => 'Pho Sai'
              ],
              [
                'code' =>'3422',
                'province_id' => '23',
                'name_th' => 'สำโรง',
                'name_en' => 'Samrong'
              ],
              [
                'code' =>'3423',
                'province_id' => '23',
                'name_th' => '*กิ่งอำเภอลืออำนาจ',
                'name_en' => '*King Amphoe Lue Amnat'
              ],
              [
                'code' =>'3424',
                'province_id' => '23',
                'name_th' => 'ดอนมดแดง',
                'name_en' => 'Don Mot Daeng'
              ],
              [
                'code' =>'3425',
                'province_id' => '23',
                'name_th' => 'สิรินธร',
                'name_en' => 'Sirindhorn'
              ],
              [
                'code' =>'3426',
                'province_id' => '23',
                'name_th' => 'ทุ่งศรีอุดม',
                'name_en' => 'Thung Si Udom'
              ],
              [
                'code' =>'3427',
                'province_id' => '23',
                'name_th' => '*ปทุมราชวงศา',
                'name_en' => '*Pathum Ratchawongsa'
              ],
              [
                'code' =>'3428',
                'province_id' => '23',
                'name_th' => '*กิ่งอำเภอศรีหลักชัย',
                'name_en' => '*King Amphoe Sri Lunk Chai'
              ],
              [
                'code' =>'3429',
                'province_id' => '23',
                'name_th' => 'นาเยีย',
                'name_en' => 'Na Yia'
              ],
              [
                'code' =>'3430',
                'province_id' => '23',
                'name_th' => 'นาตาล',
                'name_en' => 'Na Tan'
              ],
              [
                'code' =>'3431',
                'province_id' => '23',
                'name_th' => 'เหล่าเสือโก้ก',
                'name_en' => 'Lao Suea Kok'
              ],
              [
                'code' =>'3432',
                'province_id' => '23',
                'name_th' => 'สว่างวีระวงศ์',
                'name_en' => 'Sawang Wirawong'
              ],
              [
                'code' =>'3433',
                'province_id' => '23',
                'name_th' => 'น้ำขุ่น',
                'name_en' => 'Nam Khun'
              ],
              [
                'code' =>'3481',
                'province_id' => '23',
                'name_th' => '*อ.สุวรรณวารี จ.อุบลราชธานี',
                'name_en' => '*Suwan Wari'
              ],
              [
                'code' =>'3501',
                'province_id' => '24',
                'name_th' => 'เมืองยโสธร',
                'name_en' => 'Mueang Yasothon'
              ],
              [
                'code' =>'3502',
                'province_id' => '24',
                'name_th' => 'ทรายมูล',
                'name_en' => 'Sai Mun'
              ],
              [
                'code' =>'3503',
                'province_id' => '24',
                'name_th' => 'กุดชุม',
                'name_en' => 'Kut Chum'
              ],
              [
                'code' =>'3504',
                'province_id' => '24',
                'name_th' => 'คำเขื่อนแก้ว',
                'name_en' => 'Kham Khuean Kaeo'
              ],
              [
                'code' =>'3505',
                'province_id' => '24',
                'name_th' => 'ป่าติ้ว',
                'name_en' => 'Pa Tio'
              ],
              [
                'code' =>'3506',
                'province_id' => '24',
                'name_th' => 'มหาชนะชัย',
                'name_en' => 'Maha Chana Chai'
              ],
              [
                'code' =>'3507',
                'province_id' => '24',
                'name_th' => 'ค้อวัง',
                'name_en' => 'Kho Wang'
              ],
              [
                'code' =>'3508',
                'province_id' => '24',
                'name_th' => 'เลิงนกทา',
                'name_en' => 'Loeng Nok Tha'
              ],
              [
                'code' =>'3509',
                'province_id' => '24',
                'name_th' => 'ไทยเจริญ',
                'name_en' => 'Thai Charoen'
              ],
              [
                'code' =>'3601',
                'province_id' => '25',
                'name_th' => 'เมืองชัยภูมิ',
                'name_en' => 'Mueang Chaiyaphum'
              ],
              [
                'code' =>'3602',
                'province_id' => '25',
                'name_th' => 'บ้านเขว้า',
                'name_en' => 'Ban Khwao'
              ],
              [
                'code' =>'3603',
                'province_id' => '25',
                'name_th' => 'คอนสวรรค์',
                'name_en' => 'Khon Sawan'
              ],
              [
                'code' =>'3604',
                'province_id' => '25',
                'name_th' => 'เกษตรสมบูรณ์',
                'name_en' => 'Kaset Sombun'
              ],
              [
                'code' =>'3605',
                'province_id' => '25',
                'name_th' => 'หนองบัวแดง',
                'name_en' => 'Nong Bua Daeng'
              ],
              [
                'code' =>'3606',
                'province_id' => '25',
                'name_th' => 'จัตุรัส',
                'name_en' => 'Chatturat'
              ],
              [
                'code' =>'3607',
                'province_id' => '25',
                'name_th' => 'บำเหน็จณรงค์',
                'name_en' => 'Bamnet Narong'
              ],
              [
                'code' =>'3608',
                'province_id' => '25',
                'name_th' => 'หนองบัวระเหว',
                'name_en' => 'Nong Bua Rawe'
              ],
              [
                'code' =>'3609',
                'province_id' => '25',
                'name_th' => 'เทพสถิต',
                'name_en' => 'Thep Sathit'
              ],
              [
                'code' =>'3610',
                'province_id' => '25',
                'name_th' => 'ภูเขียว',
                'name_en' => 'Phu Khiao'
              ],
              [
                'code' =>'3611',
                'province_id' => '25',
                'name_th' => 'บ้านแท่น',
                'name_en' => 'Ban Thaen'
              ],
              [
                'code' =>'3612',
                'province_id' => '25',
                'name_th' => 'แก้งคร้อ',
                'name_en' => 'Kaeng Khro'
              ],
              [
                'code' =>'3613',
                'province_id' => '25',
                'name_th' => 'คอนสาร',
                'name_en' => 'Khon San'
              ],
              [
                'code' =>'3614',
                'province_id' => '25',
                'name_th' => 'ภักดีชุมพล',
                'name_en' => 'Phakdi Chumphon'
              ],
              [
                'code' =>'3615',
                'province_id' => '25',
                'name_th' => 'เนินสง่า',
                'name_en' => 'Noen Sa-nga'
              ],
              [
                'code' =>'3616',
                'province_id' => '25',
                'name_th' => 'ซับใหญ่',
                'name_en' => 'Sap Yai'
              ],
              [
                'code' =>'3651',
                'province_id' => '25',
                'name_th' => 'เมืองชัยภูมิ (สาขาตำบลโนนสำราญ)*',
                'name_en' => 'Mueang Chaiyaphum(Non Sumran)*'
              ],
              [
                'code' =>'3652',
                'province_id' => '25',
                'name_th' => 'สาขาตำบลบ้านหว่าเฒ่า*',
                'name_en' => 'Ban Wha Tao*'
              ],
              [
                'code' =>'3653',
                'province_id' => '25',
                'name_th' => 'หนองบัวแดง (สาขาตำบลวังชมภู)*',
                'name_en' => 'Nong Bua Daeng'
              ],
              [
                'code' =>'3654',
                'province_id' => '25',
                'name_th' => 'กิ่งอำเภอซับใหญ่ (สาขาตำบลซับใหญ่)*',
                'name_en' => 'King Amphoe Sap Yai*'
              ],
              [
                'code' =>'3655',
                'province_id' => '25',
                'name_th' => 'สาขาตำบลโคกเพชร*',
                'name_en' => 'Coke Phet*'
              ],
              [
                'code' =>'3656',
                'province_id' => '25',
                'name_th' => 'เทพสถิต (สาขาตำบลนายางกลัก)*',
                'name_en' => 'Thep Sathit*'
              ],
              [
                'code' =>'3657',
                'province_id' => '25',
                'name_th' => 'บ้านแท่น (สาขาตำบลบ้านเต่า)*',
                'name_en' => 'Ban Thaen'
              ],
              [
                'code' =>'3658',
                'province_id' => '25',
                'name_th' => 'แก้งคร้อ (สาขาตำบลท่ามะไฟหวาน)*',
                'name_en' => 'Kaeng Khro*'
              ],
              [
                'code' =>'3659',
                'province_id' => '25',
                'name_th' => 'คอนสาร (สาขาตำบลโนนคูณ)*',
                'name_en' => 'Khon San*'
              ],
              [
                'code' =>'3701',
                'province_id' => '26',
                'name_th' => 'เมืองอำนาจเจริญ',
                'name_en' => 'Mueang Amnat Charoen'
              ],
              [
                'code' =>'3702',
                'province_id' => '26',
                'name_th' => 'ชานุมาน',
                'name_en' => 'Chanuman'
              ],
              [
                'code' =>'3703',
                'province_id' => '26',
                'name_th' => 'ปทุมราชวงศา',
                'name_en' => 'Pathum Ratchawongsa'
              ],
              [
                'code' =>'3704',
                'province_id' => '26',
                'name_th' => 'พนา',
                'name_en' => 'Phana'
              ],
              [
                'code' =>'3705',
                'province_id' => '26',
                'name_th' => 'เสนางคนิคม',
                'name_en' => 'Senangkhanikhom'
              ],
              [
                'code' =>'3706',
                'province_id' => '26',
                'name_th' => 'หัวตะพาน',
                'name_en' => 'Hua Taphan'
              ],
              [
                'code' =>'3707',
                'province_id' => '26',
                'name_th' => 'ลืออำนาจ',
                'name_en' => 'Lue Amnat'
              ],
              [
                'code' =>'3901',
                'province_id' => '27',
                'name_th' => 'เมืองหนองบัวลำภู',
                'name_en' => 'Mueang Nong Bua Lam Phu'
              ],
              [
                'code' =>'3902',
                'province_id' => '27',
                'name_th' => 'นากลาง',
                'name_en' => 'Na Klang'
              ],
              [
                'code' =>'3903',
                'province_id' => '27',
                'name_th' => 'โนนสัง',
                'name_en' => 'Non Sang'
              ],
              [
                'code' =>'3904',
                'province_id' => '27',
                'name_th' => 'ศรีบุญเรือง',
                'name_en' => 'Si Bun Rueang'
              ],
              [
                'code' =>'3905',
                'province_id' => '27',
                'name_th' => 'สุวรรณคูหา',
                'name_en' => 'Suwannakhuha'
              ],
              [
                'code' =>'3906',
                'province_id' => '27',
                'name_th' => 'นาวัง',
                'name_en' => 'Na Wang'
              ],
              [
                'code' =>'4001',
                'province_id' => '28',
                'name_th' => 'เมืองขอนแก่น',
                'name_en' => 'Mueang Khon Kaen'
              ],
              [
                'code' =>'4002',
                'province_id' => '28',
                'name_th' => 'บ้านฝาง',
                'name_en' => 'Ban Fang'
              ],
              [
                'code' =>'4003',
                'province_id' => '28',
                'name_th' => 'พระยืน',
                'name_en' => 'Phra Yuen'
              ],
              [
                'code' =>'4004',
                'province_id' => '28',
                'name_th' => 'หนองเรือ',
                'name_en' => 'Nong Ruea'
              ],
              [
                'code' =>'4005',
                'province_id' => '28',
                'name_th' => 'ชุมแพ',
                'name_en' => 'Chum Phae'
              ],
              [
                'code' =>'4006',
                'province_id' => '28',
                'name_th' => 'สีชมพู',
                'name_en' => 'Si Chomphu'
              ],
              [
                'code' =>'4007',
                'province_id' => '28',
                'name_th' => 'น้ำพอง',
                'name_en' => 'Nam Phong'
              ],
              [
                'code' =>'4008',
                'province_id' => '28',
                'name_th' => 'อุบลรัตน์',
                'name_en' => 'Ubolratana'
              ],
              [
                'code' =>'4009',
                'province_id' => '28',
                'name_th' => 'กระนวน',
                'name_en' => 'Kranuan'
              ],
              [
                'code' =>'4010',
                'province_id' => '28',
                'name_th' => 'บ้านไผ่',
                'name_en' => 'Ban Phai'
              ],
              [
                'code' =>'4011',
                'province_id' => '28',
                'name_th' => 'เปือยน้อย',
                'name_en' => 'Pueai Noi'
              ],
              [
                'code' =>'4012',
                'province_id' => '28',
                'name_th' => 'พล',
                'name_en' => 'Phon'
              ],
              [
                'code' =>'4013',
                'province_id' => '28',
                'name_th' => 'แวงใหญ่',
                'name_en' => 'Waeng Yai'
              ],
              [
                'code' =>'4014',
                'province_id' => '28',
                'name_th' => 'แวงน้อย',
                'name_en' => 'Waeng Noi'
              ],
              [
                'code' =>'4015',
                'province_id' => '28',
                'name_th' => 'หนองสองห้อง',
                'name_en' => 'Nong Song Hong'
              ],
              [
                'code' =>'4016',
                'province_id' => '28',
                'name_th' => 'ภูเวียง',
                'name_en' => 'Phu Wiang'
              ],
              [
                'code' =>'4017',
                'province_id' => '28',
                'name_th' => 'มัญจาคีรี',
                'name_en' => 'Mancha Khiri'
              ],
              [
                'code' =>'4018',
                'province_id' => '28',
                'name_th' => 'ชนบท',
                'name_en' => 'Chonnabot'
              ],
              [
                'code' =>'4019',
                'province_id' => '28',
                'name_th' => 'เขาสวนกวาง',
                'name_en' => 'Khao Suan Kwang'
              ],
              [
                'code' =>'4020',
                'province_id' => '28',
                'name_th' => 'ภูผาม่าน',
                'name_en' => 'Phu Pha Man'
              ],
              [
                'code' =>'4021',
                'province_id' => '28',
                'name_th' => 'ซำสูง',
                'name_en' => 'Sam Sung'
              ],
              [
                'code' =>'4022',
                'province_id' => '28',
                'name_th' => 'โคกโพธิ์ไชย',
                'name_en' => 'Khok Pho Chai'
              ],
              [
                'code' =>'4023',
                'province_id' => '28',
                'name_th' => 'หนองนาคำ',
                'name_en' => 'Nong Na Kham'
              ],
              [
                'code' =>'4024',
                'province_id' => '28',
                'name_th' => 'บ้านแฮด',
                'name_en' => 'Ban Haet'
              ],
              [
                'code' =>'4025',
                'province_id' => '28',
                'name_th' => 'โนนศิลา',
                'name_en' => 'Non Sila'
              ],
              [
                'code' =>'4029',
                'province_id' => '28',
                'name_th' => 'เวียงเก่า',
                'name_en' => 'Wiang Kao'
              ],
              [
                'code' =>'4068',
                'province_id' => '28',
                'name_th' => 'ท้องถิ่นเทศบาลตำบลบ้านเป็ด*',
                'name_en' => 'Ban Pet*'
              ],
              [
                'code' =>'4098',
                'province_id' => '28',
                'name_th' => 'เทศบาลตำบลเมืองพล*',
                'name_en' => 'Tet Saban Tambon Muang Phon*'
              ],
              [
                'code' =>'4101',
                'province_id' => '29',
                'name_th' => 'เมืองอุดรธานี',
                'name_en' => 'Mueang Udon Thani'
              ],
              [
                'code' =>'4102',
                'province_id' => '29',
                'name_th' => 'กุดจับ',
                'name_en' => 'Kut Chap'
              ],
              [
                'code' =>'4103',
                'province_id' => '29',
                'name_th' => 'หนองวัวซอ',
                'name_en' => 'Nong Wua So'
              ],
              [
                'code' =>'4104',
                'province_id' => '29',
                'name_th' => 'กุมภวาปี',
                'name_en' => 'Kumphawapi'
              ],
              [
                'code' =>'4105',
                'province_id' => '29',
                'name_th' => 'โนนสะอาด',
                'name_en' => 'Non Sa-at'
              ],
              [
                'code' =>'4106',
                'province_id' => '29',
                'name_th' => 'หนองหาน',
                'name_en' => 'Nong Han'
              ],
              [
                'code' =>'4107',
                'province_id' => '29',
                'name_th' => 'ทุ่งฝน',
                'name_en' => 'Thung Fon'
              ],
              [
                'code' =>'4108',
                'province_id' => '29',
                'name_th' => 'ไชยวาน',
                'name_en' => 'Chai Wan'
              ],
              [
                'code' =>'4109',
                'province_id' => '29',
                'name_th' => 'ศรีธาตุ',
                'name_en' => 'Si That'
              ],
              [
                'code' =>'4110',
                'province_id' => '29',
                'name_th' => 'วังสามหมอ',
                'name_en' => 'Wang Sam Mo'
              ],
              [
                'code' =>'4111',
                'province_id' => '29',
                'name_th' => 'บ้านดุง',
                'name_en' => 'Ban Dung'
              ],
              [
                'code' =>'4112',
                'province_id' => '29',
                'name_th' => '*หนองบัวลำภู',
                'name_en' => '*Nong Bua Lam Phu'
              ],
              [
                'code' =>'4113',
                'province_id' => '29',
                'name_th' => '*ศรีบุญเรือง',
                'name_en' => '*Si Bun Rueang'
              ],
              [
                'code' =>'4114',
                'province_id' => '29',
                'name_th' => '*นากลาง',
                'name_en' => '*Na Klang'
              ],
              [
                'code' =>'4115',
                'province_id' => '29',
                'name_th' => '*สุวรรณคูหา',
                'name_en' => '*Suwannakhuha'
              ],
              [
                'code' =>'4116',
                'province_id' => '29',
                'name_th' => '*โนนสัง',
                'name_en' => '*Non Sang'
              ],
              [
                'code' =>'4117',
                'province_id' => '29',
                'name_th' => 'บ้านผือ',
                'name_en' => 'Ban Phue'
              ],
              [
                'code' =>'4118',
                'province_id' => '29',
                'name_th' => 'น้ำโสม',
                'name_en' => 'Nam Som'
              ],
              [
                'code' =>'4119',
                'province_id' => '29',
                'name_th' => 'เพ็ญ',
                'name_en' => 'Phen'
              ],
              [
                'code' =>'4120',
                'province_id' => '29',
                'name_th' => 'สร้างคอม',
                'name_en' => 'Sang Khom'
              ],
              [
                'code' =>'4121',
                'province_id' => '29',
                'name_th' => 'หนองแสง',
                'name_en' => 'Nong Saeng'
              ],
              [
                'code' =>'4122',
                'province_id' => '29',
                'name_th' => 'นายูง',
                'name_en' => 'Na Yung'
              ],
              [
                'code' =>'4123',
                'province_id' => '29',
                'name_th' => 'พิบูลย์รักษ์',
                'name_en' => 'Phibun Rak'
              ],
              [
                'code' =>'4124',
                'province_id' => '29',
                'name_th' => 'กู่แก้ว',
                'name_en' => 'Ku Kaeo'
              ],
              [
                'code' =>'4125',
                'province_id' => '29',
                'name_th' => 'ประจักษ์ศิลปาคม',
                'name_en' => 'rachak-sinlapakhom'
              ],
              [
                'code' =>'4201',
                'province_id' => '30',
                'name_th' => 'เมืองเลย',
                'name_en' => 'Mueang Loei'
              ],
              [
                'code' =>'4202',
                'province_id' => '30',
                'name_th' => 'นาด้วง',
                'name_en' => 'Na Duang'
              ],
              [
                'code' =>'4203',
                'province_id' => '30',
                'name_th' => 'เชียงคาน',
                'name_en' => 'Chiang Khan'
              ],
              [
                'code' =>'4204',
                'province_id' => '30',
                'name_th' => 'ปากชม',
                'name_en' => 'Pak Chom'
              ],
              [
                'code' =>'4205',
                'province_id' => '30',
                'name_th' => 'ด่านซ้าย',
                'name_en' => 'Dan Sai'
              ],
              [
                'code' =>'4206',
                'province_id' => '30',
                'name_th' => 'นาแห้ว',
                'name_en' => 'Na Haeo'
              ],
              [
                'code' =>'4207',
                'province_id' => '30',
                'name_th' => 'ภูเรือ',
                'name_en' => 'Phu Ruea'
              ],
              [
                'code' =>'4208',
                'province_id' => '30',
                'name_th' => 'ท่าลี่',
                'name_en' => 'Tha Li'
              ],
              [
                'code' =>'4209',
                'province_id' => '30',
                'name_th' => 'วังสะพุง',
                'name_en' => 'Wang Saphung'
              ],
              [
                'code' =>'4210',
                'province_id' => '30',
                'name_th' => 'ภูกระดึง',
                'name_en' => 'Phu Kradueng'
              ],
              [
                'code' =>'4211',
                'province_id' => '30',
                'name_th' => 'ภูหลวง',
                'name_en' => 'Phu Luang'
              ],
              [
                'code' =>'4212',
                'province_id' => '30',
                'name_th' => 'ผาขาว',
                'name_en' => 'Pha Khao'
              ],
              [
                'code' =>'4213',
                'province_id' => '30',
                'name_th' => 'เอราวัณ',
                'name_en' => 'Erawan'
              ],
              [
                'code' =>'4214',
                'province_id' => '30',
                'name_th' => 'หนองหิน',
                'name_en' => 'Nong Hin'
              ],
              [
                'code' =>'4301',
                'province_id' => '31',
                'name_th' => 'เมืองหนองคาย',
                'name_en' => 'Mueang Nong Khai'
              ],
              [
                'code' =>'4302',
                'province_id' => '31',
                'name_th' => 'ท่าบ่อ',
                'name_en' => 'Tha Bo'
              ],
              [
                'code' =>'4305',
                'province_id' => '31',
                'name_th' => 'โพนพิสัย',
                'name_en' => 'Phon Phisai'
              ],
              [
                'code' =>'4307',
                'province_id' => '31',
                'name_th' => 'ศรีเชียงใหม่',
                'name_en' => 'Si Chiang Mai'
              ],
              [
                'code' =>'4308',
                'province_id' => '31',
                'name_th' => 'สังคม',
                'name_en' => 'Sangkhom'
              ],
              [
                'code' =>'4314',
                'province_id' => '31',
                'name_th' => 'สระใคร',
                'name_en' => 'Sakhrai'
              ],
              [
                'code' =>'4315',
                'province_id' => '31',
                'name_th' => 'เฝ้าไร่',
                'name_en' => 'Fao Rai'
              ],
              [
                'code' =>'4316',
                'province_id' => '31',
                'name_th' => 'รัตนวาปี',
                'name_en' => 'Rattanawapi'
              ],
              [
                'code' =>'4317',
                'province_id' => '31',
                'name_th' => 'โพธิ์ตาก',
                'name_en' => 'Pho Tak'
              ],
              [
                'code' =>'4401',
                'province_id' => '32',
                'name_th' => 'เมืองมหาสารคาม',
                'name_en' => 'Mueang Maha Sarakham'
              ],
              [
                'code' =>'4402',
                'province_id' => '32',
                'name_th' => 'แกดำ',
                'name_en' => 'Kae Dam'
              ],
              [
                'code' =>'4403',
                'province_id' => '32',
                'name_th' => 'โกสุมพิสัย',
                'name_en' => 'Kosum Phisai'
              ],
              [
                'code' =>'4404',
                'province_id' => '32',
                'name_th' => 'กันทรวิชัย',
                'name_en' => 'Kantharawichai'
              ],
              [
                'code' =>'4405',
                'province_id' => '32',
                'name_th' => 'เชียงยืน',
                'name_en' => 'Kantharawichai'
              ],
              [
                'code' =>'4406',
                'province_id' => '32',
                'name_th' => 'บรบือ',
                'name_en' => 'Borabue'
              ],
              [
                'code' =>'4407',
                'province_id' => '32',
                'name_th' => 'นาเชือก',
                'name_en' => 'Na Chueak'
              ],
              [
                'code' =>'4408',
                'province_id' => '32',
                'name_th' => 'พยัคฆภูมิพิสัย',
                'name_en' => 'Phayakkhaphum Phisai'
              ],
              [
                'code' =>'4409',
                'province_id' => '32',
                'name_th' => 'วาปีปทุม',
                'name_en' => 'Wapi Pathum'
              ],
              [
                'code' =>'4410',
                'province_id' => '32',
                'name_th' => 'นาดูน',
                'name_en' => 'Na Dun'
              ],
              [
                'code' =>'4411',
                'province_id' => '32',
                'name_th' => 'ยางสีสุราช',
                'name_en' => 'Yang Sisurat'
              ],
              [
                'code' =>'4412',
                'province_id' => '32',
                'name_th' => 'กุดรัง',
                'name_en' => 'Kut Rang'
              ],
              [
                'code' =>'4413',
                'province_id' => '32',
                'name_th' => 'ชื่นชม',
                'name_en' => 'Chuen Chom'
              ],
              [
                'code' =>'4481',
                'province_id' => '32',
                'name_th' => '*หลุบ',
                'name_en' => '*Lub'
              ],
              [
                'code' =>'4501',
                'province_id' => '33',
                'name_th' => 'เมืองร้อยเอ็ด',
                'name_en' => 'Mueang Roi Et'
              ],
              [
                'code' =>'4502',
                'province_id' => '33',
                'name_th' => 'เกษตรวิสัย',
                'name_en' => 'Kaset Wisai'
              ],
              [
                'code' =>'4503',
                'province_id' => '33',
                'name_th' => 'ปทุมรัตต์',
                'name_en' => 'Pathum Rat'
              ],
              [
                'code' =>'4504',
                'province_id' => '33',
                'name_th' => 'จตุรพักตรพิมาน',
                'name_en' => 'Chaturaphak Phiman'
              ],
              [
                'code' =>'4505',
                'province_id' => '33',
                'name_th' => 'ธวัชบุรี',
                'name_en' => 'Thawat Buri'
              ],
              [
                'code' =>'4506',
                'province_id' => '33',
                'name_th' => 'พนมไพร',
                'name_en' => 'Phanom Phrai'
              ],
              [
                'code' =>'4507',
                'province_id' => '33',
                'name_th' => 'โพนทอง',
                'name_en' => 'Phon Thong'
              ],
              [
                'code' =>'4508',
                'province_id' => '33',
                'name_th' => 'โพธิ์ชัย',
                'name_en' => 'Pho Chai'
              ],
              [
                'code' =>'4509',
                'province_id' => '33',
                'name_th' => 'หนองพอก',
                'name_en' => 'Nong Phok'
              ],
              [
                'code' =>'4510',
                'province_id' => '33',
                'name_th' => 'เสลภูมิ',
                'name_en' => 'Selaphum'
              ],
              [
                'code' =>'4511',
                'province_id' => '33',
                'name_th' => 'สุวรรณภูมิ',
                'name_en' => 'Suwannaphum'
              ],
              [
                'code' =>'4512',
                'province_id' => '33',
                'name_th' => 'เมืองสรวง',
                'name_en' => 'Mueang Suang'
              ],
              [
                'code' =>'4513',
                'province_id' => '33',
                'name_th' => 'โพนทราย',
                'name_en' => 'Phon Sai'
              ],
              [
                'code' =>'4514',
                'province_id' => '33',
                'name_th' => 'อาจสามารถ',
                'name_en' => 'At Samat'
              ],
              [
                'code' =>'4515',
                'province_id' => '33',
                'name_th' => 'เมยวดี',
                'name_en' => 'Moei Wadi'
              ],
              [
                'code' =>'4516',
                'province_id' => '33',
                'name_th' => 'ศรีสมเด็จ',
                'name_en' => 'Si Somdet'
              ],
              [
                'code' =>'4517',
                'province_id' => '33',
                'name_th' => 'จังหาร',
                'name_en' => 'Changhan'
              ],
              [
                'code' =>'4518',
                'province_id' => '33',
                'name_th' => 'เชียงขวัญ',
                'name_en' => 'Chiang Khwan'
              ],
              [
                'code' =>'4519',
                'province_id' => '33',
                'name_th' => 'หนองฮี',
                'name_en' => 'Nong Hi'
              ],
              [
                'code' =>'4520',
                'province_id' => '33',
                'name_th' => 'ทุ่งเขาหลวง',
                'name_en' => 'Thung Khao Luangกิ่'
              ],
              [
                'code' =>'4601',
                'province_id' => '34',
                'name_th' => 'เมืองกาฬสินธุ์',
                'name_en' => 'Mueang Kalasin'
              ],
              [
                'code' =>'4602',
                'province_id' => '34',
                'name_th' => 'นามน',
                'name_en' => 'Na Mon'
              ],
              [
                'code' =>'4603',
                'province_id' => '34',
                'name_th' => 'กมลาไสย',
                'name_en' => 'Kamalasai'
              ],
              [
                'code' =>'4604',
                'province_id' => '34',
                'name_th' => 'ร่องคำ',
                'name_en' => 'Rong Kham'
              ],
              [
                'code' =>'4605',
                'province_id' => '34',
                'name_th' => 'กุฉินารายณ์',
                'name_en' => 'Kuchinarai'
              ],
              [
                'code' =>'4606',
                'province_id' => '34',
                'name_th' => 'เขาวง',
                'name_en' => 'Khao Wong'
              ],
              [
                'code' =>'4607',
                'province_id' => '34',
                'name_th' => 'ยางตลาด',
                'name_en' => 'Yang Talat'
              ],
              [
                'code' =>'4608',
                'province_id' => '34',
                'name_th' => 'ห้วยเม็ก',
                'name_en' => 'Huai Mek'
              ],
              [
                'code' =>'4609',
                'province_id' => '34',
                'name_th' => 'สหัสขันธ์',
                'name_en' => 'Sahatsakhan'
              ],
              [
                'code' =>'4610',
                'province_id' => '34',
                'name_th' => 'คำม่วง',
                'name_en' => 'Kham Muang'
              ],
              [
                'code' =>'4611',
                'province_id' => '34',
                'name_th' => 'ท่าคันโท',
                'name_en' => 'Tha Khantho'
              ],
              [
                'code' =>'4612',
                'province_id' => '34',
                'name_th' => 'หนองกุงศรี',
                'name_en' => 'Nong Kung Si'
              ],
              [
                'code' =>'4613',
                'province_id' => '34',
                'name_th' => 'สมเด็จ',
                'name_en' => 'Somdet'
              ],
              [
                'code' =>'4614',
                'province_id' => '34',
                'name_th' => 'ห้วยผึ้ง',
                'name_en' => 'Huai Phueng'
              ],
              [
                'code' =>'4615',
                'province_id' => '34',
                'name_th' => 'สามชัย',
                'name_en' => 'Sam Chai'
              ],
              [
                'code' =>'4616',
                'province_id' => '34',
                'name_th' => 'นาคู',
                'name_en' => 'Na Khu'
              ],
              [
                'code' =>'4617',
                'province_id' => '34',
                'name_th' => 'ดอนจาน',
                'name_en' => 'Don Chan'
              ],
              [
                'code' =>'4618',
                'province_id' => '34',
                'name_th' => 'ฆ้องชัย',
                'name_en' => 'Khong Chai'
              ],
              [
                'code' =>'4701',
                'province_id' => '35',
                'name_th' => 'เมืองสกลนคร',
                'name_en' => 'Mueang Sakon Nakhon'
              ],
              [
                'code' =>'4702',
                'province_id' => '35',
                'name_th' => 'กุสุมาลย์',
                'name_en' => 'Kusuman'
              ],
              [
                'code' =>'4703',
                'province_id' => '35',
                'name_th' => 'กุดบาก',
                'name_en' => 'Kut Bak'
              ],
              [
                'code' =>'4704',
                'province_id' => '35',
                'name_th' => 'พรรณานิคม',
                'name_en' => 'Phanna Nikhom'
              ],
              [
                'code' =>'4705',
                'province_id' => '35',
                'name_th' => 'พังโคน',
                'name_en' => 'Phang Khon'
              ],
              [
                'code' =>'4706',
                'province_id' => '35',
                'name_th' => 'วาริชภูมิ',
                'name_en' => 'Waritchaphum'
              ],
              [
                'code' =>'4707',
                'province_id' => '35',
                'name_th' => 'นิคมน้ำอูน',
                'name_en' => 'Nikhom Nam Un'
              ],
              [
                'code' =>'4708',
                'province_id' => '35',
                'name_th' => 'วานรนิวาส',
                'name_en' => 'Wanon Niwat'
              ],
              [
                'code' =>'4709',
                'province_id' => '35',
                'name_th' => 'คำตากล้า',
                'name_en' => 'Kham Ta Kla'
              ],
              [
                'code' =>'4710',
                'province_id' => '35',
                'name_th' => 'บ้านม่วง',
                'name_en' => 'Ban Muang'
              ],
              [
                'code' =>'4711',
                'province_id' => '35',
                'name_th' => 'อากาศอำนวย',
                'name_en' => 'Akat Amnuai'
              ],
              [
                'code' =>'4712',
                'province_id' => '35',
                'name_th' => 'สว่างแดนดิน',
                'name_en' => 'Sawang Daen Din'
              ],
              [
                'code' =>'4713',
                'province_id' => '35',
                'name_th' => 'ส่องดาว',
                'name_en' => 'Song Dao'
              ],
              [
                'code' =>'4714',
                'province_id' => '35',
                'name_th' => 'เต่างอย',
                'name_en' => 'Tao Ngoi'
              ],
              [
                'code' =>'4715',
                'province_id' => '35',
                'name_th' => 'โคกศรีสุพรรณ',
                'name_en' => 'Khok Si Suphan'
              ],
              [
                'code' =>'4716',
                'province_id' => '35',
                'name_th' => 'เจริญศิลป์',
                'name_en' => 'Charoen Sin'
              ],
              [
                'code' =>'4717',
                'province_id' => '35',
                'name_th' => 'โพนนาแก้ว',
                'name_en' => 'Phon Na Kaeo'
              ],
              [
                'code' =>'4718',
                'province_id' => '35',
                'name_th' => 'ภูพาน',
                'name_en' => 'Phu Phan'
              ],
              [
                'code' =>'4751',
                'province_id' => '35',
                'name_th' => 'วานรนิวาส (สาขาตำบลกุดเรือคำ)*',
                'name_en' => 'Wanon Niwat'
              ],
              [
                'code' =>'4781',
                'province_id' => '35',
                'name_th' => '*อ.บ้านหัน จ.สกลนคร',
                'name_en' => '*Banhan'
              ],
              [
                'code' =>'4801',
                'province_id' => '36',
                'name_th' => 'เมืองนครพนม',
                'name_en' => 'Mueang Nakhon Phanom'
              ],
              [
                'code' =>'4802',
                'province_id' => '36',
                'name_th' => 'ปลาปาก',
                'name_en' => 'Pla Pak'
              ],
              [
                'code' =>'4803',
                'province_id' => '36',
                'name_th' => 'ท่าอุเทน',
                'name_en' => 'Tha Uthen'
              ],
              [
                'code' =>'4804',
                'province_id' => '36',
                'name_th' => 'บ้านแพง',
                'name_en' => 'Ban Phaeng'
              ],
              [
                'code' =>'4805',
                'province_id' => '36',
                'name_th' => 'ธาตุพนม',
                'name_en' => 'That Phanom'
              ],
              [
                'code' =>'4806',
                'province_id' => '36',
                'name_th' => 'เรณูนคร',
                'name_en' => 'Renu Nakhon'
              ],
              [
                'code' =>'4807',
                'province_id' => '36',
                'name_th' => 'นาแก',
                'name_en' => 'Na Kae'
              ],
              [
                'code' =>'4808',
                'province_id' => '36',
                'name_th' => 'ศรีสงคราม',
                'name_en' => 'Si Songkhram'
              ],
              [
                'code' =>'4809',
                'province_id' => '36',
                'name_th' => 'นาหว้า',
                'name_en' => 'Na Wa'
              ],
              [
                'code' =>'4810',
                'province_id' => '36',
                'name_th' => 'โพนสวรรค์',
                'name_en' => 'Phon Sawan'
              ],
              [
                'code' =>'4811',
                'province_id' => '36',
                'name_th' => 'นาทม',
                'name_en' => 'Na Thom'
              ],
              [
                'code' =>'4812',
                'province_id' => '36',
                'name_th' => 'วังยาง',
                'name_en' => 'Wang Yang'
              ],
              [
                'code' =>'4901',
                'province_id' => '37',
                'name_th' => 'เมืองมุกดาหาร',
                'name_en' => 'Mueang Mukdahan'
              ],
              [
                'code' =>'4902',
                'province_id' => '37',
                'name_th' => 'นิคมคำสร้อย',
                'name_en' => 'Nikhom Kham Soi'
              ],
              [
                'code' =>'4903',
                'province_id' => '37',
                'name_th' => 'ดอนตาล',
                'name_en' => 'Don Tan'
              ],
              [
                'code' =>'4904',
                'province_id' => '37',
                'name_th' => 'ดงหลวง',
                'name_en' => 'Dong Luang'
              ],
              [
                'code' =>'4905',
                'province_id' => '37',
                'name_th' => 'คำชะอี',
                'name_en' => 'Khamcha-i'
              ],
              [
                'code' =>'4906',
                'province_id' => '37',
                'name_th' => 'หว้านใหญ่',
                'name_en' => 'Wan Yai'
              ],
              [
                'code' =>'4907',
                'province_id' => '37',
                'name_th' => 'หนองสูง',
                'name_en' => 'Nong Sung'
              ],
              [
                'code' =>'5001',
                'province_id' => '38',
                'name_th' => 'เมืองเชียงใหม่',
                'name_en' => 'Mueang Chiang Mai'
              ],
              [
                'code' =>'5002',
                'province_id' => '38',
                'name_th' => 'จอมทอง',
                'name_en' => 'Chom Thong'
              ],
              [
                'code' =>'5003',
                'province_id' => '38',
                'name_th' => 'แม่แจ่ม',
                'name_en' => 'Mae Chaem'
              ],
              [
                'code' =>'5004',
                'province_id' => '38',
                'name_th' => 'เชียงดาว',
                'name_en' => 'Chiang Dao'
              ],
              [
                'code' =>'5005',
                'province_id' => '38',
                'name_th' => 'ดอยสะเก็ด',
                'name_en' => 'Doi Saket'
              ],
              [
                'code' =>'5006',
                'province_id' => '38',
                'name_th' => 'แม่แตง',
                'name_en' => 'Mae Taeng'
              ],
              [
                'code' =>'5007',
                'province_id' => '38',
                'name_th' => 'แม่ริม',
                'name_en' => 'Mae Rim'
              ],
              [
                'code' =>'5008',
                'province_id' => '38',
                'name_th' => 'สะเมิง',
                'name_en' => 'Samoeng'
              ],
              [
                'code' =>'5009',
                'province_id' => '38',
                'name_th' => 'ฝาง',
                'name_en' => 'Fang'
              ],
              [
                'code' =>'5010',
                'province_id' => '38',
                'name_th' => 'แม่อาย',
                'name_en' => 'Mae Ai'
              ],
              [
                'code' =>'5011',
                'province_id' => '38',
                'name_th' => 'พร้าว',
                'name_en' => 'Phrao'
              ],
              [
                'code' =>'5012',
                'province_id' => '38',
                'name_th' => 'สันป่าตอง',
                'name_en' => 'San Pa Tong'
              ],
              [
                'code' =>'5013',
                'province_id' => '38',
                'name_th' => 'สันกำแพง',
                'name_en' => 'San Kamphaeng'
              ],
              [
                'code' =>'5014',
                'province_id' => '38',
                'name_th' => 'สันทราย',
                'name_en' => 'San Sai'
              ],
              [
                'code' =>'5015',
                'province_id' => '38',
                'name_th' => 'หางดง',
                'name_en' => 'Hang Dong'
              ],
              [
                'code' =>'5016',
                'province_id' => '38',
                'name_th' => 'ฮอด',
                'name_en' => 'Hot'
              ],
              [
                'code' =>'5017',
                'province_id' => '38',
                'name_th' => 'ดอยเต่า',
                'name_en' => 'Doi Tao'
              ],
              [
                'code' =>'5018',
                'province_id' => '38',
                'name_th' => 'อมก๋อย',
                'name_en' => 'Omkoi'
              ],
              [
                'code' =>'5019',
                'province_id' => '38',
                'name_th' => 'สารภี',
                'name_en' => 'Saraphi'
              ],
              [
                'code' =>'5020',
                'province_id' => '38',
                'name_th' => 'เวียงแหง',
                'name_en' => 'Wiang Haeng'
              ],
              [
                'code' =>'5021',
                'province_id' => '38',
                'name_th' => 'ไชยปราการ',
                'name_en' => 'Chai Prakan'
              ],
              [
                'code' =>'5022',
                'province_id' => '38',
                'name_th' => 'แม่วาง',
                'name_en' => 'Mae Wang'
              ],
              [
                'code' =>'5023',
                'province_id' => '38',
                'name_th' => 'แม่ออน',
                'name_en' => 'Mae On'
              ],
              [
                'code' =>'5024',
                'province_id' => '38',
                'name_th' => 'ดอยหล่อ',
                'name_en' => 'Doi Lo'
              ],
              [
                'code' =>'5051',
                'province_id' => '38',
                'name_th' => 'เทศบาลนครเชียงใหม่ (สาขาแขวงกาลวิละ)*',
                'name_en' => 'Tet Saban Nakorn Chiangmai(Kan lawi la)*'
              ],
              [
                'code' =>'5052',
                'province_id' => '38',
                'name_th' => 'เทศบาลนครเชียงใหม่ (สาขาแขวงศรีวิชั)*',
                'name_en' => 'Tet Saban Nakorn Chiangmai(Sri Wi)*'
              ],
              [
                'code' =>'5053',
                'province_id' => '38',
                'name_th' => 'เทศบาลนครเชียงใหม่ (สาขาเม็งราย)*',
                'name_en' => 'Tet Saban Nakorn Chiangmai(Meng Rai)*'
              ],
              [
                'code' =>'5101',
                'province_id' => '39',
                'name_th' => 'เมืองลำพูน',
                'name_en' => 'Mueang Lamphun'
              ],
              [
                'code' =>'5102',
                'province_id' => '39',
                'name_th' => 'แม่ทา',
                'name_en' => 'Mae Tha'
              ],
              [
                'code' =>'5103',
                'province_id' => '39',
                'name_th' => 'บ้านโฮ่ง',
                'name_en' => 'Ban Hong'
              ],
              [
                'code' =>'5104',
                'province_id' => '39',
                'name_th' => 'ลี้',
                'name_en' => 'Li'
              ],
              [
                'code' =>'5105',
                'province_id' => '39',
                'name_th' => 'ทุ่งหัวช้าง',
                'name_en' => 'Thung Hua Chang'
              ],
              [
                'code' =>'5106',
                'province_id' => '39',
                'name_th' => 'ป่าซาง',
                'name_en' => 'Pa Sang'
              ],
              [
                'code' =>'5107',
                'province_id' => '39',
                'name_th' => 'บ้านธิ',
                'name_en' => 'Ban Thi'
              ],
              [
                'code' =>'5108',
                'province_id' => '39',
                'name_th' => 'เวียงหนองล่อง',
                'name_en' => 'Wiang Nong Long'
              ],
              [
                'code' =>'5201',
                'province_id' => '40',
                'name_th' => 'เมืองลำปาง',
                'name_en' => 'Mueang Lampang'
              ],
              [
                'code' =>'5202',
                'province_id' => '40',
                'name_th' => 'แม่เมาะ',
                'name_en' => 'Mae Mo'
              ],
              [
                'code' =>'5203',
                'province_id' => '40',
                'name_th' => 'เกาะคา',
                'name_en' => 'Ko Kha'
              ],
              [
                'code' =>'5204',
                'province_id' => '40',
                'name_th' => 'เสริมงาม',
                'name_en' => 'Soem Ngam'
              ],
              [
                'code' =>'5205',
                'province_id' => '40',
                'name_th' => 'งาว',
                'name_en' => 'Ngao'
              ],
              [
                'code' =>'5206',
                'province_id' => '40',
                'name_th' => 'แจ้ห่ม',
                'name_en' => 'Chae Hom'
              ],
              [
                'code' =>'5207',
                'province_id' => '40',
                'name_th' => 'วังเหนือ',
                'name_en' => 'Wang Nuea'
              ],
              [
                'code' =>'5208',
                'province_id' => '40',
                'name_th' => 'เถิน',
                'name_en' => 'Thoen'
              ],
              [
                'code' =>'5209',
                'province_id' => '40',
                'name_th' => 'แม่พริก',
                'name_en' => 'Mae Phrik'
              ],
              [
                'code' =>'5210',
                'province_id' => '40',
                'name_th' => 'แม่ทะ',
                'name_en' => 'Mae Tha'
              ],
              [
                'code' =>'5211',
                'province_id' => '40',
                'name_th' => 'สบปราบ',
                'name_en' => 'Sop Prap'
              ],
              [
                'code' =>'5212',
                'province_id' => '40',
                'name_th' => 'ห้างฉัตร',
                'name_en' => 'Hang Chat'
              ],
              [
                'code' =>'5213',
                'province_id' => '40',
                'name_th' => 'เมืองปาน',
                'name_en' => 'Mueang Pan'
              ],
              [
                'code' =>'5301',
                'province_id' => '41',
                'name_th' => 'เมืองอุตรดิตถ์',
                'name_en' => 'Mueang Uttaradit'
              ],
              [
                'code' =>'5302',
                'province_id' => '41',
                'name_th' => 'ตรอน',
                'name_en' => 'Tron'
              ],
              [
                'code' =>'5303',
                'province_id' => '41',
                'name_th' => 'ท่าปลา',
                'name_en' => 'Tha Pla'
              ],
              [
                'code' =>'5304',
                'province_id' => '41',
                'name_th' => 'น้ำปาด',
                'name_en' => 'Nam Pat'
              ],
              [
                'code' =>'5305',
                'province_id' => '41',
                'name_th' => 'ฟากท่า',
                'name_en' => 'Fak Tha'
              ],
              [
                'code' =>'5306',
                'province_id' => '41',
                'name_th' => 'บ้านโคก',
                'name_en' => 'Ban Khok'
              ],
              [
                'code' =>'5307',
                'province_id' => '41',
                'name_th' => 'พิชัย',
                'name_en' => 'Phichai'
              ],
              [
                'code' =>'5308',
                'province_id' => '41',
                'name_th' => 'ลับแล',
                'name_en' => 'Laplae'
              ],
              [
                'code' =>'5309',
                'province_id' => '41',
                'name_th' => 'ทองแสนขัน',
                'name_en' => 'Thong Saen Khan'
              ],
              [
                'code' =>'5401',
                'province_id' => '42',
                'name_th' => 'เมืองแพร่',
                'name_en' => 'Mueang Phrae'
              ],
              [
                'code' =>'5402',
                'province_id' => '42',
                'name_th' => 'ร้องกวาง',
                'name_en' => 'Rong Kwang'
              ],
              [
                'code' =>'5403',
                'province_id' => '42',
                'name_th' => 'ลอง',
                'name_en' => 'Long'
              ],
              [
                'code' =>'5404',
                'province_id' => '42',
                'name_th' => 'สูงเม่น',
                'name_en' => 'Sung Men'
              ],
              [
                'code' =>'5405',
                'province_id' => '42',
                'name_th' => 'เด่นชัย',
                'name_en' => 'Den Chai'
              ],
              [
                'code' =>'5406',
                'province_id' => '42',
                'name_th' => 'สอง',
                'name_en' => 'Song'
              ],
              [
                'code' =>'5407',
                'province_id' => '42',
                'name_th' => 'วังชิ้น',
                'name_en' => 'Wang Chin'
              ],
              [
                'code' =>'5408',
                'province_id' => '42',
                'name_th' => 'หนองม่วงไข่',
                'name_en' => 'Nong Muang Khai'
              ],
              [
                'code' =>'5501',
                'province_id' => '43',
                'name_th' => 'เมืองน่าน',
                'name_en' => 'Mueang Nan'
              ],
              [
                'code' =>'5502',
                'province_id' => '43',
                'name_th' => 'แม่จริม',
                'name_en' => 'Mae Charim'
              ],
              [
                'code' =>'5503',
                'province_id' => '43',
                'name_th' => 'บ้านหลวง',
                'name_en' => 'Ban Luang'
              ],
              [
                'code' =>'5504',
                'province_id' => '43',
                'name_th' => 'นาน้อย',
                'name_en' => 'Na Noi'
              ],
              [
                'code' =>'5505',
                'province_id' => '43',
                'name_th' => 'ปัว',
                'name_en' => 'Pua'
              ],
              [
                'code' =>'5506',
                'province_id' => '43',
                'name_th' => 'ท่าวังผา',
                'name_en' => 'Tha Wang Pha'
              ],
              [
                'code' =>'5507',
                'province_id' => '43',
                'name_th' => 'เวียงสา',
                'name_en' => 'Wiang Sa'
              ],
              [
                'code' =>'5508',
                'province_id' => '43',
                'name_th' => 'ทุ่งช้าง',
                'name_en' => 'Thung Chang'
              ],
              [
                'code' =>'5509',
                'province_id' => '43',
                'name_th' => 'เชียงกลาง',
                'name_en' => 'Chiang Klang'
              ],
              [
                'code' =>'5510',
                'province_id' => '43',
                'name_th' => 'นาหมื่น',
                'name_en' => 'Na Muen'
              ],
              [
                'code' =>'5511',
                'province_id' => '43',
                'name_th' => 'สันติสุข',
                'name_en' => 'Santi Suk'
              ],
              [
                'code' =>'5512',
                'province_id' => '43',
                'name_th' => 'บ่อเกลือ',
                'name_en' => 'Bo Kluea'
              ],
              [
                'code' =>'5513',
                'province_id' => '43',
                'name_th' => 'สองแคว',
                'name_en' => 'Song Khwae'
              ],
              [
                'code' =>'5514',
                'province_id' => '43',
                'name_th' => 'ภูเพียง',
                'name_en' => 'Phu Phiang'
              ],
              [
                'code' =>'5515',
                'province_id' => '43',
                'name_th' => 'เฉลิมพระเกียรติ',
                'name_en' => 'Chaloem Phra Kiat'
              ],
              [
                'code' =>'5601',
                'province_id' => '44',
                'name_th' => 'เมืองพะเยา',
                'name_en' => 'Mueang Phayao'
              ],
              [
                'code' =>'5602',
                'province_id' => '44',
                'name_th' => 'จุน',
                'name_en' => 'Chun'
              ],
              [
                'code' =>'5603',
                'province_id' => '44',
                'name_th' => 'เชียงคำ',
                'name_en' => 'Chiang Kham'
              ],
              [
                'code' =>'5604',
                'province_id' => '44',
                'name_th' => 'เชียงม่วน',
                'name_en' => 'Chiang Muan'
              ],
              [
                'code' =>'5605',
                'province_id' => '44',
                'name_th' => 'ดอกคำใต้',
                'name_en' => 'Dok Khamtai'
              ],
              [
                'code' =>'5606',
                'province_id' => '44',
                'name_th' => 'ปง',
                'name_en' => 'Pong'
              ],
              [
                'code' =>'5607',
                'province_id' => '44',
                'name_th' => 'แม่ใจ',
                'name_en' => 'Mae Chai'
              ],
              [
                'code' =>'5608',
                'province_id' => '44',
                'name_th' => 'ภูซาง',
                'name_en' => 'Phu Sang'
              ],
              [
                'code' =>'5609',
                'province_id' => '44',
                'name_th' => 'ภูกามยาว',
                'name_en' => 'Phu Kamyao'
              ],
              [
                'code' =>'5701',
                'province_id' => '45',
                'name_th' => 'เมืองเชียงราย',
                'name_en' => 'Mueang Chiang Rai'
              ],
              [
                'code' =>'5702',
                'province_id' => '45',
                'name_th' => 'เวียงชัย',
                'name_en' => 'Wiang Chai'
              ],
              [
                'code' =>'5703',
                'province_id' => '45',
                'name_th' => 'เชียงของ',
                'name_en' => 'Chiang Khong'
              ],
              [
                'code' =>'5704',
                'province_id' => '45',
                'name_th' => 'เทิง',
                'name_en' => 'Thoeng'
              ],
              [
                'code' =>'5705',
                'province_id' => '45',
                'name_th' => 'พาน',
                'name_en' => 'Phan'
              ],
              [
                'code' =>'5706',
                'province_id' => '45',
                'name_th' => 'ป่าแดด',
                'name_en' => 'Pa Daet'
              ],
              [
                'code' =>'5707',
                'province_id' => '45',
                'name_th' => 'แม่จัน',
                'name_en' => 'Mae Chan'
              ],
              [
                'code' =>'5708',
                'province_id' => '45',
                'name_th' => 'เชียงแสน',
                'name_en' => 'Chiang Saen'
              ],
              [
                'code' =>'5709',
                'province_id' => '45',
                'name_th' => 'แม่สาย',
                'name_en' => 'Mae Sai'
              ],
              [
                'code' =>'5710',
                'province_id' => '45',
                'name_th' => 'แม่สรวย',
                'name_en' => 'Mae Suai'
              ],
              [
                'code' =>'5711',
                'province_id' => '45',
                'name_th' => 'เวียงป่าเป้า',
                'name_en' => 'Wiang Pa Pao'
              ],
              [
                'code' =>'5712',
                'province_id' => '45',
                'name_th' => 'พญาเม็งราย',
                'name_en' => 'Phaya Mengrai'
              ],
              [
                'code' =>'5713',
                'province_id' => '45',
                'name_th' => 'เวียงแก่น',
                'name_en' => 'Wiang Kaen'
              ],
              [
                'code' =>'5714',
                'province_id' => '45',
                'name_th' => 'ขุนตาล',
                'name_en' => 'Khun Tan'
              ],
              [
                'code' =>'5715',
                'province_id' => '45',
                'name_th' => 'แม่ฟ้าหลวง',
                'name_en' => 'Mae Fa Luang'
              ],
              [
                'code' =>'5716',
                'province_id' => '45',
                'name_th' => 'แม่ลาว',
                'name_en' => 'Mae Lao'
              ],
              [
                'code' =>'5717',
                'province_id' => '45',
                'name_th' => 'เวียงเชียงรุ้ง',
                'name_en' => 'Wiang Chiang Rung'
              ],
              [
                'code' =>'5718',
                'province_id' => '45',
                'name_th' => 'ดอยหลวง',
                'name_en' => 'Doi Luang'
              ],
              [
                'code' =>'5801',
                'province_id' => '46',
                'name_th' => 'เมืองแม่ฮ่องสอน',
                'name_en' => 'Mueang Mae Hong Son'
              ],
              [
                'code' =>'5802',
                'province_id' => '46',
                'name_th' => 'ขุนยวม',
                'name_en' => 'Khun Yuam'
              ],
              [
                'code' =>'5803',
                'province_id' => '46',
                'name_th' => 'ปาย',
                'name_en' => 'Pai'
              ],
              [
                'code' =>'5804',
                'province_id' => '46',
                'name_th' => 'แม่สะเรียง',
                'name_en' => 'Mae Sariang'
              ],
              [
                'code' =>'5805',
                'province_id' => '46',
                'name_th' => 'แม่ลาน้อย',
                'name_en' => 'Mae La Noi'
              ],
              [
                'code' =>'5806',
                'province_id' => '46',
                'name_th' => 'สบเมย',
                'name_en' => 'Sop Moei'
              ],
              [
                'code' =>'5807',
                'province_id' => '46',
                'name_th' => 'ปางมะผ้า',
                'name_en' => 'Pang Mapha'
              ],
              [
                'code' =>'5881',
                'province_id' => '46',
                'name_th' => '*อ.ม่วยต่อ จ.แม่ฮ่องสอน',
                'name_en' => 'Muen Tor'
              ],
              [
                'code' =>'6001',
                'province_id' => '47',
                'name_th' => 'เมืองนครสวรรค์',
                'name_en' => 'Mueang Nakhon Sawan'
              ],
              [
                'code' =>'6002',
                'province_id' => '47',
                'name_th' => 'โกรกพระ',
                'name_en' => 'Krok Phra'
              ],
              [
                'code' =>'6003',
                'province_id' => '47',
                'name_th' => 'ชุมแสง',
                'name_en' => 'Chum Saeng'
              ],
              [
                'code' =>'6004',
                'province_id' => '47',
                'name_th' => 'หนองบัว',
                'name_en' => 'Nong Bua'
              ],
              [
                'code' =>'6005',
                'province_id' => '47',
                'name_th' => 'บรรพตพิสัย',
                'name_en' => 'Banphot Phisai'
              ],
              [
                'code' =>'6006',
                'province_id' => '47',
                'name_th' => 'เก้าเลี้ยว',
                'name_en' => 'Kao Liao'
              ],
              [
                'code' =>'6007',
                'province_id' => '47',
                'name_th' => 'ตาคลี',
                'name_en' => 'Takhli'
              ],
              [
                'code' =>'6008',
                'province_id' => '47',
                'name_th' => 'ท่าตะโก',
                'name_en' => 'Takhli'
              ],
              [
                'code' =>'6009',
                'province_id' => '47',
                'name_th' => 'ไพศาลี',
                'name_en' => 'Phaisali'
              ],
              [
                'code' =>'6010',
                'province_id' => '47',
                'name_th' => 'พยุหะคีรี',
                'name_en' => 'Phayuha Khiri'
              ],
              [
                'code' =>'6011',
                'province_id' => '47',
                'name_th' => 'ลาดยาว',
                'name_en' => 'Phayuha Khiri'
              ],
              [
                'code' =>'6012',
                'province_id' => '47',
                'name_th' => 'ตากฟ้า',
                'name_en' => 'Tak Fa'
              ],
              [
                'code' =>'6013',
                'province_id' => '47',
                'name_th' => 'แม่วงก์',
                'name_en' => 'Mae Wong'
              ],
              [
                'code' =>'6014',
                'province_id' => '47',
                'name_th' => 'แม่เปิน',
                'name_en' => 'Mae Poen'
              ],
              [
                'code' =>'6015',
                'province_id' => '47',
                'name_th' => 'ชุมตาบง',
                'name_en' => 'Chum Ta Bong'
              ],
              [
                'code' =>'6051',
                'province_id' => '47',
                'name_th' => 'สาขาตำบลห้วยน้ำหอม*',
                'name_en' => 'Huen Nam Hom'
              ],
              [
                'code' =>'6052',
                'province_id' => '47',
                'name_th' => 'กิ่งอำเภอชุมตาบง (สาขาตำบลชุมตาบง)*',
                'name_en' => 'Chum Ta Bong'
              ],
              [
                'code' =>'6053',
                'province_id' => '47',
                'name_th' => 'แม่วงก์ (สาขาตำบลแม่เล่ย์)*',
                'name_en' => 'Mea Ley'
              ],
              [
                'code' =>'6101',
                'province_id' => '48',
                'name_th' => 'เมืองอุทัยธานี',
                'name_en' => 'Mueang Uthai Thani'
              ],
              [
                'code' =>'6102',
                'province_id' => '48',
                'name_th' => 'ทัพทัน',
                'name_en' => 'Thap Than'
              ],
              [
                'code' =>'6103',
                'province_id' => '48',
                'name_th' => 'สว่างอารมณ์',
                'name_en' => 'Sawang Arom'
              ],
              [
                'code' =>'6104',
                'province_id' => '48',
                'name_th' => 'หนองฉาง',
                'name_en' => 'Nong Chang'
              ],
              [
                'code' =>'6105',
                'province_id' => '48',
                'name_th' => 'หนองขาหย่าง',
                'name_en' => 'Nong Khayang'
              ],
              [
                'code' =>'6106',
                'province_id' => '48',
                'name_th' => 'บ้านไร่',
                'name_en' => 'Ban Rai'
              ],
              [
                'code' =>'6107',
                'province_id' => '48',
                'name_th' => 'ลานสัก',
                'name_en' => 'Lan Sak'
              ],
              [
                'code' =>'6108',
                'province_id' => '48',
                'name_th' => 'ห้วยคต',
                'name_en' => 'Huai Khot'
              ],
              [
                'code' =>'6201',
                'province_id' => '49',
                'name_th' => 'เมืองกำแพงเพชร',
                'name_en' => 'Mueang Kamphaeng Phet'
              ],
              [
                'code' =>'6202',
                'province_id' => '49',
                'name_th' => 'ไทรงาม',
                'name_en' => 'Sai Ngam'
              ],
              [
                'code' =>'6203',
                'province_id' => '49',
                'name_th' => 'คลองลาน',
                'name_en' => 'Khlong Lan'
              ],
              [
                'code' =>'6204',
                'province_id' => '49',
                'name_th' => 'ขาณุวรลักษบุรี',
                'name_en' => 'Khanu Woralaksaburi'
              ],
              [
                'code' =>'6205',
                'province_id' => '49',
                'name_th' => 'คลองขลุง',
                'name_en' => 'Khlong Khlung'
              ],
              [
                'code' =>'6206',
                'province_id' => '49',
                'name_th' => 'พรานกระต่าย',
                'name_en' => 'Phran Kratai'
              ],
              [
                'code' =>'6207',
                'province_id' => '49',
                'name_th' => 'ลานกระบือ',
                'name_en' => 'Lan Krabue'
              ],
              [
                'code' =>'6208',
                'province_id' => '49',
                'name_th' => 'ทรายทองวัฒนา',
                'name_en' => 'Sai Thong Watthana'
              ],
              [
                'code' =>'6209',
                'province_id' => '49',
                'name_th' => 'ปางศิลาทอง',
                'name_en' => 'Pang Sila Thong'
              ],
              [
                'code' =>'6210',
                'province_id' => '49',
                'name_th' => 'บึงสามัคคี',
                'name_en' => 'Bueng Samakkhi'
              ],
              [
                'code' =>'6211',
                'province_id' => '49',
                'name_th' => 'โกสัมพีนคร',
                'name_en' => 'Kosamphi Nakhon'
              ],
              [
                'code' =>'6301',
                'province_id' => '50',
                'name_th' => 'เมืองตาก',
                'name_en' => 'Mueang Tak'
              ],
              [
                'code' =>'6302',
                'province_id' => '50',
                'name_th' => 'บ้านตาก',
                'name_en' => 'Ban Tak'
              ],
              [
                'code' =>'6303',
                'province_id' => '50',
                'name_th' => 'สามเงา',
                'name_en' => 'Sam Ngao'
              ],
              [
                'code' =>'6304',
                'province_id' => '50',
                'name_th' => 'แม่ระมาด',
                'name_en' => 'Mae Ramat'
              ],
              [
                'code' =>'6305',
                'province_id' => '50',
                'name_th' => 'ท่าสองยาง',
                'name_en' => 'Tha Song Yang'
              ],
              [
                'code' =>'6306',
                'province_id' => '50',
                'name_th' => 'แม่สอด',
                'name_en' => 'Mae Sot'
              ],
              [
                'code' =>'6307',
                'province_id' => '50',
                'name_th' => 'พบพระ',
                'name_en' => 'Phop Phra'
              ],
              [
                'code' =>'6308',
                'province_id' => '50',
                'name_th' => 'อุ้มผาง',
                'name_en' => 'Umphang'
              ],
              [
                'code' =>'6309',
                'province_id' => '50',
                'name_th' => 'วังเจ้า',
                'name_en' => 'Wang Chao'
              ],
              [
                'code' =>'6381',
                'province_id' => '50',
                'name_th' => '*กิ่ง อ.ท่าปุย จ.ตาก',
                'name_en' => '*King Ta Pui'
              ],
              [
                'code' =>'6401',
                'province_id' => '51',
                'name_th' => 'เมืองสุโขทัย',
                'name_en' => 'Mueang Sukhothai'
              ],
              [
                'code' =>'6402',
                'province_id' => '51',
                'name_th' => 'บ้านด่านลานหอย',
                'name_en' => 'Ban Dan Lan Hoi'
              ],
              [
                'code' =>'6403',
                'province_id' => '51',
                'name_th' => 'คีรีมาศ',
                'name_en' => 'Khiri Mat'
              ],
              [
                'code' =>'6404',
                'province_id' => '51',
                'name_th' => 'กงไกรลาศ',
                'name_en' => 'Kong Krailat'
              ],
              [
                'code' =>'6405',
                'province_id' => '51',
                'name_th' => 'ศรีสัชนาลัย',
                'name_en' => 'Si Satchanalai'
              ],
              [
                'code' =>'6406',
                'province_id' => '51',
                'name_th' => 'ศรีสำโรง',
                'name_en' => 'Si Samrong'
              ],
              [
                'code' =>'6407',
                'province_id' => '51',
                'name_th' => 'สวรรคโลก',
                'name_en' => 'Sawankhalok'
              ],
              [
                'code' =>'6408',
                'province_id' => '51',
                'name_th' => 'ศรีนคร',
                'name_en' => 'Si Nakhon'
              ],
              [
                'code' =>'6409',
                'province_id' => '51',
                'name_th' => 'ทุ่งเสลี่ยม',
                'name_en' => 'Thung Saliam'
              ],
              [
                'code' =>'6501',
                'province_id' => '52',
                'name_th' => 'เมืองพิษณุโลก',
                'name_en' => 'Mueang Phitsanulok'
              ],
              [
                'code' =>'6502',
                'province_id' => '52',
                'name_th' => 'นครไทย',
                'name_en' => 'Nakhon Thai'
              ],
              [
                'code' =>'6503',
                'province_id' => '52',
                'name_th' => 'ชาติตระการ',
                'name_en' => 'Chat Trakan'
              ],
              [
                'code' =>'6504',
                'province_id' => '52',
                'name_th' => 'บางระกำ',
                'name_en' => 'Bang Rakam'
              ],
              [
                'code' =>'6505',
                'province_id' => '52',
                'name_th' => 'บางกระทุ่ม',
                'name_en' => 'Bang Krathum'
              ],
              [
                'code' =>'6506',
                'province_id' => '52',
                'name_th' => 'พรหมพิราม',
                'name_en' => 'Phrom Phiram'
              ],
              [
                'code' =>'6507',
                'province_id' => '52',
                'name_th' => 'วัดโบสถ์',
                'name_en' => 'Wat Bot'
              ],
              [
                'code' =>'6508',
                'province_id' => '52',
                'name_th' => 'วังทอง',
                'name_en' => 'Wang Thong'
              ],
              [
                'code' =>'6509',
                'province_id' => '52',
                'name_th' => 'เนินมะปราง',
                'name_en' => 'Noen Maprang'
              ],
              [
                'code' =>'6601',
                'province_id' => '53',
                'name_th' => 'เมืองพิจิตร',
                'name_en' => 'Mueang Phichit'
              ],
              [
                'code' =>'6602',
                'province_id' => '53',
                'name_th' => 'วังทรายพูน',
                'name_en' => 'Wang Sai Phun'
              ],
              [
                'code' =>'6603',
                'province_id' => '53',
                'name_th' => 'โพธิ์ประทับช้าง',
                'name_en' => 'Pho Prathap Chang'
              ],
              [
                'code' =>'6604',
                'province_id' => '53',
                'name_th' => 'ตะพานหิน',
                'name_en' => 'Taphan Hin'
              ],
              [
                'code' =>'6605',
                'province_id' => '53',
                'name_th' => 'บางมูลนาก',
                'name_en' => 'Bang Mun Nak'
              ],
              [
                'code' =>'6606',
                'province_id' => '53',
                'name_th' => 'โพทะเล',
                'name_en' => 'Pho Thale'
              ],
              [
                'code' =>'6607',
                'province_id' => '53',
                'name_th' => 'สามง่าม',
                'name_en' => 'Sam Ngam'
              ],
              [
                'code' =>'6608',
                'province_id' => '53',
                'name_th' => 'ทับคล้อ',
                'name_en' => 'Tap Khlo'
              ],
              [
                'code' =>'6609',
                'province_id' => '53',
                'name_th' => 'สากเหล็ก',
                'name_en' => 'Sak Lek'
              ],
              [
                'code' =>'6610',
                'province_id' => '53',
                'name_th' => 'บึงนาราง',
                'name_en' => 'Bueng Na Rang'
              ],
              [
                'code' =>'6611',
                'province_id' => '53',
                'name_th' => 'ดงเจริญ',
                'name_en' => 'Dong Charoen'
              ],
              [
                'code' =>'6612',
                'province_id' => '53',
                'name_th' => 'วชิรบารมี',
                'name_en' => 'Wachirabarami'
              ],
              [
                'code' =>'6701',
                'province_id' => '54',
                'name_th' => 'เมืองเพชรบูรณ์',
                'name_en' => 'Mueang Phetchabun'
              ],
              [
                'code' =>'6702',
                'province_id' => '54',
                'name_th' => 'ชนแดน',
                'name_en' => 'Chon Daen'
              ],
              [
                'code' =>'6703',
                'province_id' => '54',
                'name_th' => 'หล่มสัก',
                'name_en' => 'Lom Sak'
              ],
              [
                'code' =>'6704',
                'province_id' => '54',
                'name_th' => 'หล่มเก่า',
                'name_en' => 'Lom Kao'
              ],
              [
                'code' =>'6705',
                'province_id' => '54',
                'name_th' => 'วิเชียรบุรี',
                'name_en' => 'Wichian Buri'
              ],
              [
                'code' =>'6706',
                'province_id' => '54',
                'name_th' => 'ศรีเทพ',
                'name_en' => 'Si Thep'
              ],
              [
                'code' =>'6707',
                'province_id' => '54',
                'name_th' => 'หนองไผ่',
                'name_en' => 'Nong Phai'
              ],
              [
                'code' =>'6708',
                'province_id' => '54',
                'name_th' => 'บึงสามพัน',
                'name_en' => 'Bueng Sam Phan'
              ],
              [
                'code' =>'6709',
                'province_id' => '54',
                'name_th' => 'น้ำหนาว',
                'name_en' => 'Nam Nao'
              ],
              [
                'code' =>'6710',
                'province_id' => '54',
                'name_th' => 'วังโป่ง',
                'name_en' => 'Wang Pong'
              ],
              [
                'code' =>'6711',
                'province_id' => '54',
                'name_th' => 'เขาค้อ',
                'name_en' => 'Khao Kho'
              ],
              [
                'code' =>'7001',
                'province_id' => '55',
                'name_th' => 'เมืองราชบุรี',
                'name_en' => 'Mueang Ratchaburi'
              ],
              [
                'code' =>'7002',
                'province_id' => '55',
                'name_th' => 'จอมบึง',
                'name_en' => 'Chom Bueng'
              ],
              [
                'code' =>'7003',
                'province_id' => '55',
                'name_th' => 'สวนผึ้ง',
                'name_en' => 'Suan Phueng'
              ],
              [
                'code' =>'7004',
                'province_id' => '55',
                'name_th' => 'ดำเนินสะดวก',
                'name_en' => 'Damnoen Saduak'
              ],
              [
                'code' =>'7005',
                'province_id' => '55',
                'name_th' => 'บ้านโป่ง',
                'name_en' => 'Ban Pong'
              ],
              [
                'code' =>'7006',
                'province_id' => '55',
                'name_th' => 'บางแพ',
                'name_en' => 'Bang Phae'
              ],
              [
                'code' =>'7007',
                'province_id' => '55',
                'name_th' => 'โพธาราม',
                'name_en' => 'Photharam'
              ],
              [
                'code' =>'7008',
                'province_id' => '55',
                'name_th' => 'ปากท่อ',
                'name_en' => 'Pak Tho'
              ],
              [
                'code' =>'7009',
                'province_id' => '55',
                'name_th' => 'วัดเพลง',
                'name_en' => 'Wat Phleng'
              ],
              [
                'code' =>'7010',
                'province_id' => '55',
                'name_th' => 'บ้านคา',
                'name_en' => 'Ban Kha'
              ],
              [
                'code' =>'7074',
                'province_id' => '55',
                'name_th' => 'ท้องถิ่นเทศบาลตำบลบ้านฆ้อง',
                'name_en' => 'Tet Saban Ban Kong'
              ],
              [
                'code' =>'7101',
                'province_id' => '56',
                'name_th' => 'เมืองกาญจนบุรี',
                'name_en' => 'Mueang Kanchanaburi'
              ],
              [
                'code' =>'7102',
                'province_id' => '56',
                'name_th' => 'ไทรโยค',
                'name_en' => 'Sai Yok'
              ],
              [
                'code' =>'7103',
                'province_id' => '56',
                'name_th' => 'บ่อพลอย',
                'name_en' => 'Bo Phloi'
              ],
              [
                'code' =>'7104',
                'province_id' => '56',
                'name_th' => 'ศรีสวัสดิ์',
                'name_en' => 'Si Sawat'
              ],
              [
                'code' =>'7105',
                'province_id' => '56',
                'name_th' => 'ท่ามะกา',
                'name_en' => 'Tha Maka'
              ],
              [
                'code' =>'7106',
                'province_id' => '56',
                'name_th' => 'ท่าม่วง',
                'name_en' => 'Tha Muang'
              ],
              [
                'code' =>'7107',
                'province_id' => '56',
                'name_th' => 'ทองผาภูมิ',
                'name_en' => 'Pha Phum'
              ],
              [
                'code' =>'7108',
                'province_id' => '56',
                'name_th' => 'สังขละบุรี',
                'name_en' => 'Sangkhla Buri'
              ],
              [
                'code' =>'7109',
                'province_id' => '56',
                'name_th' => 'พนมทวน',
                'name_en' => 'Phanom Thuan'
              ],
              [
                'code' =>'7110',
                'province_id' => '56',
                'name_th' => 'เลาขวัญ',
                'name_en' => 'Lao Khwan'
              ],
              [
                'code' =>'7111',
                'province_id' => '56',
                'name_th' => 'ด่านมะขามเตี้ย',
                'name_en' => 'Dan Makham Tia'
              ],
              [
                'code' =>'7112',
                'province_id' => '56',
                'name_th' => 'หนองปรือ',
                'name_en' => 'Nong Prue'
              ],
              [
                'code' =>'7113',
                'province_id' => '56',
                'name_th' => 'ห้วยกระเจา',
                'name_en' => 'Huai Krachao'
              ],
              [
                'code' =>'7151',
                'province_id' => '56',
                'name_th' => 'สาขาตำบลท่ากระดาน*',
                'name_en' => 'Tha Kra Dan'
              ],
              [
                'code' =>'7181',
                'province_id' => '56',
                'name_th' => '*บ้านทวน จ.กาญจนบุรี',
                'name_en' => '*Ban Tuan'
              ],
              [
                'code' =>'7201',
                'province_id' => '57',
                'name_th' => 'เมืองสุพรรณบุรี',
                'name_en' => 'Mueang Suphan Buri'
              ],
              [
                'code' =>'7202',
                'province_id' => '57',
                'name_th' => 'เดิมบางนางบวช',
                'name_en' => 'Doem Bang Nang Buat'
              ],
              [
                'code' =>'7203',
                'province_id' => '57',
                'name_th' => 'ด่านช้าง',
                'name_en' => 'Dan Chang'
              ],
              [
                'code' =>'7204',
                'province_id' => '57',
                'name_th' => 'บางปลาม้า',
                'name_en' => 'Bang Pla Ma'
              ],
              [
                'code' =>'7205',
                'province_id' => '57',
                'name_th' => 'ศรีประจันต์',
                'name_en' => 'Si Prachan'
              ],
              [
                'code' =>'7206',
                'province_id' => '57',
                'name_th' => 'ดอนเจดีย์',
                'name_en' => 'Don Chedi'
              ],
              [
                'code' =>'7207',
                'province_id' => '57',
                'name_th' => 'สองพี่น้อง',
                'name_en' => 'Song Phi Nong'
              ],
              [
                'code' =>'7208',
                'province_id' => '57',
                'name_th' => 'สามชุก',
                'name_en' => 'Sam Chuk'
              ],
              [
                'code' =>'7209',
                'province_id' => '57',
                'name_th' => 'อู่ทอง',
                'name_en' => 'U Thong'
              ],
              [
                'code' =>'7210',
                'province_id' => '57',
                'name_th' => 'หนองหญ้าไซ',
                'name_en' => 'Nong Ya Sai'
              ],
              [
                'code' =>'7301',
                'province_id' => '58',
                'name_th' => 'เมืองนครปฐม',
                'name_en' => 'Mueang Nakhon Pathom'
              ],
              [
                'code' =>'7302',
                'province_id' => '58',
                'name_th' => 'กำแพงแสน',
                'name_en' => 'Kamphaeng Saen'
              ],
              [
                'code' =>'7303',
                'province_id' => '58',
                'name_th' => 'นครชัยศรี',
                'name_en' => 'Nakhon Chai Si'
              ],
              [
                'code' =>'7304',
                'province_id' => '58',
                'name_th' => 'ดอนตูม',
                'name_en' => 'Don Tum'
              ],
              [
                'code' =>'7305',
                'province_id' => '58',
                'name_th' => 'บางเลน',
                'name_en' => 'Bang Len'
              ],
              [
                'code' =>'7306',
                'province_id' => '58',
                'name_th' => 'สามพราน',
                'name_en' => 'Sam Phran'
              ],
              [
                'code' =>'7307',
                'province_id' => '58',
                'name_th' => 'พุทธมณฑล',
                'name_en' => 'Phutthamonthon'
              ],
              [
                'code' =>'7401',
                'province_id' => '59',
                'name_th' => 'เมืองสมุทรสาคร',
                'name_en' => 'Mueang Samut Sakhon'
              ],
              [
                'code' =>'7402',
                'province_id' => '59',
                'name_th' => 'กระทุ่มแบน',
                'name_en' => 'Krathum Baen'
              ],
              [
                'code' =>'7403',
                'province_id' => '59',
                'name_th' => 'บ้านแพ้ว',
                'name_en' => 'Ban Phaeo'
              ],
              [
                'code' =>'7501',
                'province_id' => '60',
                'name_th' => 'เมืองสมุทรสงคราม',
                'name_en' => 'Mueang Samut Songkhram'
              ],
              [
                'code' =>'7502',
                'province_id' => '60',
                'name_th' => 'บางคนที',
                'name_en' => 'Bang Khonthi'
              ],
              [
                'code' =>'7503',
                'province_id' => '60',
                'name_th' => 'อัมพวา',
                'name_en' => 'Amphawa'
              ],
              [
                'code' =>'7601',
                'province_id' => '61',
                'name_th' => 'เมืองเพชรบุรี',
                'name_en' => 'Mueang Phetchaburi'
              ],
              [
                'code' =>'7602',
                'province_id' => '61',
                'name_th' => 'เขาย้อย',
                'name_en' => 'Khao Yoi'
              ],
              [
                'code' =>'7603',
                'province_id' => '61',
                'name_th' => 'หนองหญ้าปล้อง',
                'name_en' => 'Nong Ya Plong'
              ],
              [
                'code' =>'7604',
                'province_id' => '61',
                'name_th' => 'ชะอำ',
                'name_en' => 'Cha-am'
              ],
              [
                'code' =>'7605',
                'province_id' => '61',
                'name_th' => 'ท่ายาง',
                'name_en' => 'Tha Yang'
              ],
              [
                'code' =>'7606',
                'province_id' => '61',
                'name_th' => 'บ้านลาด',
                'name_en' => 'Ban Lat'
              ],
              [
                'code' =>'7607',
                'province_id' => '61',
                'name_th' => 'บ้านแหลม',
                'name_en' => 'Ban Laem'
              ],
              [
                'code' =>'7608',
                'province_id' => '61',
                'name_th' => 'แก่งกระจาน',
                'name_en' => 'Kaeng Krachan'
              ],
              [
                'code' =>'7701',
                'province_id' => '62',
                'name_th' => 'เมืองประจวบคีรีขันธ์',
                'name_en' => 'Mueang Prachuap Khiri Khan'
              ],
              [
                'code' =>'7702',
                'province_id' => '62',
                'name_th' => 'กุยบุรี',
                'name_en' => 'Kui Buri'
              ],
              [
                'code' =>'7703',
                'province_id' => '62',
                'name_th' => 'ทับสะแก',
                'name_en' => 'Thap Sakae'
              ],
              [
                'code' =>'7704',
                'province_id' => '62',
                'name_th' => 'บางสะพาน',
                'name_en' => 'Bang Saphan'
              ],
              [
                'code' =>'7705',
                'province_id' => '62',
                'name_th' => 'บางสะพานน้อย',
                'name_en' => 'Bang Saphan Noi'
              ],
              [
                'code' =>'7706',
                'province_id' => '62',
                'name_th' => 'ปราณบุรี',
                'name_en' => 'Pran Buri'
              ],
              [
                'code' =>'7707',
                'province_id' => '62',
                'name_th' => 'หัวหิน',
                'name_en' => 'Hua Hin'
              ],
              [
                'code' =>'7708',
                'province_id' => '62',
                'name_th' => 'สามร้อยยอด',
                'name_en' => 'Sam Roi Yot'
              ],
              [
                'code' =>'8001',
                'province_id' => '63',
                'name_th' => 'เมืองนครศรีธรรมราช',
                'name_en' => 'Mueang Nakhon Si Thammarat'
              ],
              [
                'code' =>'8002',
                'province_id' => '63',
                'name_th' => 'พรหมคีรี',
                'name_en' => 'Phrom Khiri'
              ],
              [
                'code' =>'8003',
                'province_id' => '63',
                'name_th' => 'ลานสกา',
                'name_en' => 'Lan Saka'
              ],
              [
                'code' =>'8004',
                'province_id' => '63',
                'name_th' => 'ฉวาง',
                'name_en' => 'Chawang'
              ],
              [
                'code' =>'8005',
                'province_id' => '63',
                'name_th' => 'พิปูน',
                'name_en' => 'Phipun'
              ],
              [
                'code' =>'8006',
                'province_id' => '63',
                'name_th' => 'เชียรใหญ่',
                'name_en' => 'Chian Yai'
              ],
              [
                'code' =>'8007',
                'province_id' => '63',
                'name_th' => 'ชะอวด',
                'name_en' => 'Cha-uat'
              ],
              [
                'code' =>'8008',
                'province_id' => '63',
                'name_th' => 'ท่าศาลา',
                'name_en' => 'Tha Sala'
              ],
              [
                'code' =>'8009',
                'province_id' => '63',
                'name_th' => 'ทุ่งสง',
                'name_en' => 'Thung Song'
              ],
              [
                'code' =>'8010',
                'province_id' => '63',
                'name_th' => 'นาบอน',
                'name_en' => 'Na Bon'
              ],
              [
                'code' =>'8011',
                'province_id' => '63',
                'name_th' => 'ทุ่งใหญ่',
                'name_en' => 'Thung Yai'
              ],
              [
                'code' =>'8012',
                'province_id' => '63',
                'name_th' => 'ปากพนัง',
                'name_en' => 'Pak Phanang'
              ],
              [
                'code' =>'8013',
                'province_id' => '63',
                'name_th' => 'ร่อนพิบูลย์',
                'name_en' => 'Ron Phibun'
              ],
              [
                'code' =>'8014',
                'province_id' => '63',
                'name_th' => 'สิชล',
                'name_en' => 'Sichon'
              ],
              [
                'code' =>'8015',
                'province_id' => '63',
                'name_th' => 'ขนอม',
                'name_en' => 'Khanom'
              ],
              [
                'code' =>'8016',
                'province_id' => '63',
                'name_th' => 'หัวไทร',
                'name_en' => 'Hua Sai'
              ],
              [
                'code' =>'8017',
                'province_id' => '63',
                'name_th' => 'บางขัน',
                'name_en' => 'Bang Khan'
              ],
              [
                'code' =>'8018',
                'province_id' => '63',
                'name_th' => 'ถ้ำพรรณรา',
                'name_en' => 'Tham Phannara'
              ],
              [
                'code' =>'8019',
                'province_id' => '63',
                'name_th' => 'จุฬาภรณ์',
                'name_en' => 'Chulabhorn'
              ],
              [
                'code' =>'8020',
                'province_id' => '63',
                'name_th' => 'พระพรหม',
                'name_en' => 'Phra Phrom'
              ],
              [
                'code' =>'8021',
                'province_id' => '63',
                'name_th' => 'นบพิตำ',
                'name_en' => 'Nopphitam'
              ],
              [
                'code' =>'8022',
                'province_id' => '63',
                'name_th' => 'ช้างกลาง',
                'name_en' => 'Chang Klang'
              ],
              [
                'code' =>'8023',
                'province_id' => '63',
                'name_th' => 'เฉลิมพระเกียรติ',
                'name_en' => 'Chaloem Phra Kiat'
              ],
              [
                'code' =>'8051',
                'province_id' => '63',
                'name_th' => 'เชียรใหญ่ (สาขาตำบลเสือหึง)*',
                'name_en' => 'Chian Yai*'
              ],
              [
                'code' =>'8052',
                'province_id' => '63',
                'name_th' => 'สาขาตำบลสวนหลวง**',
                'name_en' => 'Suan Luang'
              ],
              [
                'code' =>'8053',
                'province_id' => '63',
                'name_th' => 'ร่อนพิบูลย์ (สาขาตำบลหินตก)*',
                'name_en' => 'Ron Phibun'
              ],
              [
                'code' =>'8054',
                'province_id' => '63',
                'name_th' => 'หัวไทร (สาขาตำบลควนชะลิก)*',
                'name_en' => 'Hua Sai'
              ],
              [
                'code' =>'8055',
                'province_id' => '63',
                'name_th' => 'ทุ่งสง (สาขาตำบลกะปาง)*',
                'name_en' => 'Thung Song'
              ],
              [
                'code' =>'8101',
                'province_id' => '64',
                'name_th' => 'เมืองกระบี่',
                'name_en' => 'Mueang Krabi'
              ],
              [
                'code' =>'8102',
                'province_id' => '64',
                'name_th' => 'เขาพนม',
                'name_en' => 'Khao Phanom'
              ],
              [
                'code' =>'8103',
                'province_id' => '64',
                'name_th' => 'เกาะลันตา',
                'name_en' => 'Ko Lanta'
              ],
              [
                'code' =>'8104',
                'province_id' => '64',
                'name_th' => 'คลองท่อม',
                'name_en' => 'Khlong Thom'
              ],
              [
                'code' =>'8105',
                'province_id' => '64',
                'name_th' => 'อ่าวลึก',
                'name_en' => 'Ao Luek'
              ],
              [
                'code' =>'8106',
                'province_id' => '64',
                'name_th' => 'ปลายพระยา',
                'name_en' => 'Plai Phraya'
              ],
              [
                'code' =>'8107',
                'province_id' => '64',
                'name_th' => 'ลำทับ',
                'name_en' => 'Lam Thap'
              ],
              [
                'code' =>'8108',
                'province_id' => '64',
                'name_th' => 'เหนือคลอง',
                'name_en' => 'Nuea Khlong'
              ],
              [
                'code' =>'8201',
                'province_id' => '65',
                'name_th' => 'เมืองพังงา',
                'name_en' => 'Mueang Phang-nga'
              ],
              [
                'code' =>'8202',
                'province_id' => '65',
                'name_th' => 'เกาะยาว',
                'name_en' => 'Ko Yao'
              ],
              [
                'code' =>'8203',
                'province_id' => '65',
                'name_th' => 'กะปง',
                'name_en' => 'Kapong'
              ],
              [
                'code' =>'8204',
                'province_id' => '65',
                'name_th' => 'ตะกั่วทุ่ง',
                'name_en' => 'Takua Thung'
              ],
              [
                'code' =>'8205',
                'province_id' => '65',
                'name_th' => 'ตะกั่วป่า',
                'name_en' => 'Takua Pa'
              ],
              [
                'code' =>'8206',
                'province_id' => '65',
                'name_th' => 'คุระบุรี',
                'name_en' => 'Khura Buri'
              ],
              [
                'code' =>'8207',
                'province_id' => '65',
                'name_th' => 'ทับปุด',
                'name_en' => 'Thap Put'
              ],
              [
                'code' =>'8208',
                'province_id' => '65',
                'name_th' => 'ท้ายเหมือง',
                'name_en' => 'Thai Mueang'
              ],
              [
                'code' =>'8301',
                'province_id' => '66',
                'name_th' => 'เมืองภูเก็ต',
                'name_en' => 'Mueang Phuket'
              ],
              [
                'code' =>'8302',
                'province_id' => '66',
                'name_th' => 'กะทู้',
                'name_en' => 'Kathu'
              ],
              [
                'code' =>'8303',
                'province_id' => '66',
                'name_th' => 'ถลาง',
                'name_en' => 'Thalang'
              ],
              [
                'code' =>'8381',
                'province_id' => '66',
                'name_th' => '*ทุ่งคา',
                'name_en' => '*Tung Ka'
              ],
              [
                'code' =>'8401',
                'province_id' => '67',
                'name_th' => 'เมืองสุราษฎร์ธานี',
                'name_en' => 'Mueang Surat Thani'
              ],
              [
                'code' =>'8402',
                'province_id' => '67',
                'name_th' => 'กาญจนดิษฐ์',
                'name_en' => 'Kanchanadit'
              ],
              [
                'code' =>'8403',
                'province_id' => '67',
                'name_th' => 'ดอนสัก',
                'name_en' => 'Don Sak'
              ],
              [
                'code' =>'8404',
                'province_id' => '67',
                'name_th' => 'เกาะสมุย',
                'name_en' => 'Ko Samui'
              ],
              [
                'code' =>'8405',
                'province_id' => '67',
                'name_th' => 'เกาะพะงัน',
                'name_en' => 'Ko Pha-ngan'
              ],
              [
                'code' =>'8406',
                'province_id' => '67',
                'name_th' => 'ไชยา',
                'name_en' => 'Chaiya'
              ],
              [
                'code' =>'8407',
                'province_id' => '67',
                'name_th' => 'ท่าชนะ',
                'name_en' => 'Tha Chana'
              ],
              [
                'code' =>'8408',
                'province_id' => '67',
                'name_th' => 'คีรีรัฐนิคม',
                'name_en' => 'Khiri Rat Nikhom'
              ],
              [
                'code' =>'8409',
                'province_id' => '67',
                'name_th' => 'บ้านตาขุน',
                'name_en' => 'Ban Ta Khun'
              ],
              [
                'code' =>'8410',
                'province_id' => '67',
                'name_th' => 'พนม',
                'name_en' => 'Phanom'
              ],
              [
                'code' =>'8411',
                'province_id' => '67',
                'name_th' => 'ท่าฉาง',
                'name_en' => 'Tha Chang'
              ],
              [
                'code' =>'8412',
                'province_id' => '67',
                'name_th' => 'บ้านนาสาร',
                'name_en' => 'Ban Na San'
              ],
              [
                'code' =>'8413',
                'province_id' => '67',
                'name_th' => 'บ้านนาเดิม',
                'name_en' => 'Ban Na Doem'
              ],
              [
                'code' =>'8414',
                'province_id' => '67',
                'name_th' => 'เคียนซา',
                'name_en' => 'Khian Sa'
              ],
              [
                'code' =>'8415',
                'province_id' => '67',
                'name_th' => 'เวียงสระ',
                'name_en' => 'Wiang Sa'
              ],
              [
                'code' =>'8416',
                'province_id' => '67',
                'name_th' => 'พระแสง',
                'name_en' => 'Phrasaeng'
              ],
              [
                'code' =>'8417',
                'province_id' => '67',
                'name_th' => 'พุนพิน',
                'name_en' => 'Phunphin'
              ],
              [
                'code' =>'8418',
                'province_id' => '67',
                'name_th' => 'ชัยบุรี',
                'name_en' => 'Chai Buri'
              ],
              [
                'code' =>'8419',
                'province_id' => '67',
                'name_th' => 'วิภาวดี',
                'name_en' => 'Vibhavadi'
              ],
              [
                'code' =>'8451',
                'province_id' => '67',
                'name_th' => 'เกาะพงัน (สาขาตำบลเกาะเต่า)*',
                'name_en' => 'Ko Pha-ngan'
              ],
              [
                'code' =>'8481',
                'province_id' => '67',
                'name_th' => '*อ.บ้านดอน จ.สุราษฎร์ธานี',
                'name_en' => '*Ban Don'
              ],
              [
                'code' =>'8501',
                'province_id' => '68',
                'name_th' => 'เมืองระนอง',
                'name_en' => 'Mueang Ranong'
              ],
              [
                'code' =>'8502',
                'province_id' => '68',
                'name_th' => 'ละอุ่น',
                'name_en' => 'La-un'
              ],
              [
                'code' =>'8503',
                'province_id' => '68',
                'name_th' => 'กะเปอร์',
                'name_en' => 'Kapoe'
              ],
              [
                'code' =>'8504',
                'province_id' => '68',
                'name_th' => 'กระบุรี',
                'name_en' => 'Kra Buri'
              ],
              [
                'code' =>'8505',
                'province_id' => '68',
                'name_th' => 'สุขสำราญ',
                'name_en' => 'Suk Samran'
              ],
              [
                'code' =>'8601',
                'province_id' => '69',
                'name_th' => 'เมืองชุมพร',
                'name_en' => 'Mueang Chumphon'
              ],
              [
                'code' =>'8602',
                'province_id' => '69',
                'name_th' => 'ท่าแซะ',
                'name_en' => 'Tha Sae'
              ],
              [
                'code' =>'8603',
                'province_id' => '69',
                'name_th' => 'ปะทิว',
                'name_en' => 'Pathio'
              ],
              [
                'code' =>'8604',
                'province_id' => '69',
                'name_th' => 'หลังสวน',
                'name_en' => 'Lang Suan'
              ],
              [
                'code' =>'8605',
                'province_id' => '69',
                'name_th' => 'ละแม',
                'name_en' => 'Lamae'
              ],
              [
                'code' =>'8606',
                'province_id' => '69',
                'name_th' => 'พะโต๊ะ',
                'name_en' => 'Phato'
              ],
              [
                'code' =>'8607',
                'province_id' => '69',
                'name_th' => 'สวี',
                'name_en' => 'Sawi'
              ],
              [
                'code' =>'8608',
                'province_id' => '69',
                'name_th' => 'ทุ่งตะโก',
                'name_en' => 'Thung Tako'
              ],
              [
                'code' =>'9001',
                'province_id' => '70',
                'name_th' => 'เมืองสงขลา',
                'name_en' => 'Mueang Songkhla'
              ],
              [
                'code' =>'9002',
                'province_id' => '70',
                'name_th' => 'สทิงพระ',
                'name_en' => 'Sathing Phra'
              ],
              [
                'code' =>'9003',
                'province_id' => '70',
                'name_th' => 'จะนะ',
                'name_en' => 'Chana'
              ],
              [
                'code' =>'9004',
                'province_id' => '70',
                'name_th' => 'นาทวี',
                'name_en' => 'Na Thawi'
              ],
              [
                'code' =>'9005',
                'province_id' => '70',
                'name_th' => 'เทพา',
                'name_en' => 'Thepha'
              ],
              [
                'code' =>'9006',
                'province_id' => '70',
                'name_th' => 'สะบ้าย้อย',
                'name_en' => 'Saba Yoi'
              ],
              [
                'code' =>'9007',
                'province_id' => '70',
                'name_th' => 'ระโนด',
                'name_en' => 'Ranot'
              ],
              [
                'code' =>'9008',
                'province_id' => '70',
                'name_th' => 'กระแสสินธุ์',
                'name_en' => 'Krasae Sin'
              ],
              [
                'code' =>'9009',
                'province_id' => '70',
                'name_th' => 'รัตภูมิ',
                'name_en' => 'Rattaphum'
              ],
              [
                'code' =>'9010',
                'province_id' => '70',
                'name_th' => 'สะเดา',
                'name_en' => 'Sadao'
              ],
              [
                'code' =>'9011',
                'province_id' => '70',
                'name_th' => 'หาดใหญ่',
                'name_en' => 'Hat Yai'
              ],
              [
                'code' =>'9012',
                'province_id' => '70',
                'name_th' => 'นาหม่อม',
                'name_en' => 'Na Mom'
              ],
              [
                'code' =>'9013',
                'province_id' => '70',
                'name_th' => 'ควนเนียง',
                'name_en' => 'Khuan Niang'
              ],
              [
                'code' =>'9014',
                'province_id' => '70',
                'name_th' => 'บางกล่ำ',
                'name_en' => 'Bang Klam'
              ],
              [
                'code' =>'9015',
                'province_id' => '70',
                'name_th' => 'สิงหนคร',
                'name_en' => 'Singhanakhon'
              ],
              [
                'code' =>'9016',
                'province_id' => '70',
                'name_th' => 'คลองหอยโข่ง',
                'name_en' => 'Khlong Hoi Khong'
              ],
              [
                'code' =>'9077',
                'province_id' => '70',
                'name_th' => 'ท้องถิ่นเทศบาลตำบลสำนักขาม',
                'name_en' => 'Sum Nung Kam'
              ],
              [
                'code' =>'9096',
                'province_id' => '70',
                'name_th' => 'เทศบาลตำบลบ้านพรุ*',
                'name_en' => 'Ban Pru*'
              ],
              [
                'code' =>'9101',
                'province_id' => '71',
                'name_th' => 'เมืองสตูล',
                'name_en' => 'Mueang Satun'
              ],
              [
                'code' =>'9102',
                'province_id' => '71',
                'name_th' => 'ควนโดน',
                'name_en' => 'Khuan Don'
              ],
              [
                'code' =>'9103',
                'province_id' => '71',
                'name_th' => 'ควนกาหลง',
                'name_en' => 'Khuan Kalong'
              ],
              [
                'code' =>'9104',
                'province_id' => '71',
                'name_th' => 'ท่าแพ',
                'name_en' => 'Tha Phae'
              ],
              [
                'code' =>'9105',
                'province_id' => '71',
                'name_th' => 'ละงู',
                'name_en' => 'La-ngu'
              ],
              [
                'code' =>'9106',
                'province_id' => '71',
                'name_th' => 'ทุ่งหว้า',
                'name_en' => 'Thung Wa'
              ],
              [
                'code' =>'9107',
                'province_id' => '71',
                'name_th' => 'มะนัง',
                'name_en' => 'Manang'
              ],
              [
                'code' =>'9201',
                'province_id' => '72',
                'name_th' => 'เมืองตรัง',
                'name_en' => 'Mueang Trang'
              ],
              [
                'code' =>'9202',
                'province_id' => '72',
                'name_th' => 'กันตัง',
                'name_en' => 'Kantang'
              ],
              [
                'code' =>'9203',
                'province_id' => '72',
                'name_th' => 'ย่านตาขาว',
                'name_en' => 'Yan Ta Khao'
              ],
              [
                'code' =>'9204',
                'province_id' => '72',
                'name_th' => 'ปะเหลียน',
                'name_en' => 'Palian'
              ],
              [
                'code' =>'9205',
                'province_id' => '72',
                'name_th' => 'สิเกา',
                'name_en' => 'Sikao'
              ],
              [
                'code' =>'9206',
                'province_id' => '72',
                'name_th' => 'ห้วยยอด',
                'name_en' => 'Huai Yot'
              ],
              [
                'code' =>'9207',
                'province_id' => '72',
                'name_th' => 'วังวิเศษ',
                'name_en' => 'Wang Wiset'
              ],
              [
                'code' =>'9208',
                'province_id' => '72',
                'name_th' => 'นาโยง',
                'name_en' => 'Na Yong'
              ],
              [
                'code' =>'9209',
                'province_id' => '72',
                'name_th' => 'รัษฎา',
                'name_en' => 'Ratsada'
              ],
              [
                'code' =>'9210',
                'province_id' => '72',
                'name_th' => 'หาดสำราญ',
                'name_en' => 'Hat Samran'
              ],
              [
                'code' =>'9251',
                'province_id' => '72',
                'name_th' => 'อำเภอเมืองตรัง(สาขาคลองเต็ง)**',
                'name_en' => 'Mueang Trang(Krong Teng)**'
              ],
              [
                'code' =>'9301',
                'province_id' => '73',
                'name_th' => 'เมืองพัทลุง',
                'name_en' => 'Mueang Phatthalung'
              ],
              [
                'code' =>'9302',
                'province_id' => '73',
                'name_th' => 'กงหรา',
                'name_en' => 'Kong Ra'
              ],
              [
                'code' =>'9303',
                'province_id' => '73',
                'name_th' => 'เขาชัยสน',
                'name_en' => 'Khao Chaison'
              ],
              [
                'code' =>'9304',
                'province_id' => '73',
                'name_th' => 'ตะโหมด',
                'name_en' => 'Tamot'
              ],
              [
                'code' =>'9305',
                'province_id' => '73',
                'name_th' => 'ควนขนุน',
                'name_en' => 'Khuan Khanun'
              ],
              [
                'code' =>'9306',
                'province_id' => '73',
                'name_th' => 'ปากพะยูน',
                'name_en' => 'Pak Phayun'
              ],
              [
                'code' =>'9307',
                'province_id' => '73',
                'name_th' => 'ศรีบรรพต',
                'name_en' => 'Si Banphot'
              ],
              [
                'code' =>'9308',
                'province_id' => '73',
                'name_th' => 'ป่าบอน',
                'name_en' => 'Pa Bon'
              ],
              [
                'code' =>'9309',
                'province_id' => '73',
                'name_th' => 'บางแก้ว',
                'name_en' => 'Bang Kaeo'
              ],
              [
                'code' =>'9310',
                'province_id' => '73',
                'name_th' => 'ป่าพะยอม',
                'name_en' => 'Pa Phayom'
              ],
              [
                'code' =>'9311',
                'province_id' => '73',
                'name_th' => 'ศรีนครินทร์',
                'name_en' => 'Srinagarindra'
              ],
              [
                'code' =>'9401',
                'province_id' => '74',
                'name_th' => 'เมืองปัตตานี',
                'name_en' => 'Mueang Pattani'
              ],
              [
                'code' =>'9402',
                'province_id' => '74',
                'name_th' => 'โคกโพธิ์',
                'name_en' => 'Khok Pho'
              ],
              [
                'code' =>'9403',
                'province_id' => '74',
                'name_th' => 'หนองจิก',
                'name_en' => 'Nong Chik'
              ],
              [
                'code' =>'9404',
                'province_id' => '74',
                'name_th' => 'ปะนาเระ',
                'name_en' => 'Panare'
              ],
              [
                'code' =>'9405',
                'province_id' => '74',
                'name_th' => 'มายอ',
                'name_en' => 'Mayo'
              ],
              [
                'code' =>'9406',
                'province_id' => '74',
                'name_th' => 'ทุ่งยางแดง',
                'name_en' => 'Thung Yang Daeng'
              ],
              [
                'code' =>'9407',
                'province_id' => '74',
                'name_th' => 'สายบุรี',
                'name_en' => 'Sai Buri'
              ],
              [
                'code' =>'9408',
                'province_id' => '74',
                'name_th' => 'ไม้แก่น',
                'name_en' => 'Mai Kaen'
              ],
              [
                'code' =>'9409',
                'province_id' => '74',
                'name_th' => 'ยะหริ่ง',
                'name_en' => 'Yaring'
              ],
              [
                'code' =>'9410',
                'province_id' => '74',
                'name_th' => 'ยะรัง',
                'name_en' => 'Yarang'
              ],
              [
                'code' =>'9411',
                'province_id' => '74',
                'name_th' => 'กะพ้อ',
                'name_en' => 'Kapho'
              ],
              [
                'code' =>'9412',
                'province_id' => '74',
                'name_th' => 'แม่ลาน',
                'name_en' => 'Mae Lan'
              ],
              [
                'code' =>'9501',
                'province_id' => '75',
                'name_th' => 'เมืองยะลา',
                'name_en' => 'Mueang Yala'
              ],
              [
                'code' =>'9502',
                'province_id' => '75',
                'name_th' => 'เบตง',
                'name_en' => 'Betong'
              ],
              [
                'code' =>'9503',
                'province_id' => '75',
                'name_th' => 'บันนังสตา',
                'name_en' => 'Bannang Sata'
              ],
              [
                'code' =>'9504',
                'province_id' => '75',
                'name_th' => 'ธารโต',
                'name_en' => 'Than To'
              ],
              [
                'code' =>'9505',
                'province_id' => '75',
                'name_th' => 'ยะหา',
                'name_en' => 'Yaha'
              ],
              [
                'code' =>'9506',
                'province_id' => '75',
                'name_th' => 'รามัน',
                'name_en' => 'Raman'
              ],
              [
                'code' =>'9507',
                'province_id' => '75',
                'name_th' => 'กาบัง',
                'name_en' => 'Kabang'
              ],
              [
                'code' =>'9508',
                'province_id' => '75',
                'name_th' => 'กรงปินัง',
                'name_en' => 'Krong Pinang'
              ],
              [
                'code' =>'9601',
                'province_id' => '76',
                'name_th' => 'เมืองนราธิวาส',
                'name_en' => 'Mueang Narathiwat'
              ],
              [
                'code' =>'9602',
                'province_id' => '76',
                'name_th' => 'ตากใบ',
                'name_en' => 'Tak Bai'
              ],
              [
                'code' =>'9603',
                'province_id' => '76',
                'name_th' => 'บาเจาะ',
                'name_en' => 'Bacho'
              ],
              [
                'code' =>'9604',
                'province_id' => '76',
                'name_th' => 'ยี่งอ',
                'name_en' => 'Yi-ngo'
              ],
              [
                'code' =>'9605',
                'province_id' => '76',
                'name_th' => 'ระแงะ',
                'name_en' => 'Ra-ngae'
              ],
              [
                'code' =>'9606',
                'province_id' => '76',
                'name_th' => 'รือเสาะ',
                'name_en' => 'Rueso'
              ],
              [
                'code' =>'9607',
                'province_id' => '76',
                'name_th' => 'ศรีสาคร',
                'name_en' => 'Si Sakhon'
              ],
              [
                'code' =>'9608',
                'province_id' => '76',
                'name_th' => 'แว้ง',
                'name_en' => 'Waeng'
              ],
              [
                'code' =>'9609',
                'province_id' => '76',
                'name_th' => 'สุคิริน',
                'name_en' => 'Sukhirin'
              ],
              [
                'code' =>'9610',
                'province_id' => '76',
                'name_th' => 'สุไหงโก-ลก',
                'name_en' => 'Su-ngai Kolok'
              ],
              [
                'code' =>'9611',
                'province_id' => '76',
                'name_th' => 'สุไหงปาดี',
                'name_en' => 'Su-ngai Padi'
              ],
              [
                'code' =>'9612',
                'province_id' => '76',
                'name_th' => 'จะแนะ',
                'name_en' => 'Chanae'
              ],
              [
                'code' =>'9613',
                'province_id' => '76',
                'name_th' => 'เจาะไอร้อง',
                'name_en' => 'Cho-airong'
              ],
              [
                'code' =>'9681',
                'province_id' => '76',
                'name_th' => '*อ.บางนรา จ.นราธิวาส',
                'name_en' => '*Bang Nra'
              ],
              [
                'code' =>'3807',
                'province_id' => '77',
                'name_th' => 'ปากคาด',
                'name_en' => 'Pak Khat'
              ],
              [
                'code' =>'3806',
                'province_id' => '77',
                'name_th' => 'บึงโขงหลง',
                'name_en' => 'Bueng Khong Long'
              ],
              [
                'code' =>'3805',
                'province_id' => '77',
                'name_th' => 'ศรีวิไล',
                'name_en' => 'Si Wilai'
              ],
              [
                'code' =>'3804',
                'province_id' => '77',
                'name_th' => 'พรเจริญ',
                'name_en' => 'Phon Charoen'
              ],
              [
                'code' =>'3803',
                'province_id' => '77',
                'name_th' => 'โซ่พิสัย',
                'name_en' => 'So Phisai'
              ],
              [
                'code' =>'3802',
                'province_id' => '77',
                'name_th' => 'เซกา',
                'name_en' => 'Seka'
              ],
              [
                'code' =>'3801',
                'province_id' => '77',
                'name_th' => 'เมืองบึงกาฬ',
                'name_en' => 'Mueang Bueng Kan'
              ],
              [
                'code' =>'3808',
                'province_id' => '77',
                'name_th' => 'บุ่งคล้า',
                'name_en' => 'Bung Khla'
              ]
        ];
        $chunks = array_chunk($amphureData, 500);
        foreach ($chunks as $key => $chunk) {
            Amphure::insert($chunk);
        }
    }
}
