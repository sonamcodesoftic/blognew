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
            $table->bigIncrements('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('password');
            $table->string('phone');
            $table->string('ip')->nullable();
            $table->string('browser')->nullable();
            $table->string('country');
            $table->string('device')->nullable();
            $table->string('key')->nullable();
            $table->string('token')->nullable();
            $table->string('countrycode')->nullable();
            $table->string('fcmtoken')->nullable();
            $table->string('address')->nullable();
            $table->string('profile')->nullable();
            $table->string('state');
            $table->string('nationality')->nullable();
            $table->string('gender')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('city');
            $table->string('pincode');
            $table->string('userrole');
            $table->string('status')->nullable();
            

            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_admin')->nullable();
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
