<!-- create.blade.php -->

{{ Form::open( [ 'route' => 'grade.store' ] ) }}
    @csrf

   
   
    <div class="form-group">
        {{ Form::label('pp2', 'pp2') }}
        {{ Form::text('pp2', '', ['class' => 'form-control', 'placeholder' => 'pp2']) }}
    </div>
    <div class="form-group">
        {{ Form::label('pp1', 'pp1') }}
        {{ Form::text('pp1', '', ['class' => 'form-control', 'placeholder' => 'pp1']) }}
    </div>
    {{-- <button type="submit">Submit</button>
     --}}
    <div>
        <button type="submit">Create Grade</button>
    </div>
    {!! Form::close() !!}
