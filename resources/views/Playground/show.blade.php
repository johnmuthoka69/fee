<div class="container">
    <div class="text-right">
        {{-- <a href="/Fee/{{$fees->id}}/print" class="btn btn-primary">print</a> --}}
        <a href="/Playground/" target="_parent">Back</a>
    </div>
    
    <h3>Fee Details</h3>
    <p><strong>CLASS_ID:</strong>{{ $playground->class_id }}</p>
    <p><strong>First Name:</strong> {{ $playground->firstname }}</p>
    <p><strong>Last Name:</strong> {{ $playground->lastname }}</p>
    <p><strong>Student ID:</strong> {{ $playground->studentID }}</p>
    <p><strong>Tatol Fee:</strong> {{ $playground->course }}</p>
    <p><strong>parentsname:</strong> {{ $playground->parentsname }}</p>
    <p><strong>Phone Number:</strong> {{ $playground->parents }}</p>
    <p><strong>feepaid:</strong> {{ $playground->feepaid }}</p>
    <p><strong>classTeacher:</strong> {{ $playground->classTeacher}}</p>
    <p><strong>Recipt NO:</strong> {{ $playground->receiptNO }}</p>
    <p><strong>feebalance:</strong> {{ $playground->feebalance }}</p>
   
    <a href="/Playground/{{$playground->id}}/edit" class="btn btn-primary">Edit</a>
  
    <!-- Delete Button -->
    <form action="{{ route('Playground.destroy', $playground->id) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
<div class="text-right">
    <a href="/Playground/" target="_parent">BACK </a>
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
