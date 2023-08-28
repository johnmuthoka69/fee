<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playground;
use App\Models\Grade;

class PlaygroundController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $playground = Playground::all();
        $totalFeePaid = $playground->sum('feepaid');
        $totalFeeBalance = $playground->sum('feebalance');
    
        return view('Playground.index', compact('playground', 'totalFeePaid', 'totalFeeBalance'));
    }
    
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $grades = Grade::all(); // Assuming you have a "Grade" model
        return view('Playground.create', compact('grades'));
    }
    
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $playground = Playground::findOrFail($id);
        return view('Playground.show')->with('playground', $playground);
    }
    
    
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
    
            // Creating a new Playground model instance
            $playground = new Playground();
    
            // Assigning values from the validated data to the model properties
            $playground->firstname = $request->input('firstname');
            $playground->lastname = $request->input('lastname');
            $playground->studentID = $request->input('studentID');
            $playground->course = (int) $request->input('course'); // Convert to integer
            $playground->parentsname = $request->input('parentsname');
            $playground->parents = $request->input('parents');
            $playground->feepaid = (int) $validatedData['feepaid']; // Convert to integer
            $playground->classTeacher = $validatedData['classTeacher'];
            $playground->receiptNO = $validatedData['receiptNO'];
            $playground->class_id = $request->input('class_id');
    
            // Calculate playground balance
            $playground->feebalance = $playground->course - $playground->feepaid;
    
            // Saving the model instance to the database
            $playground->save();
    
            // Redirecting to the show route of the Playground model with the newly created playground's ID
            return redirect()->route('Playground.show', $playground->id);
        } catch (\Exception $e) {
            // Log or display the error message
            dd($e->getMessage());
        }
    }
    
    
    public function edit(string $id)
    {
        $playground = Playground::findOrFail($id);
        return view('Playground.edit')->with('playground', $playground);
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
    
        $playground = Playground::find($id);
        $playground->firstname = $validatedData['firstname'];
        $playground->lastname = $validatedData['lastname'];
        $playground->studentID = $validatedData['studentID'];
        $playground->course = (int) $validatedData['course']; // Convert to integer
        $playground->parentsname = $validatedData['parentsname'];
        $playground->parents = $validatedData['parents'];
        $playground->feepaid = (int) $validatedData['feepaid']; // Convert to integer
        $playground->classTeacher = $validatedData['classTeacher'];
        $playground->receiptNO = $validatedData['receiptNO'];
        $playground->class_id = $request->input('class_id');
    
        // Calculate playground balance
        $playground->feebalance = $playground->course - $playground->feepaid;
    
        $playground->save();
    
        return redirect()->route('Playground.show', $playground->id);
    }
    
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $playground = Playground::findOrFail($id);
        $playground->delete();
    
        return redirect()->route('Playground.index');
    }
    
    
    public function showPlaygroundByClassId($classId)
    {
        // Retrieve the playgrounds of the specific class_id
        $playground = Playground::where('class_id', $classId)->get();
    
        // Pass the $playgrounds data to your view
        return view('classid')->with('playgrounds', $playground);
    }
    
}