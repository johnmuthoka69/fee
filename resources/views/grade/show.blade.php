<div class="container">
    <div class="text-right">
      {{-- <a href="/Fee/{{$fees->id}}/print" class="btn btn-primary">print</a> --}}
      <a href="/Fee/" target="_parent">Back</a>
    </div>
    
    <h3>Fee Details</h3>
    <p><strong>PP2:</strong>{{ $grades->pp2 }}</p>
    <p><strong>PP1:</strong> {{ $grades->pp1 }}</p>
    return view('grade.show')