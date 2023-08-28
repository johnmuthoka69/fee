@extends("layouts.frontend")
@section('content')
<link rel="stylesheet" type="text/css" href="assets/css/button.css">
    <button class="top-right-button"><a href="/Playground/create">ADD NEW</a></button>
{{-- <li><a href="/Playground/create">create playground</a></li> --}}
  <h3>Playground PUPILS</h3>
  @if (count($playground) > 0)
    @foreach ($playground as $playground)
      <div class="well">
        <h2><a href="/Playground/{{$playground->id}}">{{$playground->firstname}}</a></h2>
        <small>written on {{$playground->created_at}}</small>
        <p>
          CLASS ID: {{ $playground->class_id }}<br>
          FIRST NAME: {{ $playground->firstname }}<br>
          {{-- LAST NAME: {{$playground->lastname}}<br> --}}
          STUDENT ID: {{$playground->studentID}}<br>
          {{-- Total Fee: {{$playground->course}}<br>
          PARENT'S NAME: {{$playground->parentsname}}<br>
          PARENT'S CONTACT: {{$playground->parents}}<br>
          FEE PAID: {{$playground->feepaid}}<br>
          CLASS TEACHER: {{$playground->classTeacher}}<br>
          RECEIPT NO: {{$playground->receiptNO}}<br>
          FEE BALANCE: {{$playground->feebalance}} --}}
        </p> 
      </div>
    @endforeach
    <p>Total Fee Paid by All Students: {{ $totalFeePaid }}</p>
    <p>Total Fee Balance by All Students: {{ $totalFeeBalance }}</p>
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
