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
        Schema::create('user_evaluation', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_user_id');
            $table->foreignId('student_user_id');
            $table->foreignId('user_evaluation_reaction_id')->nullable()->constrained('user_evaluation');
            $table->string('rating')->nullable();
            $table->longText('evaluation_text');
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
        Schema::dropIfExists('user_evaluation');
    }
};
