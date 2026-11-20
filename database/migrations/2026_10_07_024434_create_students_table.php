<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name', length: 100);
            $table->string('nis', length: 10);
            $table->foreignId('classroom_id')->constrained(
                table: 'classrooms',
                indexName: 'classroom_student_id'
            );
            $table->text('address');
            $table->string('email')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
