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
        Schema::create('reservations_review', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('reservation_id');
            $table->foreignId('reservation_review_reaction_id')->nullable()->constrained('reservations_review');
            $table->string('rating')->nullable();
            $table->longText('review_text');
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
        Schema::dropIfExists('reservations_review');
    }
};
