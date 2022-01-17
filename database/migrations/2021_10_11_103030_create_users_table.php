<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->foreignId('user_types_id')->default(1);
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('activation_token');
            $table->dateTime('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone_number');
            $table->string('check_course')->default(0);
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
};
