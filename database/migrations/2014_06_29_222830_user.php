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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->integer('role')->default(0);
    
            $table->integer('age')->nullable();
            $table->string('birth_place')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('religion')->nullable();
            $table->enum('gender', ['Laki-laki', 'Perempuan'])->default('Laki-laki');
            $table->enum('marital_status', ['Menikah', 'Belum Menikah'])->default('Belum Menikah');
            $table->integer('no_siblings')->nullable();
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->text('address')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('blood_type')->nullable();
            $table->string('nik')->nullable();
            $table->string('no_kk')->nullable();;
            $table->string('npwp')->nullable();;
            $table->string('bpjs_jamsostek')->nullable();
            $table->string('bpjs_kesehatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
