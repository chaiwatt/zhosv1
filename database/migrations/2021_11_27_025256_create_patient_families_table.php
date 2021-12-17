<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_families', function (Blueprint $table) {
            $table->id();
            $table->char('relation',1)->nullable()->comment('1=พ่อ 2=แม่ 3=ภรรยา 4=ลูก 5=สามี 6=น้อง 7=พี่ 8=ญาติ');
            $table->string('hn',9)->nullable();
            $table->unsignedBigInteger('prefix_id')->nullable();
            $table->string('name',30)->nullable();
            $table->string('lastname',30)->nullable();
            $table->string('address',50)->nullable();
            $table->char('moo',3)->nullable();
            $table->unsignedBigInteger('province_id')->nullable();
            $table->unsignedBigInteger('amphure_id')->nullable();
            $table->unsignedBigInteger('district_id')->nullable();
            $table->string('phone',50)->nullable();
            $table->string('email',50)->nullable();
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
        Schema::dropIfExists('patient_families');
    }
}
