<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('account_type');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('user_name');
            $table->string('refers_id')->nullable();
            $table->string('user_earning')->nullable();
            $table->string('earning_of_refers')->nullable();
            $table->string('account_balance')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('cinic_no');
            $table->string('jazz_cash_no');
            $table->string('country');
            $table->string('state');
            $table->string('city');
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
