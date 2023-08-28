{{-- <!-- fees.blade.php -->

@extends('layouts.frontend')

@section('content')
    @php
        use App\Models\Fee;
    @endphp

    @php
        $classId = 1; // Replace with the desired class ID

        $fees = Fee::where('class_id', $classId)->get();
    @endphp

    Iterate over the fees and display the properties
    @foreach($fees as $fee)
        <div class="well">
            <h2><a href="/Fee/{{$fee->id}}">{{$fee->firstname}}</a></h2>
            <small>written on {{$fee->created_at}}</small>
            <p><strong>CLASS_ID:</strong>{{ $fee->class_id }}</p>
            <p><strong>First Name:</strong> {{ $fee->firstname }}</p>
            <p><strong>Last Name:</strong> {{ $fee->lastname }}</p>
            <p><strong>Student ID:</strong> {{ $fee->studentID }}</p>
            <p><strong>Course:</strong> {{ $fee->course }}</p>
            <p><strong>Parents Name:</strong> {{ $fee->parentsname }}</p>
            <p><strong>Phone Number:</strong> {{ $fee->parents }}</p>
            <p><strong>Fee Paid:</strong> {{ $fee->feepaid }}</p>
            <p><strong>Class Teacher:</strong> {{ $fee->classTeacher }}</p>
            <p><strong>Receipt NO:</strong> {{ $fee->receiptNO }}</p>
            <p><strong>Fee Balance:</strong> {{ $fee->feebalance }}</p>
            <!-- Add more fee information as needed -->
        </div>
    @endforeach
@endsection --}}
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
        Schema::create('playground', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('studentID');
            $table->integer('course');
            $table->string('parentsname');
            $table->string('parents');
            $table->integer('feepaid');
            $table->string('classTeacher');
            $table->string('receiptNO');
            $table->integer('feebalance');
            $table->unsignedBigInteger('class_id');
            $table->integer('feebalance');
            $table->timestamps();

            // Add foreign key constraint to class_id column
            $table->foreign('class_id')->references('id')->on('grades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('playground');
    }
};
