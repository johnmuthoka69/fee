<!-- fees.blade.php -->

@extends('layouts.frontend')

@section('content')
    @php
        use App\Models\Fee;
    @endphp

    @php
        $classId = 1; // Replace with the desired class ID

        $fees = Fee::where('class_id', $classId)->get();
    @endphp

    {{-- Iterate over the fees and display the properties --}}
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
@endsection
