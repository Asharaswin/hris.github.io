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
        Schema::create('user_contracts', function (Blueprint $table) {
            $table->id();
            $table->enum('job_level', ['CEO', 'Leader', 'Staff'])->default('Staff');
            $table->enum('status', ['Probation', 'Contract', 'Permanent'])->default('Probation');
            $table->date('contract_start');
            $table->integer('duration');
            $table->enum('duration_type', ['Hari', 'Bulan', 'Tahun'])->default('Tahun');
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
        Schema::dropIfExists('user_contracts');
    }
};
