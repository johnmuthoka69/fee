<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrade1sTable extends Migration
{
    public function up()
    {
        Schema::create('grade1s', function (Blueprint $table) {
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

    public function down()
    {
        Schema::dropIfExists('grade1s');
    }
}
