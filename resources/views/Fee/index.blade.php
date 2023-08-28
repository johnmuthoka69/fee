@extends("layouts.frontend")
@section('content')
<link href="{{ asset('css/fee-details.css') }}" rel="stylesheet">
{{-- <li><a href="/Fee/create">create pp1</a></li> --}}
<link rel="stylesheet" type="text/css" href="assets/css/button.css">
    <button class="top-right-button"><a href="/Fee/create">ADD NEW</a></button>
  <h3>PP1 pupils</h3>
  @if (count($fees) > 0)
    @foreach ($fees as $fee)
      <div class="well">
        <h2><a href="/Fee/{{$fee->id}}">{{$fee->firstname}}</a></h2>
        <small>written on {{$fee->created_at}}</small>
        <p class="centered-text">
          CLASS ID: {{ $fee->class_id }}<br>
          FIRST NAME: {{ $fee->firstname }}<br>
          {{-- Last Name: {{$fee->lastname}}<br>
          Student ID: {{$fee->studentID}}<br>
          Total Fee: {{$fee->course}}<br>
          Parent's Name: {{$fee->parentsname}}<br>
          Parent's Contact: {{$fee->parents}}<br>
          feepaid: {{$fee->feepaid}}<br>
          classTeacher: {{$fee->classTeacher}}<br>
          Recipt NO: {{$fee->receiptNO}}<br> --}}
          Fee balance: {{$fee->feebalance}}<br>
        </p> 
      </div>
    @endforeach
    <p>Total Fee Paid by All Students: {{ $totalFeePaid }}</p>
    <p>Total Fee Balance by All Students: {{  $totalFeeBalance }}</p>
  @else
    <p>No Fee found</p>  
  @endif
  <button onclick="printDetails()" class="btn btn-primary">Print</button>
</div>

<script>
    function printDetails() {
        window.print();
    }
</script>
@endsection
