<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_position_id')->default(1)->constrained();
            $table->foreignId('prefix_id')->default(1)->constrained();
            $table->foreignId('user_type_id')->default(1)->constrained();
            $table->foreignId('role_id')->default(1)->constrained();
            // $table->unsignedBigInteger('role_id')->default(1);
            // $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->string('avatar')->nullable();
            $table->char('username',20)->nullable();
            $table->string('name')->nullable();
            $table->string('middlename')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email')->unique();
            $table->string('emp_id')->nullable();
            $table->char('cid',13)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->char('phone',10)->nullable();
            $table->string('doctor_code')->nullable();
            $table->char('auto_lockout',1)->default('0');
            $table->char('auto_lockout_minute',10)->default('600');;
            $table->string('line_id')->nullable();
            $table->char('allow_med_template_transfer',1)->default(0);
            $table->char('allow_oper_template_transfer',1)->default(0);
            $table->char('fax',10)->nullable();
            $table->char('no_show_welcome',1)->default(0);
            $table->char('active_status')->default(0);
            $table->date('last_change_password_date')->nullable();
            // $table->char('officer_authentication_type_id',1)->default(0);
            $table->char('send_login_notice',1)->default(0);
            $table->string('line_token')->nullable();
            $table->char('ipd_order_type')->default(0);
            $table->boolean('is_admin')->default(false);
            // $table->char('using_role',1)->default(1);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
