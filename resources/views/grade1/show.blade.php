<div class="container">
    <div class="text-right">
      {{-- <a href="/Fee/{{$fees->id}}/print" class="btn btn-primary">print</a> --}}
      <a href="/grade1/" target="_parent">Back</a>
    </div>
    
    <h3>Fee Details</h3>
    <p><strong>CLASS_ID:</strong>{{ $grade12->class_id }}</p>
    <p><strong>First Name:</strong> {{ $grade12->firstname }}</p>
    <p><strong>Last Name:</strong> {{ $grade12->lastname }}</p>
    <p><strong>Student ID:</strong> {{ $grade12->studentID }}</p>
    <p><strong>Tatol Fee:</strong> {{ $grade12->course }}</p>
    <p><strong>parentsname:</strong> {{ $grade12->parentsname }}</p>
    <p><strong>Phone Number:</strong> {{ $grade12->parents }}</p>
    <p><strong>feepaid:</strong> {{ $grade12->feepaid }}</p>
    <p><strong>classTeacher:</strong> {{ $grade12->classTeacher}}</p>
    <p><strong>Recipt NO:</strong> {{ $grade12->receiptNO }}</p>
    <p><strong>feebalance:</strong> {{ $grade12->feebalance }}</p>
   
    <a href="/grade1/{{$grade12->id}}/edit" class="btn btn-primary">Edit</a>
  
    <!-- Delete Button -->
    <form action="{{ route('grade1.destroy', $grade12->id) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
<div class="text-right">
    <a href="/grade1/" target="_parent">BACK </a>
    {{-- <a href="{{ route('profile') }}">Profile</a>
    <a href="{{ route('logout') }}">Log Out</a> --}}
    <script src="{{ asset('js/print.js') }}"></script>
    <button onclick="printDetails()" class="btn btn-primary">Print</button>
</div>

<script>
    function printDetails() {
        window.print();
    }
</script>
</div>
