
<div class="container">
  <div class="text-right">
    {{-- <a href="/Fee/{{$fees->id}}/print" class="btn btn-primary">print</a> --}}
    <a href="/Fee/" target="_parent">Back</a>
  </div>
  
  <h3>Fee Details</h3>
  <p><strong>CLASS_ID:</strong>{{ $fees->class_id }}</p>
  <p><strong>First Name:</strong> {{ $fees->firstname }}</p>
  <p><strong>Last Name:</strong> {{ $fees->lastname }}</p>
  <p><strong>Student ID:</strong> {{ $fees->studentID }}</p>
  <p><strong>Total Fee:</strong> {{ $fees->course }}</p>
  <p><strong>parentsname:</strong> {{ $fees->parentsname }}</p>
  <p><strong> Phone Number':</strong> {{ $fees->parents }}</p>
  <p><strong> feepaid :</strong> {{ $fees->feepaid }}</p>
  <p><strong>classTeacher:</strong> {{ $fees->classTeacher}}</p>
  <p><strong> Recipt NO:</strong> {{ $fees->receiptNO }}</p>
  <p><strong> feebalance:</strong> {{ $fees->feebalance }}</p>
 
  <a href="/Fee/{{$fees->id}}/edit" class="btn btn-primary">Edit</a>

  <!-- Delete Button -->
  <form action="{{ route('Fee.destroy', $fees->id) }}" method="POST" style="display: inline-block;">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Delete</button>
  </form>
</div>
<div class="text-right">
  <a href="/Fee/" target="_parent">BACK </a>
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
