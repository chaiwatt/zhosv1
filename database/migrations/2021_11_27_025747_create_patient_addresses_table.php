<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_addresses', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_default')->default(true);
            $table->string('address',50)->nullable();
            $table->char('moo',3)->nullable();
            $table->unsignedBigInteger('province_id')->nullable();
            $table->unsignedBigInteger('amphure_id')->nullable();
            $table->unsignedBigInteger('district_id')->nullable();
            $table->char('postal',5)->nullable();
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
        Schema::dropIfExists('patient_addresses');
    }
}
