<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmphuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amphures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('province_id');
            $table->char('code',5)->nullable();
            $table->string('name_th',150)->nullable();
            $table->string('name_en',150)->nullable();
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
        Schema::dropIfExists('amphures');
    }
}
