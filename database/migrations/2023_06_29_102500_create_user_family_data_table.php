<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_family_data', function (Blueprint $table) {
            $table->id();
            $table->enum('relation', ['Ayah', 'Ibu', 'Saudara']);
            $table->string('name');
            $table->string('birth_place');
            $table->date('birth_date');
            $table->text('address');
            $table->string('last_education');
            $table->string('job');
            $table->timestamps();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_family_data');
    }
};
