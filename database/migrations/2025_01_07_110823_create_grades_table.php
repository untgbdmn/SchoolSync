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
        Schema::create('_grades', function (Blueprint $table) {
            $table->unsignedBigInteger('grade_id')->primary()->autoIncrement();
            $table->unsignedBigInteger('sekolah_id')->nullable();
            $table->string('grade_nama')->nullable();
            $table->unsignedBigInteger('class_capacity')->nullable();
            $table->string('class_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_grades');
    }
};
