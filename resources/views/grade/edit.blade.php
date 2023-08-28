<!-- edit.blade.php -->

{!! Form::model($grades, ['route' => ['grade.update', $grades->id], 'method' => 'PUT']) !!}
    @csrf
    @method('PUT')

    <div class="form-group">
        {{ Form::label('pp2', 'pp2') }}
        {{ Form::text('pp2', $grades->pp2, ['class' => 'form-control', 'placeholder' => 'pp1']) }}
    </div>
    <div class="form-group">
        {{ Form::label('pp1', 'pp1') }}
        {{ Form::text('pp1', $grades->pp1, ['class' => 'form-control', 'placeholder' => 'pp1']) }}
    
    <div>
        <button type="submit">Update Grade</button>
    </div>
    {!! Form::close() !!}
