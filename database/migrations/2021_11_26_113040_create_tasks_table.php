<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->char('order',4)->nullable();
            $table->unsignedBigInteger('function_type_id')->default(2)->comment('1:menu, 2:function');
            $table->string('name')->nullable();
            $table->string('code',100)->nullable();
            $table->char('type',1)->default(0)->comment('0-task ทั่วไป 1-task admin');  
            $table->char('is_active',1)->default(1);
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
        Schema::dropIfExists('tasks');
    }
}
