<div class="container" id="fee-details">
    <!-- Fee details HTML content goes here -->
    <!-- Use the same code as in show.blade.php to display fee details -->
        <h3>Fee statment</h3>
      
        <p><strong>First Name:</strong> {{ $fees->firstname }}</p>
        <p><strong>Last Name:</strong> {{ $fees->lastname }}</p>
        <p><strong>Student ID:</strong> {{ $fees->studentID }}</p>
        <p><strong>Total Fee:</strong> {{ $fees->course }}</p>
        <p><strong>parentsname:</strong> {{ $fees->parentsname }}</p>
        <p><strong> Phone Number':</strong> {{ $fees->parents }}</p>
        <p><strong> feepaid :</strong> {{ $fees->feepaid }}</p>
        <p><strong>classTeacher:</strong> {{ $fees->classTeacher}}</p>
        <p><strong> Recipt NO:</strong> {{ $fees->reciptNO }}</p>
        <p><strong> feebalance:</strong> {{ $fees->feebalance }}</p>
       
  </div>
  
  <script src="{{ asset('js/print.js') }}"></script>
  