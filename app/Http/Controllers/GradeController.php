<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Fee;
use App\Models\Grade;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grades = Grade::all();
        return view('grade.index')->with('grades', $grades);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('grade.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pp2' => 'required',
            'pp1' => 'required',
        ]);

        $grades = new Grade();
        $grades->pp2 = $validatedData['pp2'];
        $grades->pp1 = $validatedData['pp1'];
        $grades->save();

        return redirect()->route('grade.index')->with('success', 'Grade created successfully.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'pp2' => 'required',
            'pp1' => 'required',
        ]);

        $grades = Grade::findOrFail($id);
        $grades->pp2 = $validatedData['pp2'];
        $grades->pp1 = $validatedData['pp1'];
        $grades->save();

        return redirect()->route('grade.index')->with('success', 'Grade updated successfully.');
    }

  

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function show($id)
{
    $grades = Grade::findOrFail($id);

    return view('grade.show', compact('fee'));
}
public function edit($id)
{
    $grades = Grade::findOrFail($id);

    return view('grades.edit', compact('grade'));
}

}
