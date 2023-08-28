<h3>PUPILS pp1</h3>

{{ Form::open(['route' => 'grade1.store', 'method' => 'POST']) }}
@csrf

<div class="form-group">
    {{ Form::label('class_id', 'Class ID') }}
    {{ Form::text('class_id', '', ['class' => 'form-control', 'placeholder' => 'Enter Class ID']) }}
</div>

<div class="form-group">
    {{ Form::label('firstname', 'First Name') }}
    {{ Form::text('firstname', '', ['class' => 'form-control', 'placeholder' => 'Enter First Name']) }}
</div>

<div class="form-group">
    {{ Form::label('lastname', 'Last Name') }}
    {{ Form::text('lastname', '', ['class' => 'form-control', 'placeholder' => 'Enter Last Name']) }}
</div>

<div class="form-group">
    {{ Form::label('studentID', 'Student ID') }}
    {{ Form::text('studentID', '', ['class' => 'form-control', 'placeholder' => 'Enter Student ID', 'maxlength' => '4']) }}
</div>



<div class="form-group">
    {{ Form::label('totalfee', 'totalfee') }}
    {{ Form::text('course', '', ['class' => 'form-control', 'placeholder' => 'Enter Course']) }}
</div>

<div class="form-group">
    {{ Form::label('parentsname', "Parents' Names") }}
    {{ Form::text('parentsname', '', ['class' => 'form-control', 'placeholder' => "Enter Parents' Names"]) }}
</div>

<div class="form-group">
    {{ Form::label('parents', "Parents' Phone Number") }}
    {{ Form::text('parents', '', ['class' => 'form-control', 'placeholder' => "Enter Parents' Phone Number", 'pattern' => '^0\d{9}$', 'title' => 'Please enter a 10-digit phone number starting with 0']) }}
</div>



<div class="form-group">
    {{ Form::label('feepaid', 'Fee Paid') }}
    {{ Form::text('feepaid', '', ['class' => 'form-control', 'placeholder' => 'Enter Fee Paid']) }}
</div>

<div class="form-group">
    {{ Form::label('classTeacher', 'Class Teacher') }}
    {{ Form::text('classTeacher', '', ['class' => 'form-control', 'placeholder' => 'Enter Class Teacher']) }}
</div>

<div class="form-group">
    {{ Form::label('receiptNO', 'Receipt Number') }}
    {{ Form::text('receiptNO', '', ['class' => 'form-control', 'placeholder' => 'Enter Receipt Number']) }}
</div>

<div class="form-group">
    {{ Form::label('feebalance', 'Fee Balance') }}
    {{ Form::text('feebalance', '', ['class' => 'form-control', 'placeholder' => 'Enter Fee Balance']) }}
</div>

{{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}

{{ Form::close() }}
