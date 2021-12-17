<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateICD10STable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i_c_d10_s', function (Blueprint $table) {
            $table->id();
            $table->string('code',7);
            $table->string('name',200)->nullable();
            $table->char('spclty',2)->nullable();
            $table->string('tname',150)->nullable();
            $table->char('code3',3)->nullable();
            $table->char('code4',1)->nullable();
            $table->char('code5',1)->nullable();
            $table->integer('sex')->nullable();
            $table->char('ipd_valid',1)->nullable();
            $table->char('icd10compat',1)->nullable();
            $table->char('icd10tmcompat',1)->nullable();
            $table->char('active_status',1)->nullable();
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
        Schema::dropIfExists('i_c_d10_s');
    }
}
