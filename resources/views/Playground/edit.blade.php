@extends('layouts.frontend')

@section('content')
    <div>
        <h3>Edit playgroup</h3>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {!! Form::model($playground, ['route' => ['Playground.update', $playground->id], 'method' => 'PUT']) !!}
        @csrf

        <div class="form-group">
            {{ Form::label('class_id', 'Class ID') }}
            {{ Form::text('class_id', $playground->class_id, ['class' => 'form-control', 'placeholder' => 'Enter Class ID']) }}
        </div>

        <div class="form-group">
            {{ Form::label('firstname', 'First Name') }}
            {{ Form::text('firstname', $playground->firstname, ['class' => 'form-control', 'placeholder' => 'Enter First Name']) }}
        </div>

        <div class="form-group">
            {{ Form::label('lastname', 'Last Name') }}
            {{ Form::text('lastname', $playground->lastname, ['class' => 'form-control', 'placeholder' => 'Enter Last Name']) }}
        </div>

        <div class="form-group">
            {{ Form::label('studentID', 'Student ID') }}
            {{ Form::text('studentID', $playground->studentID, ['class' => 'form-control', 'placeholder' => 'Enter Student ID']) }}
        </div>

        <div class="form-group">
            {{ Form::label('course', 'Course') }}
            {{ Form::text('course', $playground->course, ['class' => 'form-control', 'placeholder' => 'Enter Course']) }}
        </div>

        <div class="form-group">
            {{ Form::label('parentsname', "Parents' Names") }}
            {{ Form::text('parentsname', $playground->parentsname, ['class' => 'form-control', 'placeholder' => "Enter Parents' Names"]) }}
        </div>

        <div class="form-group">
            {{ Form::label('parents', "Parents' Phone Number") }}
            {{ Form::text('parents', $playground->parents, ['class' => 'form-control', 'placeholder' => "Enter Parents' Phone Number"]) }}
        </div>

        <div class="form-group">
            {{ Form::label('feepaid', 'Fee Paid') }}
            {{ Form::text('feepaid', $playground->feepaid, ['class' => 'form-control', 'placeholder' => 'Enter Fee Paid']) }}
        </div>

        <div class="form-group">
            {{ Form::label('classTeacher', "Class Teacher's Name") }}
            {{ Form::text('classTeacher', $playground->classTeacher, ['class' => 'form-control', 'placeholder' => "Enter Class Teacher's Name"]) }}
        </div>

        <div class="form-group">
            {{ Form::label('receiptNO', "Receipt Number") }}
            {{ Form::text('receiptNO', $playground->receiptNO, ['class' => 'form-control', 'placeholder' => "Enter Receipt Number"]) }}
        </div>

        <div class="form-group">
            {{ Form::label('feebalance', "Fee Balance") }}
            {{ Form::text('feebalance', $playground->feebalance, ['class' => 'form-control', 'placeholder' => "Enter Fee Balance"]) }}
        </div>

        {{ Form::submit('Update', ['class' => 'btn btn-primary']) }}
        {!! Form::close() !!}
    </div>
@endsection
