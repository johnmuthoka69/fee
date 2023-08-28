@extends("layouts.frontend")
@section('content')
<link rel="stylesheet" type="text/css" href="assets/css/button.css">
    <button class="top-right-button"><a href="/grade1/create">ADD NEW</a></button>
{{-- <li ><a href="/grade1/create">ADD NEW</a></li> --}}
  <h3>PP2 PUPILS</h3>
  @if (count($grade12) > 0)
    @foreach ($grade12 as $grade12)
      <div class="well">
        <h2><a href="/grade1/{{$grade12->id}}">{{$grade12->firstname}}</a></h2>
        <small>written on {{$grade12->created_at}}</small>
        <p>
          CLASS ID: {{ $grade12->class_id }}<br>
          FIRST NAME: {{ $grade12->firstname }}<br>
          {{-- LAST NAME: {{$grade12->lastname}}<br> --}}
          STUDENT ID: {{$grade12->studentID}}<br>
          {{-- Total Fee: {{$grade12->course}}<br>
          PARENT'S NAME: {{$grade12->parentsname}}<br>
          PARENT'S CONTACT: {{$grade12->parents}}<br>
          FEE PAID: {{$grade12->feepaid}}<br>
          CLASS TEACHER: {{$grade12->classTeacher}}<br>
          RECEIPT NO: {{$grade12->receiptNO}}<br> --}}
          FEE BALANCE: {{$grade12->feebalance}}
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
