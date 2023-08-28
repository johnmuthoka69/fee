@extends("layouts.frontend")

@section('content')
<link rel="stylesheet" type="text/css" href="assets/css/button.css">
    <button class="top-right-button"><a href="/grade/create">ADD NEW</a></button>

{{-- <li ><a href="/grade/create">create class</a></li> --}}

<h1>Classes Details</h1>

@if (count($grades) > 0)

@foreach ($grades as $grade)

  <div class="well">

    <h2><a href="/grade/{{$grade->id}}">{{$grade->pp2}}</a></h2>

    <small>written on {{$grade->created_at}}</small>

  </div>

  <div>
    CLASS NAME: {{ $grade->class }}<br>
    CLASS TEACHER: {{ $grade->Teacher }}<br>
  </div>

@endforeach

@endif

<a href="{{ route('grade.index') }}">Back to Classes List</a>

@endsection
