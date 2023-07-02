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
        Schema::create('onboarding_photos', function (Blueprint $table) {
            $table->id();
            $table->enum('step', ['Step One', 'Step Two', 'Step Three', 'Step Four', 'Step Five', 'Step Six', 'Step Seven', 'Step Eight']);
            $table->string('document_url');
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
        Schema::dropIfExists('onboarding_photos');
    }
};
