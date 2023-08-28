<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Fee;
use App\Models\Grade;


class FeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fees = Fee::all();
        $totalFeePaid = $fees->sum('feepaid');
        $totalFeeBalance = $fees->sum('feebalance');

        return view('Fee.index', compact('fees', 'totalFeePaid', 'totalFeeBalance'));
    
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        
        $grades = Grade::all(); // Assuming you have a "Grade" model
        return view('Fee.create', compact('grades'));
        
        
    }

    /**
 * Display the specified resource.
 */
public function show(string $id)
{
    $fees = Fee::findOrFail($id);
    return view('Fee.show')->with('fees', $fees);
}


    /**
     * Store a newly created resource in storage.
     */
    /**

 * Store a newly created resource in storage.
 */
public function store(Request $request)
{
    try {
        // Validation
        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'studentID' => 'required',
            'course' => 'required',
            'parentsname' => 'required',
            'parents' => 'required',
            'feepaid' => 'required',
            'classTeacher' => 'required',
            'receiptNO' => 'required',
            'class_id' => 'required',
        ]);

        // Creating a new Fee model instance
        $fees = new Fee();

        // Assigning values from the validated data to the model properties
        $fees->firstname = $request->input('firstname');
        $fees->lastname = $request->input('lastname');
        $fees->studentID = $request->input('studentID');
        $fees->course = (int) $request->input('course'); // Convert to integer
        $fees->parentsname = $request->input('parentsname');
        $fees->parents = $request->input('parents');
        $fees->feepaid = (int) $validatedData['feepaid']; // Convert to integer
        $fees->classTeacher = $validatedData['classTeacher'];
        $fees->receiptNO = $validatedData['receiptNO'];
        $fees->class_id = $request->input('class_id');

        // Calculate fee balance
        $fees->feebalance = $fees->course - $fees->feepaid;

        // Saving the model instance to the database
        $fees->save();

        // Redirecting to the show route of the Fee model with the newly created fee's ID
        return redirect()->route('Fee.show', $fees->id);
    } catch (\Exception $e) {
        // Log or display the error message
        dd($e->getMessage());
    }
}
public function edit(string $id)
{
    $fees = Fee::findOrFail($id);
    return view('Fee.edit')->with('fees', $fees);
}


/**
 * Update the specified resource in storage.
 */
public function update(Request $request, string $id)
{
    $validatedData = $request->validate([
        'firstname' => 'required',
        'lastname' => 'required',
        'studentID' => 'required',
        'course' => 'required',
        'parentsname' => 'required',
        'parents' => 'required',
        'feepaid' => 'required',
        'classTeacher' => 'required',
        'receiptNO' => 'required',
        'class_id' => 'required',
    ]);

    $fees = Fee::find($id);
    // $fees->class_id = $validatedData['class_id'];
    $fees->firstname = $validatedData['firstname'];
    $fees->lastname = $validatedData['lastname'];
    $fees->studentID = $validatedData['studentID'];
    $fees->course = (int) $validatedData['course']; // Convert to integer
    $fees->parentsname = $validatedData['parentsname'];
    $fees->parents = $validatedData['parents'];
    $fees->feepaid = (int) $validatedData['feepaid']; // Convert to integer
    $fees->classTeacher = $validatedData['classTeacher'];
    $fees->receiptNO = $validatedData['receiptNO'];
    $fees->class_id = $request->input('class_id');


    // Calculate fee balance
    $fees->feebalance = $fees->course - $fees->feepaid;
  

    $fees->save();

    return redirect()->route('Fee.show', $fees->id);
    
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fees = Fee::findOrFail($id);
        $fees->delete();

        return redirect()->route('Fee.index');
    }

 
    public function showFeesByClassId($classId)
    {
        // Retrieve the fees of the specific class_id
        $fees = Fee::where('class_id', $classId)->get();

        // Pass the $fees data to your view
        return view('classid')->with('fees', $fees);
    }

    
}

