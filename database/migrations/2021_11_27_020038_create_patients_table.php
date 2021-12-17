<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('hos_guid',100)->nullable();
            $table->string('hn',20)->unique();
            $table->char('hid',13)->nullable();
            $table->unsignedBigInteger('prefix_id')->nullable();
            $table->string('name',30)->nullable();
            $table->string('lastname',30)->nullable();
            $table->unsignedBigInteger('patient_addresses_id')->nullable();
            $table->date('birthdate')->nullable();
            $table->unsignedBigInteger('occupation_id')->nullable();
            $table->unsignedBigInteger('citizenship_id')->nullable();  
            $table->unsignedBigInteger('nationality_id')->nullable();    
            $table->unsignedBigInteger('religion_id')->nullable();
            $table->unsignedBigInteger('bloodgroup_id')->nullable();
            $table->unsignedBigInteger('patient_family_id')->nullable();
            
            $table->string('drugallergy',250)->nullable();
            
            //$table->date('deathdate')->nullable();
            // $table->string('clinic',100)->nullable();
            // $table->string('fathername',50)->nullable();
            // $table->date('firstday')->nullable();
            // $table->string('hometel',20)->nullable();
            // $table->string('informaddr',200)->nullable();
            // $table->string('informname',50)->nullable();
            // $table->string('informrelation',50)->nullable();
            // $table->string('informtel',20)->nullable();
            // $table->char('marrystatus',1)->nullable();
            // $table->string('mathername',50)->nullable();
            // $table->unsignedBigInteger('hn_int')->nullable();
            // 
            // $table->string('opdlocation',50)->nullable();
            // $table->char('pttype',2)->nullable();
            
            // $table->char('sex',1)->nullable();
            // $table->string('spsname',50)->nullable();
            // $table->char('truebirthday',1)->nullable();
            // $table->string('workaddr',50)->nullable();
            // $table->string('worktel',20)->nullable();
            // $table->string('hcode',5)->nullable();
            // $table->string('cid',13)->nullable();
            
            // $table->char('educate',1)->nullable();
            // $table->char('family_status',1)->nullable();
            // $table->char('labor_type',1)->nullable();
            // $table->dateTime('last_update')->nullable();
            // $table->char('type_area',1)->nullable();
            // $table->string('road',50)->nullable();
            // $table->string('father_cid',13)->nullable();
            // $table->string('mother_cid',13)->nullable();
            // $table->string('couple_cid',13)->nullable();
            // $table->char('person_type',2)->nullable();
            // $table->string('private_doctor_name',75)->nullable();
            // $table->char('legal_action',1)->nullable();
            // $table->char('death_code504',2)->nullable();
            // $table->string('death_diag',6)->nullable();
            // $table->char('node_id',1)->nullable();
            // $table->char('admit',1)->nullable();
            // $table->string('midname',25)->nullable();
            // $table->string('po_code',5)->nullable();
            // $table->string('fatherlname',30)->nullable();
            // $table->string('motherlname',30)->nullable();
            // $table->string('spslname',30)->nullable();
            // $table->char('country',2)->nullable();
            // $table->string('email',50)->nullable();
            // $table->time('birthtime')->nullable();
            // $table->string('mother_hn',9)->nullable();
            // $table->date('last_visit')->nullable();
            // $table->char('death',1)->nullable();
            // $table->unsignedBigInteger('height')->nullable();
            // $table->char('inregion',1)->nullable();
            // $table->time('reg_time')->nullable();
            // $table->string('oldcode',15)->nullable();
            // $table->char('lang',2)->nullable();
            // $table->string('gov_chronic_id',10)->nullable();
            // $table->char('in_cups',1)->nullable();
            // $table->char('patient_type_id',4)->nullable();
            // $table->string('addr_soi',100)->nullable();
            // $table->string('work_addr',230)->nullable();
            // $table->string('father_hn',9)->nullable();
            // $table->string('alias_name',100)->nullable();
            // $table->char('destroyed',1)->nullable();
            // $table->string('old_addr',250)->nullable();
            // $table->string('fname_soundex',50)->nullable();
            // $table->string('lname_soundex',50)->nullable();
            // $table->string('bloodgroup_rh',5)->nullable();
            // $table->string('passport_no',25)->nullable();
            // $table->string('addressid',6)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
