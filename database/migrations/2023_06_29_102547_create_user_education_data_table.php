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
        Schema::create('user_education_data', function (Blueprint $table) {
            $table->id();
            $table->enum('strata', ['SMA', 'S1', 'S2']);
            $table->integer('year_start');
            $table->integer('year_end')->nullable();
            $table->boolean('pursuing')->default(false);
            $table->string('description');
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
        Schema::dropIfExists('user_education_data');
    }
};
