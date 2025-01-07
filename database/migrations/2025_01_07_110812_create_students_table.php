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
        Schema::create('_students', function (Blueprint $table) {
            $table->unsignedBigInteger('student_id')->primary()->autoIncrement();
            $table->unsignedBigInteger('sekolah_id')->nullable();
            $table->string('student_nama')->nullable();
            $table->string('no_induk')->nullable();
            $table->string('no_induk_nasional')->nullable();
            $table->unsignedBigInteger('grade_id')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('alamat')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_students');
    }
};
