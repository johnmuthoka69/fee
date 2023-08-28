{{-- @extends('layouts.frontend')

@section('content')
    <div>
        <h3>Edit Fee</h3>

        {!! Form::model($fees, ['route' => ['Fee.update', $fees->id], 'method' => 'PUT']) !!}
        @csrf

        <div class="form-group">
            {{ Form::label('firstname', 'First Name') }}
            {{ Form::text('firstname', $fees->firstname, ['class' => 'form-control', 'placeholder' => 'Enter First Name']) }}
        </div>

        <div class="form-group">
            {{ Form::label('lastname', 'Last Name') }}
            {{ Form::text('lastname', $fees->lastname, ['class' => 'form-control', 'placeholder' => 'Enter Last Name']) }}
        </div>

        <div class="form-group">
            {{ Form::label('studentID', 'Student ID') }}
            {{ Form::text('studentID', $fees->studentID, ['class' => 'form-control', 'placeholder' => 'Enter Student ID']) }}
        </div>

        <div class="form-group">
            {{ Form::label('course', 'Course') }}
            {{ Form::text('course', $fees->course, ['class' => 'form-control', 'placeholder' => 'Enter Course']) }}
        </div>

        <div class="form-group">
            {{ Form::label('parentsname', "Parents' Names") }}
            {{ Form::text('parentsname', $fees->parentsname, ['class' => 'form-control', 'placeholder' => "Enter Parents' Names"]) }}
        </div>

        <div class="form-group">
            {{ Form::label('parents', "Parents' Phone Number") }}
            {{ Form::text('parents', $fees->parents, ['class' => 'form-control', 'placeholder' => "Enter Parents' Phone Number"]) }}
        </div>
        <div class="form-group">
            {{ Form::label('feepais', 'feepaid') }}
            {{ Form::text('course', $fees->feepaid, ['class' => 'form-control', 'placeholder' => 'Enter feepaid']) }}
        </div>

        <div class="form-group">
            {{ Form::label('classTeacher', "classTeacher' Names") }}
            {{ Form::text('classTeacher', $fees->classTeacher, ['class' => 'form-control', 'placeholder' => "Enter ' classTeacher"]) }}
        </div>

        <div class="form-group">
            {{ Form::label('reciptNO,', "reciptNO', reciptNO,") }}
            {{ Form::text('reciptNO,', $fees->reciptNO, ['class' => 'form-control', 'placeholder' => "Enter reciptNO,' reciptNO"]) }}
        </div>

        <div class="form-group">
            {{ Form::label('feebalance,', "feebalance', feebalance,") }}
            {{ Form::text('feebalance,', $fees->feebalance, ['class' => 'form-control', 'placeholder' => "Enter feebalance,' feebalance"]) }}
        </div>
        
        {{ Form::hidden('-method','PUT')}}

        {{ Form::submit('Update', ['class' => 'btn btn-primary']) }}

        {!! Form::close() !!}
    </div>
@endsection
@extends('layouts.frontend') --}}

@section('content')
    <div>
        <h3>Edit Fee</h3>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {!! Form::model($grade12, ['route' => ['grade12.update', $grade12->id], 'method' => 'PUT']) !!}
        @csrf
        {{-- <div class="form-group">
            <label for="class_id">Class</label>
            <select name="class_id" class="form-control">
                @foreach($Grade as $Grade)
                    <option value="{{ $Grades->id }}" {{ $Grade>id == $fee->class_id ? 'selected' : '' }}>
                        {{ $Grade->class_name }}
                    </option>
                @endforeach
            </select> --}}
        </div>
        <div class="form-group">
            {{ Form::label('class_id', 'class_id') }}
            {{ Form::text('class_id', $grade12->class_id, ['class' => 'form-control', 'placeholder' => 'class_id']) }}
        </div>

        <div class="form-group">
            {{ Form::label('firstname', 'First Name') }}
            {{ Form::text('firstname', $grade12->firstname, ['class' => 'form-control', 'placeholder' => 'Enter First Name']) }}
        </div>
        <div class="form-group">
            {{ Form::label('lastname', 'Last Name') }}
            {{ Form::text('lastname', $grade12->lastname, ['class' => 'form-control', 'placeholder' => 'Enter Last Name']) }}
        </div>

        <div class="form-group">
            {{ Form::label('studentID', 'Student ID') }}
            {{ Form::text('studentID', $grade12->studentID, ['class' => 'form-control', 'placeholder' => 'Enter Student ID']) }}
        </div>

        <div class="form-group">
            {{ Form::label('course', 'Course') }}
            {{ Form::text('course',$grade12->course, ['class' => 'form-control', 'placeholder' => 'Enter Course']) }}
        </div>

        <div class="form-group">
            {{ Form::label('parentsname', "Parents' Names") }}
            {{ Form::text('parentsname', $grade12->parentsname, ['class' => 'form-control', 'placeholder' => "Enter Parents' Names"]) }}
        </div>

        <div class="form-group">
            {{ Form::label('parents', "Parents' Phone Number") }}
            {{ Form::text('parents', $grade12->parents, ['class' => 'form-control', 'placeholder' => "Enter Parents' Phone Number"]) }}
        </div>
        <div class="form-group">
            {{ Form::label('feepaid', 'Fee Paid') }}
            {{ Form::text('feepaid', $grade12->feepaid, ['class' => 'form-control', 'placeholder' => 'Enter Fee Paid']) }}
        </div>

        <div class="form-group">
            {{ Form::label('classTeacher', "Class Teacher's Name") }}
            {{ Form::text('classTeacher', $grade12->classTeacher, ['class' => 'form-control', 'placeholder' => "Enter Class Teacher's Name"]) }}
        </div>

        <div class="form-group">
            {{ Form::label('reciptNO', "Receipt Number") }}
            {{ Form::text('reciptNO', $grade12->reciptNO, ['class' => 'form-control', 'placeholder' => "Enter Receipt Number"]) }}
        </div>

        <div class="form-group">
            {{ Form::label('feebalance', "Fee Balance") }}
            {{ Form::text('feebalance', $grade12->feebalance, ['class' => 'form-control', 'placeholder' => "Enter Fee Balance"]) }}
        </div>
        <!-- Rest of the form fields -->

        {{ Form::hidden('_method', 'PUT') }}

        {{ Form::submit('Update', ['class' => 'btn btn-primary']) }}

