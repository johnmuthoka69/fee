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
        Schema::create('grade12', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('studentID')->unique();
            $table->string('course');
            $table->string('parentsname');
            $table->string('parents');
            $table->string('classTeacher');
            $table->string('receiptNO');
            $table->integer('feepaid');
            $table->integer('feebalance');
            $table->unsignedBigInteger('class_id');
            $table->timestamps();
            // $table->foreign('class_id')->references('id')->on('grades');
            $table->foreign('class_id')->references('id')->on('grades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grade12');
    }
};
