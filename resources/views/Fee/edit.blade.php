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
<div class="loginform">
<link rel="stylesheet" href="/assets/css/login.css">
    <div>
        

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
<div>
        {!! Form::model($fees, ['route' => ['Fee.update', $fees->id], 'method' => 'PUT']) !!}
        @csrf
       
    
        <h3>Edit Pupil</h3>

        <div class="form-group field">
            {{ Form::label('firstname', 'First Name') }}
            {{ Form::text('firstname', $fees->firstname, ['class' => 'form-control', 'placeholder' => 'Enter First Name']) }}
        </div>
        <div class="form-group field">
            {{ Form::label('lastname', 'Last Name') }}
            {{ Form::text('lastname', $fees->lastname, ['class' => 'form-control', 'placeholder' => 'Enter Last Name']) }}
        </div>

        <div class="form-group field">
            {{ Form::label('studentID', 'Student ID') }}
            {{ Form::text('studentID', $fees->studentID, ['class' => 'form-control', 'placeholder' => 'Enter Student ID']) }}
        </div>

        <div class="form-group field">
            {{ Form::label('totalfee', 'totalfee') }}
            {{ Form::text('course', $fees->course, ['class' => 'form-control', 'placeholder' => 'Enter Course']) }}
        </div>

        <div class="form-group field">
            {{ Form::label('parentsname', "Parents' Names") }}
            {{ Form::text('parentsname', $fees->parentsname, ['class' => 'form-control', 'placeholder' => "Enter Parents' Names"]) }}
        </div>

        <div class="form-group field">
            {{ Form::label('parents', "Parents' Phone Number") }}
            {{ Form::text('parents', $fees->parents, ['class' => 'form-control', 'placeholder' => "Enter Parents' Phone Number"]) }}
        </div>
        <div class="form-group field">
            {{ Form::label('feepaid', 'Fee Paid') }}
            {{ Form::text('feepaid', $fees->feepaid, ['class' => 'form-control', 'placeholder' => 'Enter Fee Paid']) }}
        </div>

        <div class="form-group field">
            {{ Form::label('classTeacher', "Class Teacher's Name") }}
            {{ Form::text('classTeacher', $fees->classTeacher, ['class' => 'form-control', 'placeholder' => "Enter Class Teacher's Name"]) }}
        </div>

        <div class="form-group field">
            {{ Form::label('receiptNO', "Receipt Number") }}
            {{ Form::text('receiptNO', $fees->receiptNO, ['class' => 'form-control', 'placeholder' => " Receipt Number"]) }}
        </div>

        <div class="form-group field">
            {{ Form::label('feebalance', "Fee Balance") }}
            {{ Form::text('feebalance', $fees->feebalance, ['class' => 'form-control', 'placeholder' => "Enter Fee Balance"]) }}
        </div>
        <!-- Rest of the form fields -->

        {{ Form::hidden('_method', 'PUT') }}

        {{ Form::submit('Update', ['class' => 'btn btn-primary field']) }}
    </div>

    </div>

    