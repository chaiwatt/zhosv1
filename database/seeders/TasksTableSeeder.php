<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('tasks')->insert([
         [
            'order' => 1,
            'function_type_id' => 1,
            'name' => 'ทะเบียนผู้ป่วย',
            'code' => 'opdcard',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 2,
            'function_type_id' => 1,
            'name' => 'ข้อมูลเสียชีวิต',
            'code' => 'patient_death',
            'type' => 0,
            'is_active' => 0
         ],
         [
            'order' => 3,
            'function_type_id' => 2,
            'name' => 'ข้อมูลสิทธิการรักษา',
            'code' => 'opdcard_pttype',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 4,
            'function_type_id' => 2,
            'name' => 'ข้อมูลโรคเรื้อรัง',
            'code' => 'clinicmember',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 5,
            'function_type_id' => 2,
            'name' => 'ข้อมูลบันทึกประจำตัวผู้ป่วย(note)',
            'code' => 'patient_note',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 6,
            'function_type_id' => 2,
            'name' => 'ข้อมูลการนัดหมาย',
            'code' => 'appointment',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 7,
            'function_type_id' => 1,
            'name' => 'ยืมแฟ้มฯผู้ป่วยนอก',
            'code' => 'opdcard_rent',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 8,
            'function_type_id' => 1,
            'name' => 'ยืมแฟ้มฯผู้ป่วยใน',
            'code' => 'ipdcard_rent',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 9,
            'function_type_id' => 1,
            'name' => 'ส่งตรวจผู้ป่วย',
            'code' => 'visit_register',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 10,
            'function_type_id' => 2,
            'name' => 'ตรวจสอบสิทธิ',
            'code' => 'insurance_center',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 11,
            'function_type_id' => 2,
            'name' => 'ข้อมูลการแพ้ยาแฟ้มเวชระเบียน',
            'code' => 'opdcard_drugallergy',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 12,
            'function_type_id' => 2,
            'name' => 'ข้อมูลaudit:เวชระเบียน',
            'code' => 'opdcard_audit',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 13,
            'function_type_id' => 2,
            'name' => 'emr:เวชระเบียน',
            'code' => 'patient_emr',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 14,
            'function_type_id' => 1,
            'name' => 'จัดการHN',
            'code' => 'opdcard_hn',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 15,
            'function_type_id' => 2,
            'name' => 'เวชระเบียน:เปลี่ยนhn',
            'code' => 'opdcard_hn_change',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 16,
            'function_type_id' => 2,
            'name' => 'เวชระเบียน:copyhn',
            'code' => 'opdcard_hn_copy',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 17,
            'function_type_id' => 2,
            'name' => 'เวชระเบียน:รวมhn',
            'code' => 'opdcard_hn_merge',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 18,
            'function_type_id' => 2,
            'name' => 'เวชระเบียน:ข้อมูลพนักงาน',
            'code' => 'opdcard_employee',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 19,
            'function_type_id' => 2,
            'name' => 'เวชระเบียน:เข้าถึงข้อมูลปกปิด',
            'code' => 'opdcard_non_disclosure',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 20,
            'function_type_id' => 2,
            'name' => 'งานระบาดวิทยา',
            'code' => 'epidem',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 21,
            'function_type_id' => 2,
            'name' => 'takeovervisit',
            'code' => 'take_over_visit',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 22,
            'function_type_id' => 2,
            'name' => 'emr',
            'code' => 'emr',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 23,
            'function_type_id' => 2,
            'name' => 'รับตัวผู้ป่วย(referin)',
            'code' => 'refer_in',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 24,
            'function_type_id' => 2,
            'name' => 'ส่งตัวผู้ป่วย(referout)',
            'code' => 'refer_out',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 25,
            'function_type_id' => 2,
            'name' => 'รายงานอุบัติเหตุ',
            'code' => 'accident',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 26,
            'function_type_id' => 2,
            'name' => 'ออกคิวรับบริการย่อย',
            'code' => 'opd_subqueue',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 27,
            'function_type_id' => 2,
            'name' => 'viewexternalscandocument',
            'code' => 'view_ext_document_scan',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 28,
            'function_type_id' => 2,
            'name' => 'พิมพ์เอกสารscan',
            'code' => 'print_scan_doc',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 29,
            'function_type_id' => 2,
            'name' => 'saveเอกสารscan',
            'code' => 'save_scan_doc',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 30,
            'function_type_id' => 2,
            'name' => 'ยืนยันผลการวินิจฉัยopd',
            'code' => 'opd_diag_confirm',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 31,
            'function_type_id' => 2,
            'name' => 'ส่งข้อมูลisexport',
            'code' => 'is_export',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 32,
            'function_type_id' => 2,
            'name' => 'สถานะพิเศษopdcard',
            'code' => 'opdcard_condition',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 33,
            'function_type_id' => 2,
            'name' => 'patientinfoquery',
            'code' => 'patient_info_query',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 34,
            'function_type_id' => 2,
            'name' => 'เข้าถึงข้อมูลทะเบียนผู้ป่วยโรคเรื้อรังที่จำกัดการเข้าถึง',
            'code' => 'ncd_limit_access',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 35,
            'function_type_id' => 2,
            'name' => 'เปลี่ยนหมายเลขhn',
            'code' => 'patient_hn_change',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 36,
            'function_type_id' => 2,
            'name' => 'รวมข้อมูลเวชระเบียน(mergehn)',
            'code' => 'patient_hn_merge',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 37,
            'function_type_id' => 2,
            'name' => 'ยกเลิกการส่งตรวจ',
            'code' => 'visit_cancel',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 38,
            'function_type_id' => 2,
            'name' => 'พิมพ์เอกสารเวชระเบียน',
            'code' => 'opdcard_print',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 39,
            'function_type_id' => 2,
            'name' => 'แก้ไขผลวินิจฉัยopd',
            'code' => 'opd_dx_edit',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 40,
            'function_type_id' => 1,
            'name' => 'ซักประวัติผู้ป่วย',
            'code' => 'nurse_screen',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 41,
            'function_type_id' => 2,
            'name' => 'บันทึกนัดหมายผู้ป่วย',
            'code' => 'appointment',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 42,
            'function_type_id' => 2,
            'name' => 'ผู้รับผิดชอบระบบการนัดหมาย',
            'code' => 'appointment_manager',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 43,
            'function_type_id' => 1,
            'name' => 'ตรวจรักษาผู้ป่วย',
            'code' => 'doctor_workbench',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 44,
            'function_type_id' => 2,
            'name' => 'ทะเบียนใบรับรองแพทย์',
            'code' => 'doctor_cert_list',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 45,
            'function_type_id' => 2,
            'name' => 'ตรวจ/ให้คำปรึกษาผู้ป่วยsti/vct',
            'code' => 'doctor_sti_counseling',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 46,
            'function_type_id' => 2,
            'name' => 'ทะเบียนผู้ป่วยที่แพทย์ตรวจ',
            'code' => 'doctor_patient_list',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 47,
            'function_type_id' => 2,
            'name' => 'แสดงข้อมูลemrเฉพาะrtfview',
            'code' => 'doctor_emr_viewonly_rtf',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 48,
            'function_type_id' => 2,
            'name' => 'ระบบห้องทำงานแพทย์mini',
            'code' => 'doctor_workbench_mini',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 49,
            'function_type_id' => 2,
            'name' => 'แสดงemrที่ถูกกำหนดว่ามีผลวินิจฉัยที่เสี่ยง(icd10_risk)',
            'code' => 'emr_view_risk_icd10',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 50,
            'function_type_id' => 2,
            'name' => 'ลงนามบันทึกการตรวจรักษาworkbench',
            'code' => 'doctor_opd_sign',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 51,
            'function_type_id' => 1,
            'name' => 'ตรวจรักษาผู้ป่วย',
            'code' => 'dental_workbench',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 52,
            'function_type_id' => 2,
            'name' => 'ทันตกรรม:วางแผนการรักษา',
            'code' => 'dental_plan',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 53,
            'function_type_id' => 2,
            'name' => 'ทันตกรรม:อนุมัติแผนการรักษา',
            'code' => 'dental_plan_approve',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 54,
            'function_type_id' => 2,
            'name' => 'approveรายการตรวจรักษาทันตกรรม',
            'code' => 'dental_instr_approve',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 55,
            'function_type_id' => 2,
            'name' => 'dentalcaserequest',
            'code' => 'dental_case_request',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 56,
            'function_type_id' => 2,
            'name' => 'นักศึกษาทันตแพทย์',
            'code' => 'dental_student',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 57,
            'function_type_id' => 2,
            'name' => 'รายงานผลx-ray',
            'code' => 'xray_report',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 58,
            'function_type_id' => 2,
            'name' => 'radiologyrequest',
            'code' => 'radiology_request',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 59,
            'function_type_id' => 2,
            'name' => 'radiologyfilmreport',
            'code' => 'radiology_film_report',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 60,
            'function_type_id' => 2,
            'name' => 'radiologydoctorreport',
            'code' => 'radiology_doctor_report',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 61,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:ข้อมูลพื้นฐานเอ็กซ์เรย์',
            'code' => 'su_setting_xray',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 62,
            'function_type_id' => 2,
            'name' => 'ออกแบบใบrequestx-ray',
            'code' => 'su_setting_xray_form_design',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 63,
            'function_type_id' => 2,
            'name' => 'บันทึกค่าบริการระบบงานรังสี',
            'code' => 'xray_service_entry',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 64,
            'function_type_id' => 2,
            'name' => 'ห้องแพทย์จองx-rayพิเศษ',
            'code' => 'reserve_xray_request',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 65,
            'function_type_id' => 2,
            'name' => 'ทะเบียนจองx-rayพิเศษ',
            'code' => 'reserve_xray_register',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 66,
            'function_type_id' => 2,
            'name' => 'รายงานผลlab',
            'code' => 'lab_report',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 67,
            'function_type_id' => 2,
            'name' => 'laboratoryrequest',
            'code' => 'lab_request',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 68,
            'function_type_id' => 2,
            'name' => 'พิมพ์ใบรายงานผลlab',
            'code' => 'lab_result_print',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 69,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:กำหนดสิทธิเจ้าหน้าที่ห้องlab',
            'code' => 'su_setting_lab_officer',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 70,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:รายการlabtests',
            'code' => 'su_setting_lab_items',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 71,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:รายการใบสั่งlab',
            'code' => 'su_setting_lab_form_design',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 72,
            'function_type_id' => 2,
            'name' => 'lab:ดูผลlabที่สั่งแบบanonymousโดยผู้อื่น',
            'code' => 'lab_view_anonymous_req',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 73,
            'function_type_id' => 2,
            'name' => 'ดูผลlab',
            'code' => 'lab_request_report',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 74,
            'function_type_id' => 2,
            'name' => 'ใช้งานระบบlabpathology',
            'code' => 'lab_patho_report',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 75,
            'function_type_id' => 2,
            'name' => 'ทะเบียนตรวจlabพิเศษ',
            'code' => 'lab_order_no_registry',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 76,
            'function_type_id' => 2,
            'name' => 'ใช้งานระบบห้องlab',
            'code' => 'lab_menu',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 77,
            'function_type_id' => 2,
            'name' => 'ยืนยันผลlabpatho',
            'code' => 'lab_patho_report_confirm',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 78,
            'function_type_id' => 2,
            'name' => 'ห้องชำระเงิน',
            'code' => 'finance',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 79,
            'function_type_id' => 2,
            'name' => 'เบิกสมุดออกใบเสร็จรับเงิน',
            'code' => 'rcpt_bill_list',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 80,
            'function_type_id' => 2,
            'name' => 'ยกเลิกใบเสร็จรับเงิน',
            'code' => 'finance_rcpt_abort',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 81,
            'function_type_id' => 2,
            'name' => 'โอนรายการชำระเงิน',
            'code' => 'finance_transfer_01_03',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 82,
            'function_type_id' => 2,
            'name' => 'โอนรายการลูกหนี้',
            'code' => 'finance_transfer_02',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 83,
            'function_type_id' => 2,
            'name' => 'resetราการค่าใช้จ่าย',
            'code' => 'finance_reset',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 84,
            'function_type_id' => 2,
            'name' => 'recalcipdprice',
            'code' => 'ipd_recalc_price',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 85,
            'function_type_id' => 2,
            'name' => 'ยกเลิกรายการค้างชำระ',
            'code' => 'finance_arrear_abort',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 86,
            'function_type_id' => 2,
            'name' => 'ตรวจรักษาผู้ป่วย(ฉุกเฉิน)',
            'code' => 'er_workbench',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 87,
            'function_type_id' => 2,
            'name' => 'ส่งตัวสังเกตุอาการ',
            'code' => 'er_observe',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 88,
            'function_type_id' => 2,
            'name' => 'ems',
            'code' => 'er_ems',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 89,
            'function_type_id' => 2,
            'name' => 'บันทึกยาผู้ป่วยopd',
            'code' => 'dispensing_opd',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 90,
            'function_type_id' => 2,
            'name' => 'บันทึกยาผู้ป่วยipd',
            'code' => 'dispensing_ipd',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 91,
            'function_type_id' => 2,
            'name' => 'dis',
            'code' => 'pharmacy_dis',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 92,
            'function_type_id' => 2,
            'name' => 'druginteraction',
            'code' => 'di',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 93,
            'function_type_id' => 2,
            'name' => 'ให้คำปรึกษาการใช้ยา',
            'code' => 'drug_counseling',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 94,
            'function_type_id' => 2,
            'name' => 'druguseevaluation',
            'code' => 'drug_due',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 95,
            'function_type_id' => 2,
            'name' => 'drugrelatedproblems',
            'code' => 'drug_drp',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 96,
            'function_type_id' => 2,
            'name' => 'adversedrugreaction',
            'code' => 'drug_adr',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 97,
            'function_type_id' => 2,
            'name' => 'drugincompatibility',
            'code' => 'drug_incompatibility',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 98,
            'function_type_id' => 2,
            'name' => 'itempriceplan',
            'code' => 'drug_items_price_plan',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 99,
            'function_type_id' => 2,
            'name' => 'druglabinteractioneffect',
            'code' => 'drug_lab_interaction',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 100,
            'function_type_id' => 2,
            'name' => 'medicationerrorreport',
            'code' => 'drug_med_error',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 101,
            'function_type_id' => 2,
            'name' => 'แก้ไขรายการสั่งยาopd',
            'code' => 'drug_presc_change',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 102,
            'function_type_id' => 2,
            'name' => 'แก้ไขประเภทการชำระเงินใบสั่งยา',
            'code' => 'drug_presc_paidst',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 103,
            'function_type_id' => 2,
            'name' => 'ลบรายการยา/ค่าบริการopd',
            'code' => 'dispensing_delete_opd',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 104,
            'function_type_id' => 2,
            'name' => 'ลบรายการยา/ค่าบริการipd',
            'code' => 'dispensing_delete_ipd',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 105,
            'function_type_id' => 2,
            'name' => 'lockใบสั่งยาผู้ป่วยใน',
            'code' => 'dispensing_order_lock',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 106,
            'function_type_id' => 2,
            'name' => 'ปลดlockใบสั่งยาผู้ป่วยใน',
            'code' => 'dispensing_order_unlock',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 107,
            'function_type_id' => 2,
            'name' => 'แก้ไขราคาในใบสั่งยา',
            'code' => 'dispensing_change_price',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 108,
            'function_type_id' => 2,
            'name' => 'บันทึกprofileยาผู้ป่วยใน',
            'code' => 'ipd_profile_entry',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 109,
            'function_type_id' => 2,
            'name' => 'ลบใบสั่งยาipd',
            'code' => 'dispensing_ipd_rx_delete',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 110,
            'function_type_id' => 2,
            'name' => 'เลือกคลังค้างจ่าย',
            'code' => 'disp_own_pay_substock',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 111,
            'function_type_id' => 2,
            'name' => 'เปลี่ยนชื่อผู้สั่งยา',
            'code' => 'disp_change_rx_doctor',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 112,
            'function_type_id' => 2,
            'name' => 'สั่งใช้ยาที่เกิดdruginteractionที่ห้ามสั่ง',
            'code' => 'rx_allow_di_order',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 113,
            'function_type_id' => 2,
            'name' => 'บันทึกข้อมูลคลังสินค้า',
            'code' => 'inventory_entry',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 114,
            'function_type_id' => 2,
            'name' => 'คลัง:ข้อมูลรายการสินค้า',
            'code' => 'su_setting_stock_item',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 115,
            'function_type_id' => 2,
            'name' => 'คลัง:ข้อมูลกรรมการตรวจรับ',
            'code' => 'su_setting_stock_committee',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 116,
            'function_type_id' => 2,
            'name' => 'คลัง:ข้อมูลหน่วยจ่าย',
            'code' => 'su_setting_inv_stock_department',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 117,
            'function_type_id' => 2,
            'name' => 'คลัง:ข้อมูลผู้ผลิต/ทำตลาด',
            'code' => 'su_setting_stock_supplier',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 118,
            'function_type_id' => 2,
            'name' => 'คลัง:ข้อมูลผู้จำหน่าย',
            'code' => 'su_setting_stock_vendor',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 119,
            'function_type_id' => 2,
            'name' => 'คลัง:ข้อมูลศุนย์ต้นทุน',
            'code' => 'su_setting_stock_cost_cener',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 120,
            'function_type_id' => 2,
            'name' => 'คลัง:รายการคลังสินค้า',
            'code' => 'su_setting_stock_warehouse',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 121,
            'function_type_id' => 2,
            'name' => 'คลัง:รายการประเภทสินค้า',
            'code' => 'su_setting_stock_item_type',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 122,
            'function_type_id' => 2,
            'name' => 'คลัง:ข้อมูลราคาสินค้า',
            'code' => 'su_setting_stock_item_price',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 123,
            'function_type_id' => 2,
            'name' => 'หน่วยจ่าย:prepack',
            'code' => 'stock_prepack',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 124,
            'function_type_id' => 2,
            'name' => 'สูตรปรุงยา',
            'code' => 'su_setting_stock_formula_cmpd',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 125,
            'function_type_id' => 2,
            'name' => 'หน่วยบรรจุสินค้า',
            'code' => 'su_setting_stock_masterunit',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 126,
            'function_type_id' => 2,
            'name' => 'กลุ่มรายการสินค้า',
            'code' => 'su_setting_stock_class',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 127,
            'function_type_id' => 2,
            'name' => 'กลุ่มย่อยกลุ่มรายการสินค้า',
            'code' => 'su_setting_stock_sub_class',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 128,
            'function_type_id' => 2,
            'name' => 'ตำแหน่งกรรมการตรวจรับ',
            'code' => 'su_setting_stock_committee_position',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 129,
            'function_type_id' => 2,
            'name' => 'กลุ่มกรรมการตรวจรับ',
            'code' => 'su_setting_stock_committee_group',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 130,
            'function_type_id' => 2,
            'name' => 'กำหนดประเภทงบประมาณ',
            'code' => 'su_setting_stock_budget',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 131,
            'function_type_id' => 2,
            'name' => 'บันทึกใบสั่งซื้อสินค้า(po)',
            'code' => 'inv_po',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 132,
            'function_type_id' => 2,
            'name' => 'คลังย่อย:ตรวจนับสินค้าในคลังย่อย',
            'code' => 'stock_department_adjust',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 133,
            'function_type_id' => 2,
            'name' => 'บริษัทผู้ผลิต',
            'code' => 'su_setting_stock_manufacturer',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 134,
            'function_type_id' => 2,
            'name' => 'อนุมัติรายการขอเบิกจากหน่วยจ่าย',
            'code' => 'stock_subdraw_approve',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 135,
            'function_type_id' => 2,
            'name' => 'จัดส่งสินค้าจากคลังให้หน่วยจ่าย',
            'code' => 'stock_subdraw_transfer',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 136,
            'function_type_id' => 2,
            'name' => 'บันทึกจ่ายสินค้าให้หน่วยย่อยอื่น',
            'code' => 'stock_department_transfer',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 137,
            'function_type_id' => 2,
            'name' => 'คลัง:กำหนดค่าlockการใช้งานหน่วยจ่าย',
            'code' => 'su_stock_dep_locked',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 138,
            'function_type_id' => 2,
            'name' => 'ใช้ระบบเบิกจ่ายmanual',
            'code' => 'inventory_dep_manual',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 139,
            'function_type_id' => 2,
            'name' => 'อนุมัติการจ่ายสินค้าให้หน่วยย่อยอื่น',
            'code' => 'stock_department_transfer_approve',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 140,
            'function_type_id' => 2,
            'name' => 'รับสินค้าคืนจากหน่วยจ่ายเข้าคลัง',
            'code' => 'stock_wh_dep_return',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 141,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:clearinventorydata',
            'code' => 'su_clear_inv_data',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 142,
            'function_type_id' => 2,
            'name' => 'คลัง:ข้อมูลผู้แทน',
            'code' => 'su_setting_stock_rep',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 143,
            'function_type_id' => 2,
            'name' => 'inv:อนุมัติใบขอจัดซื้อสินค้า',
            'code' => 'inventory_request_approve',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 144,
            'function_type_id' => 2,
            'name' => 'inv:ทำแผนจัดซื้อ',
            'code' => 'inventory_plan',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 145,
            'function_type_id' => 2,
            'name' => 'ใช้งานsetdefaultwarehouse',
            'code' => 'inv_set_default_warehouse',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 146,
            'function_type_id' => 2,
            'name' => 'รับบริจาคคลังใหญ่',
            'code' => 'inv_wh_donation',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 147,
            'function_type_id' => 2,
            'name' => 'รับบริจาคคลังย่อย',
            'code' => 'inv_dep_donation',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 148,
            'function_type_id' => 2,
            'name' => 'invadmin',
            'code' => 'inv_admin',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 149,
            'function_type_id' => 2,
            'name' => 'โอนเปลี่ยนlotหน่วยจ่าย',
            'code' => 'inv_dep_lot_transfer',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 150,
            'function_type_id' => 2,
            'name' => 'โอนสินค้าให้หน่วยจ่าย',
            'code' => 'inv_wh_dep_transfer',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 151,
            'function_type_id' => 2,
            'name' => 'คลังย่อย:ขอเบิกสินค้าจากคลัง',
            'code' => 'inv_dep_subdraw',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 152,
            'function_type_id' => 2,
            'name' => 'คลังย่อย:ใบขอจัดหา(ppr)',
            'code' => 'inv_dep_ppr',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 153,
            'function_type_id' => 2,
            'name' => 'คลังย่อย:ขอเบิกสินค้าจากหน่วยจ่าย',
            'code' => 'inv_dep_transfer1',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 154,
            'function_type_id' => 2,
            'name' => 'คลังย่อย:โอนสินค้า',
            'code' => 'inv_dep_transfer2',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 155,
            'function_type_id' => 2,
            'name' => 'รับสินค้าจากsap',
            'code' => 'inv_sap_imp',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 156,
            'function_type_id' => 2,
            'name' => 'ดูlogการรับสินค้าจากsap',
            'code' => 'inv_sap_imp_log',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 157,
            'function_type_id' => 2,
            'name' => 'สิทธิการอนุมัติชั้นที่2',
            'code' => 'inv_authorize_stage_2',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 158,
            'function_type_id' => 2,
            'name' => 'ข้อมูลพื้นฐานโภชนาการ',
            'code' => 'su_setting_nutrition',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 159,
            'function_type_id' => 2,
            'name' => 'บันทึกเบิกจ่ายอาหาร',
            'code' => 'nutrition_expense',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 160,
            'function_type_id' => 2,
            'name' => 'รายการอาหารที่สั่ง',
            'code' => 'nutrition_foodlist',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 161,
            'function_type_id' => 2,
            'name' => 'สังอาหารผู้ป่วยใน',
            'code' => 'nutrition_ipd',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 162,
            'function_type_id' => 2,
            'name' => 'สั่งอาหารเจ้าหน้าที่',
            'code' => 'nutrition_staff',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 163,
            'function_type_id' => 2,
            'name' => 'สั่งอาหารผู้ป่วยนอก',
            'code' => 'nutrition_opd',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 164,
            'function_type_id' => 2,
            'name' => 'ระบบconsultโภชนาการ',
            'code' => 'nutrition_consult_entry',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 165,
            'function_type_id' => 2,
            'name' => 'orderconsultโภชนาการ',
            'code' => 'nutrition_consult_order',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 166,
            'function_type_id' => 2,
            'name' => 'คัดกรองconsultโภชนาการ',
            'code' => 'nutrition_consult_screen',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 167,
            'function_type_id' => 2,
            'name' => 'รายงานระบบconsultโภชนาการ',
            'code' => 'nutrition_consult_report',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 168,
            'function_type_id' => 2,
            'name' => 'nutritionaccount',
            'code' => 'officer_nutrition_account',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 169,
            'function_type_id' => 2,
            'name' => 'รายการอาหาร',
            'code' => 'nutrition',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 170,
            'function_type_id' => 2,
            'name' => 'สั่งอาหารผู้ป่วยนอก.',
            'code' => 'opd_nutrition_order',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 171,
            'function_type_id' => 2,
            'name' => 'สั่งอาหารเจ้าหน้าที่.',
            'code' => 'officer_nutrition_list',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 172,
            'function_type_id' => 2,
            'name' => 'ตรวจสอบการสั่งอาหารipd',
            'code' => 'nutrition_check_food_order',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 173,
            'function_type_id' => 2,
            'name' => 'บันทึกงานผ้า',
            'code' => 'supply1_entry',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 174,
            'function_type_id' => 2,
            'name' => 'ข้อมูลพื้นฐานงานผ้า',
            'code' => 'su_setting_supply1',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 175,
            'function_type_id' => 2,
            'name' => 'บันทึกข้อมูลสังคมสงเคราะห์',
            'code' => 'social_entry',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 176,
            'function_type_id' => 2,
            'name' => 'ข้อมูลพื้นฐานสังคมสงเคราะห์',
            'code' => 'su_setting_emp_social',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 177,
            'function_type_id' => 2,
            'name' => 'บันทึกข้อมูลตรวจสุขภาพ',
            'code' => 'checkup_report',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 178,
            'function_type_id' => 2,
            'name' => 'จัดการpackageระบบตรวจสุขภาพ',
            'code' => 'checkup_manage_package',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 179,
            'function_type_id' => 2,
            'name' => 'ตั้งค่าระบบตรวจสุขภาพ',
            'code' => 'checkup_setting',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 180,
            'function_type_id' => 2,
            'name' => 'ตั้งค่าทะเบียนน้ำ',
            'code' => 'checkup_setting_water',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 181,
            'function_type_id' => 2,
            'name' => 'ตั้งค่าโรงอาหาร',
            'code' => 'checkup_setting_food_court',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 182,
            'function_type_id' => 2,
            'name' => 'บันทึกข้อมูลผ่าตัด',
            'code' => 'operation_report',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 183,
            'function_type_id' => 2,
            'name' => 'สั่งผ่าตัด',
            'code' => 'operation_request',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 184,
            'function_type_id' => 2,
            'name' => 'setผ่าตัด',
            'code' => 'operation_set',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 185,
            'function_type_id' => 2,
            'name' => 'แก้ไขข้อมูลsetผ่าตัดของผู้อื่น',
            'code' => 'operation_set_edit',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 186,
            'function_type_id' => 2,
            'name' => 'ลงทะเบียนผ่าตัด',
            'code' => 'operation_set_report',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 187,
            'function_type_id' => 2,
            'name' => 'บันทึกข้อมูลระบบงานปลอดเชื้อ',
            'code' => 'supply2_entry',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 188,
            'function_type_id' => 2,
            'name' => 'บันทึกเลื่อนนัด',
            'code' => 'appointment_pending_entry',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 189,
            'function_type_id' => 2,
            'name' => 'บันทึกข้อมูลkpi',
            'code' => 'kpi_entry',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 190,
            'function_type_id' => 2,
            'name' => 'บันทึกข้อมูลgis',
            'code' => 'su_setting_officer_group',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 191,
            'function_type_id' => 2,
            'name' => 'admitผู้ป่วย',
            'code' => 'ipd_register',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 192,
            'function_type_id' => 2,
            'name' => 'จองห้อง',
            'code' => 'ipd_room_reserve',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 193,
            'function_type_id' => 2,
            'name' => 'สร้างglobalipdordertemplate',
            'code' => 'ipd_do_template_global_add',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 194,
            'function_type_id' => 2,
            'name' => 'ยกเลิกการadmitผู้ป่วย',
            'code' => 'ipd_regist_cancel',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 195,
            'function_type_id' => 2,
            'name' => 'กำหนดค่าข้อมูลห้องคลอด',
            'code' => 'su_setting_labor',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 196,
            'function_type_id' => 2,
            'name' => 'แก้ไขวันที่รับadmit',
            'code' => 'ipd_change_regdate',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 197,
            'function_type_id' => 2,
            'name' => 'ipd:สถานะการเงิน:เปิด',
            'code' => 'ipd_finance_open',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 198,
            'function_type_id' => 2,
            'name' => 'ipd:สถานะการเงิน:ตรวจสอบ',
            'code' => 'ipd_finance_check',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 199,
            'function_type_id' => 2,
            'name' => 'ipd:สถานะการเงิน:ยืนยันสถานะ',
            'code' => 'ipd_finance_confirm',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 200,
            'function_type_id' => 2,
            'name' => 'ปิดค่าใช้จ่ายผู้ป่วยใน',
            'code' => 'ipd_finance_lock',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 201,
            'function_type_id' => 2,
            'name' => 'เห็นข้อมูลผู้ป่วยทุกตึก',
            'code' => 'view_all_ward',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 202,
            'function_type_id' => 2,
            'name' => 'บันทึกรับchartผู้ป่วยใน',
            'code' => 'ipd_chart_loc_entry',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 203,
            'function_type_id' => 2,
            'name' => 'scanเอกสารใบสั่งยาผู้ป่วยใน',
            'code' => 'ipd_rx_order_scan',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 204,
            'function_type_id' => 2,
            'name' => 'ยืนยันการจำหน่ายผู้ป่วย',
            'code' => 'ipd_confirm_discharge',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 205,
            'function_type_id' => 2,
            'name' => 'บันทึกสั่งยาทั้งตึก',
            'code' => 'batch_rx_order_ward',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 206,
            'function_type_id' => 2,
            'name' => 'บันทึกสั่งยาทุกตึก',
            'code' => 'batch_rx_order_all_ward',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 207,
            'function_type_id' => 2,
            'name' => 'ย้ายเตียงผู้ป่วย',
            'code' => 'ipt_bedmove',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 208,
            'function_type_id' => 2,
            'name' => 'พิมพ์เอกสารscanpdfipd',
            'code' => 'ipd_print_scan_pdf',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 209,
            'function_type_id' => 2,
            'name' => 'auditdichargesummary',
            'code' => 'ipd_dch_summary_audit',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 210,
            'function_type_id' => 2,
            'name' => 'บันทึกdischargesummary',
            'code' => 'ipd_dch_summary_entry',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 211,
            'function_type_id' => 2,
            'name' => 'บันทึกdoctororder',
            'code' => 'ipd_doctor_order_entry',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 212,
            'function_type_id' => 2,
            'name' => 'พิมพ์เอกสารpdfaudit',
            'code' => 'ipd_pdf_audit',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 213,
            'function_type_id' => 2,
            'name' => 'บันทึกข้อมูลบุคลากร',
            'code' => 'hr_entry',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 214,
            'function_type_id' => 2,
            'name' => 'บันทึกเวลาขึ้นเวร',
            'code' => 'hr_workshift',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 215,
            'function_type_id' => 2,
            'name' => 'กำหนดค่าข้อมูลhr',
            'code' => 'su_setting_hr',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 216,
            'function_type_id' => 2,
            'name' => 'บุคลากร:ทะเบียนพนักงาน',
            'code' => 'hr_employee',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 217,
            'function_type_id' => 2,
            'name' => 'บุคลากร:ทะเบียนลางาน',
            'code' => 'hr_employee_work',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 218,
            'function_type_id' => 2,
            'name' => 'บุคลากร:ทะเบียนสวัสดิการ',
            'code' => 'hr_employee_welfare',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 219,
            'function_type_id' => 2,
            'name' => 'บุคลากร:ข้อมูลการไปราชการ',
            'code' => 'hr_employee_official',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 220,
            'function_type_id' => 2,
            'name' => 'บุคลากร:ตารางการทำงาน',
            'code' => 'hr_employee_work_time',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 221,
            'function_type_id' => 2,
            'name' => 'บุคลากร:ปฎิบัติงานในองค์กรระหว่างประเทศ',
            'code' => 'hr_employee_foreign',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 222,
            'function_type_id' => 2,
            'name' => 'บุคลากร:ลงเวลาทำงาน',
            'code' => 'hr_employee_fingerscan',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 223,
            'function_type_id' => 2,
            'name' => 'บุคลากร:ลงข้อมูลรายบุคคล',
            'code' => 'hr_employee_individual',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 224,
            'function_type_id' => 2,
            'name' => 'บันทึกข้อมูลครุภัณฑ์',
            'code' => 'durable_entry',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 225,
            'function_type_id' => 2,
            'name' => 'ครุภัณฑ์:บันทึกการส่งซ่อม',
            'code' => 'durable_repair',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 226,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:ข้อมูลพื้นฐานครุภัณฑ์',
            'code' => 'su_setting_durable',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 227,
            'function_type_id' => 2,
            'name' => 'บันทึกข้อมูลสารบรรณอิเล็คทรอนิกส์',
            'code' => 'edoc_entry',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 228,
            'function_type_id' => 2,
            'name' => 'สารบรรณอิเล็กทรอนิกส์:ทะเบียนหนังสือรับเข้า',
            'code' => 'edoc_receive',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 229,
            'function_type_id' => 2,
            'name' => 'สารบรรณอิเล็กทรอนิกส์:ทะเบียนหนังสือส่งออก',
            'code' => 'edoc_out',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 230,
            'function_type_id' => 2,
            'name' => 'สารบรรณอิเล็กทรอนิกส์:ทะเบียนหนังสือฝ่าย',
            'code' => 'edoc_department',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 231,
            'function_type_id' => 2,
            'name' => 'สารบรรณอิเล็กทรอนิกส์:ลงรับหนังสือ',
            'code' => 'edoc_sign',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 232,
            'function_type_id' => 2,
            'name' => 'สารบรรณอิเล็กทรอนิกส์:ตั้งค่า',
            'code' => 'su_setting_edoc',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 233,
            'function_type_id' => 2,
            'name' => 'เข้าใช้งานระบบ',
            'code' => 'login',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 234,
            'function_type_id' => 2,
            'name' => 'บันทึกข้อมูลระบบกายภาพบำบัด',
            'code' => 'physic_entry',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 235,
            'function_type_id' => 2,
            'name' => 'ข้อมูลพื้นฐานระบบงานกายภาพบำบัด',
            'code' => 'su_setting_physic',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 236,
            'function_type_id' => 2,
            'name' => 'บริหารความเสี่ยง',
            'code' => 'risk_mgm',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 237,
            'function_type_id' => 2,
            'name' => 'บันทึกข้อมูลขอโลหิต',
            'code' => 'bloodbank_request',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 238,
            'function_type_id' => 2,
            'name' => 'บันทึกข้อมูลโลหิต',
            'code' => 'bloodbank_entry',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 239,
            'function_type_id' => 2,
            'name' => 'ระบบธนาคารเลือด',
            'code' => 'blood_bank',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 240,
            'function_type_id' => 2,
            'name' => 'บันทึกใบส่งตัว',
            'code' => 'emp_refer_entry',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 241,
            'function_type_id' => 2,
            'name' => 'ข้อมูลพื้นฐานใบส่งตัว',
            'code' => 'su_setting_emp_refer',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 242,
            'function_type_id' => 2,
            'name' => 'บันทึกใบเบิกพนักงาน',
            'code' => 'emp_expense_entry',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 243,
            'function_type_id' => 2,
            'name' => 'ระบบissuetracker',
            'code' => 'issue',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 244,
            'function_type_id' => 2,
            'name' => 'งานpcuบัญชี1',
            'code' => 'pcu_account1',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 245,
            'function_type_id' => 2,
            'name' => 'งานpcuบัญชี2',
            'code' => 'pcu_account2',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 246,
            'function_type_id' => 2,
            'name' => 'งานpcuบัญชี3',
            'code' => 'pcu_account3',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 247,
            'function_type_id' => 2,
            'name' => 'งานpcuบัญชี4',
            'code' => 'pcu_account4',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 248,
            'function_type_id' => 2,
            'name' => 'งานpcuบัญชี5',
            'code' => 'pcu_account5',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 249,
            'function_type_id' => 2,
            'name' => 'งานpcuบัญชี6',
            'code' => 'pcu_account6',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 250,
            'function_type_id' => 2,
            'name' => 'งานpcuบัญชี7',
            'code' => 'pcu_account7',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 251,
            'function_type_id' => 2,
            'name' => 'งานpcuบัญชี8',
            'code' => 'pcu_account8',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 252,
            'function_type_id' => 2,
            'name' => 'ทะเบียนผู้ป่วยโรคเรื้อรัง',
            'code' => 'chronic_registry',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 253,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:ข้อมูลพื้นฐานจิตเวช',
            'code' => 'su_setting_psych',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 254,
            'function_type_id' => 2,
            'name' => 'บันทึกข้อมูลระบบจิตเวช',
            'code' => 'psych_entry',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 255,
            'function_type_id' => 2,
            'name' => 'ลงทะเบียนนิติจิตเวช',
            'code' => 'forensic_psych_regis',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 256,
            'function_type_id' => 2,
            'name' => 'รายงานผลนิติจิตเวช',
            'code' => 'forensic_psych_result',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 257,
            'function_type_id' => 2,
            'name' => 'บันทึกข้อมูลคลินิกarv',
            'code' => 'arv_clinic_entry',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 258,
            'function_type_id' => 2,
            'name' => 'ระบบจัดการโครงการ',
            'code' => 'project_entry',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 259,
            'function_type_id' => 2,
            'name' => 'อนุมัติแผนจัดซื้อ',
            'code' => 'project_procurement_approve',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 260,
            'function_type_id' => 2,
            'name' => 'ส่งข้อมูล43แฟ้ม',
            'code' => 'data_exp_f43',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 261,
            'function_type_id' => 2,
            'name' => 'ส่งข้อมูลeclaim',
            'code' => 'data_exp_eclaim',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 262,
            'function_type_id' => 2,
            'name' => 'เข้าทะเบียนงานhomehealthcare',
            'code' => 'hhc_regist',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 263,
            'function_type_id' => 2,
            'name' => 'บันทึกสถานะการตรวจสอบค่าใช้จ่ายศูนย์จัดเก็บipd',
            'code' => 'ipd_coll_status_entry',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 264,
            'function_type_id' => 2,
            'name' => 'ออกแบบใบประเมิน',
            'code' => 'assetment_design',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 265,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:ข้อมูลพื้นฐานผังค่าบริการ',
            'code' => 'su_setting_pttype_policy',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 266,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:ข้อมูลพื้นฐานสิทธิการรักษา',
            'code' => 'su_setting_pttype',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 267,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:กลุ่มผู้ใช้งาน',
            'code' => 'su_setting_officer_group',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 268,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:ผู้ใช้งาน',
            'code' => 'su_setting_officer',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 269,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:รายการยา',
            'code' => 'su_setting_drugitems',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 270,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:รายการเวชภัณฑ์/ค่ารักษา',
            'code' => 'su_setting_nondrugitems',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 271,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:วิธีการใช้ยาmode2',
            'code' => 'su_setting_drugusage_mode2',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 272,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:วิธีการใช้ยาmode3',
            'code' => 'su_setting_drugusage_mode3',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 273,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:ใช้sqlquery',
            'code' => 'su_sql_query',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 274,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:หมวดค่ารักษาพยาบาล',
            'code' => 'su_setting_income',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 275,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:รายการบุคลากรทางการแพทย์',
            'code' => 'su_setting_doctor',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 276,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:รหัสtmtcode',
            'code' => 'su_setting_tmt_code',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 277,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:ห้องตรวจ',
            'code' => 'su_setting_department',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 278,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:สาขา',
            'code' => 'su_setting_hospital_department',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 279,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:ข้อมูลพื้นฐานระบบบุคลากร',
            'code' => 'su_setting_hr',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 280,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:ข้อมูลตึกผู้ป่วยใน',
            'code' => 'su_setting_ward',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 281,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:ข้อมูลห้องผู้ป่วยใน',
            'code' => 'su_setting_roomno',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 282,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:ข้อมูลเตียงผู้ป่วยใน',
            'code' => 'su_setting_bedno',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 283,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:นำเข้าข้อมูลครุภัณฑ์',
            'code' => 'durable_migrate',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 284,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:แผนก',
            'code' => 'su_setting_spclty',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 285,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:ประเภทการมารับบริการ',
            'code' => 'su_setting_ovstist',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 286,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:queuepanel',
            'code' => 'su_setting_queue_panel',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 287,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:videoserver',
            'code' => 'su_setting_video_server',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 288,
            'function_type_id' => 2,
            'name' => 'templateระบบนัดหมาย',
            'code' => 'su_setting_oapp_template',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 289,
            'function_type_id' => 2,
            'name' => 'สำรองข้อมูล',
            'code' => 'sql_backup',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 290,
            'function_type_id' => 2,
            'name' => 'นำข้อมูลสำรองมาใช้',
            'code' => 'sql_restore',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 291,
            'function_type_id' => 2,
            'name' => 'บันทึกแบบฟอร์มstickerprintserver',
            'code' => 'su_sticker_template_save',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 292,
            'function_type_id' => 2,
            'name' => 'รับlinemessage(แจ้งปัญหา)',
            'code' => 'line_msg_support',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 293,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:ประเภทคลินิก',
            'code' => 'su_setting_clinic',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 294,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:ข้อมูลรหัสicd10ที่ห้ามให้รหัสร่วมกัน',
            'code' => 'su_setting_icd10cross',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 295,
            'function_type_id' => 2,
            'name' => 'นำเข้าแบบฟอร์มรายงาน',
            'code' => 'su_report_import',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 296,
            'function_type_id' => 2,
            'name' => 'ออกแบบรายงาน',
            'code' => 'su_report_design',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 297,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:ข้อมูลพื้นฐานผ่าตัดและวิสัญญี',
            'code' => 'su_setting_operation',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 298,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:ข้อมูลพื้นฐานจิตเวช',
            'code' => 'su_setting_psy',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 299,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:ข้อมูลพื้นฐานงานกายภาพบำบัด',
            'code' => 'su_setting_physic',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 300,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:ข้อมูลพื้นฐานงานรังสี',
            'code' => 'su_setting_radiology',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 301,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:ข้อมูลพื้นฐานงานผ่าตัด',
            'code' => 'su_setting_or',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 302,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:หัตถการห้องตรวจ',
            'code' => 'su_setting_er_oper_code',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 303,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:หัตถการผู้ป่วยใน',
            'code' => 'su_setting_ipt_oper_code',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 304,
            'function_type_id' => 2,
            'name' => 'กำหนดค่าระบบlabonline',
            'code' => 'su_labonline',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 305,
            'function_type_id' => 2,
            'name' => 'ข้อมูลการแปลภาษา',
            'code' => 'su_setting_translate',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 306,
            'function_type_id' => 2,
            'name' => 'ข้อมูลบริษัทคู่สัญญา',
            'code' => 'su_setting_company_contact',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 307,
            'function_type_id' => 2,
            'name' => 'recoveryuserlog',
            'code' => 'recovery_user_log',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 308,
            'function_type_id' => 2,
            'name' => 'กำหนดค่ารายการพิมพ์แบบฟอร์ม',
            'code' => 'report_form_template',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 309,
            'function_type_id' => 2,
            'name' => 'ทำการsyncข้อมูลoffline',
            'code' => 'db_sync_offline',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 310,
            'function_type_id' => 2,
            'name' => 'ตั้งค่าระบบงานทันตกรรม',
            'code' => 'su_setting_dental',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 311,
            'function_type_id' => 2,
            'name' => 'admin_deploy',
            'code' => 'su_setting_officer',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 312,
            'function_type_id' => 2,
            'name' => 'admin_upgrade_tool',
            'code' => 'admin_upgrade_tool',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 313,
            'function_type_id' => 2,
            'name' => 'admin_upgrade_structure',
            'code' => 'admin_upgrade_structure',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 314,
            'function_type_id' => 2,
            'name' => 'admin_sql_query',
            'code' => 'sql_query',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 315,
            'function_type_id' => 2,
            'name' => 'admin_report_designer',
            'code' => 'admin_report_designer',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 316,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:ตั้งค่าระบบ',
            'code' => 'admin_system_setting',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 317,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:ข้อมูลพื้นฐานงานปลอดเชื้อ',
            'code' => 'su_setting_supply2',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 318,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:ส่งsystembroascastmessage',
            'code' => 'su_send_broadcast_msg',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 319,
            'function_type_id' => 2,
            'name' => 'ผู้ดูแล:รายการvaccine',
            'code' => 'su_setting_pcu',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 320,
            'function_type_id' => 2,
            'name' => 'กำหนดค่าของผู้ใช้ทุกคน',
            'code' => 'admin_set_all_user_pref',
            'type' => 0,
            'is_active' => 1
         ],
         [
            'order' => 321,
            'function_type_id' => 2,
            'name' => 'alltask',
            'code' => 'all',
            'type' => 0,
            'is_active' => 1
         ]
        ]);
    }
}
