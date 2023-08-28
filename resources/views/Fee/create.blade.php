
<div class="loginform">
    <link rel="stylesheet" href="/assets/css/login.css">
    
    {{-- 
            {!! Form::open(['action' => 'store', 'method' => 'POST']) !!} --}}
            
    {{-- {{  Form::open( [ 'route' => 'Fee.store' ] )  }} --}}
   <div>
    {{ Form::open( [ 'route' => 'Fee.store' ] ) }}


        @csrf

        {{-- <select name="class_id" class="form-control">
            <option value="">pp1</option>
            <option value="">pp</option>
            @foreach($grades as $grade)
                <option value="{{ $grade->id }}" {{ $grade->id == $fees->class_id ? 'selected' : '' }}>
                    {{ $grade->Grade_name }}
                </option>
            @endforeach --}}
        {{-- </select> --}}
        <h3>PUPILS PP1</h3>
        <div class="form-group field">
            {{ Form::label('class_id', 'class_id') }}
            {{ Form::text('class_id', '', ['class' => 'form-control', 'placeholder' => 'Enterclass_id']) }}
        </div>
        <div class="form-group field">
            {{ Form::label('firstname', 'First Name') }}
            {{ Form::text('firstname', '', ['class' => 'form-control', 'placeholder' => 'Enter First Name']) }}
        </div>

        <div class="form-group field">
            {{ Form::label('lastname', 'Last Name') }}
            {{ Form::text('lastname', '', ['class' => 'form-control', 'placeholder' => 'Enter Last Name']) }}
        </div>

        <div class="form-group">
            {{ Form::label('studentID', 'Student ID') }}
            {{ Form::text('studentID', '', ['class' => 'form-control', 'placeholder' => 'Enter Student ID', 'maxlength' => '4']) }}
        </div>
        
        

        <div class="form-group field">
            {{ Form::label('course', "course' Names") }}
            {{ Form::text('course', '', ['class' => 'form-control', 'placeholder' => "Entercourse' Names"]) }}
        </div>

        <div class="form-group field">
            {{ Form::label('parentsname', "Parents' Names") }}
            {{ Form::text('parentsname', '', ['class' => 'form-control', 'placeholder' => "Enter Parents' Names"]) }}
        </div>

       <div class="form-group">
            {{ Form::label('parents', "Parents' Phone Number") }}
            {{ Form::text('parents', '', ['class' => 'form-control', 'placeholder' => "Enter Parents' Phone Number", 'pattern' => '^0\d{9}$', 'title' => 'Please enter a 10-digit phone number starting with 0']) }}
       </div>

        
        
        <div class="form-group field">
            {{ Form::label('feepaid', 'feepaid') }}
            {{ Form::text('feepaid','', ['class' => 'form-control', 'placeholder' => 'Enter feepaid']) }}
        </div>

        <div class="form-group field">
            {{ Form::label('classTeacher', "classTeacher' Names") }}
            {{ Form::text('classTeacher','', ['class' => 'form-control', 'placeholder' => "Enter ' classTeacher"]) }}
        </div>

        <div class="form-group field">
            {{ Form::label('receiptNO', " receiptNO") }}
            {{ Form::text('receiptNO','', ['class' => 'form-control', 'placeholder' => "Enter ' receiptNO"]) }}
        </div>

        <div class="form-group field">
            {{ Form::label(' feebalance', " feebalance") }}
            {{ Form::text(' feebalance','', ['class' => 'form-control', 'placeholder' => "Enter  feebalance'  feebalance"]) }}
        </div>
       
        {{ Form::submit('Submit', ['class' => 'btn btn-primary field']) }}

        {!! Form::close() !!}
    </div>

    </div>
  