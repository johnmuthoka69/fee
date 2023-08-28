<

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade1;
use App\Models\Grade;

class Grade1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $grade12 = Grade1::all(); // Updated variable name and model name
        $totalFeePaid = $grade12->sum('feepaid');
        $totalFeeBalance = $grade12->sum('feebalance');

        return view('grade1.index', compact('grade12', 'totalFeePaid', 'totalFeeBalance'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $grades = Grade::all(); // Assuming you have a "Grade" model
        return view('grade1.create', compact('grades'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $grade12 = Grade1::findOrFail($id); // Updated variable name and model name
        return view('grade1.show')->with('grade12', $grade12);
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

            // Creating a new Grade1 model instance
            $grade12 = new Grade1(); // Updated variable name and model name

            // Assigning values from the validated data to the model properties
            $grade12->firstname = $request->input('firstname');
            $grade12->lastname = $request->input('lastname');
            $grade12->studentID = $request->input('studentID');
            $grade12->course = (int) $request->input('course'); // Convert to integer
            $grade12->parentsname = $request->input('parentsname');
            $grade12->parents = $request->input('parents');
            $grade12->feepaid = (int) $validatedData['feepaid']; // Convert to integer
            $grade12->classTeacher = $validatedData['classTeacher'];
            $grade12->receiptNO = $validatedData['receiptNO'];
            $grade12->class_id = $request->input('class_id');

            // Calculate fee balance
            $grade12->feebalance = $grade12->course - $grade12->feepaid;

            // Saving the model instance to the database
            $grade12->save();

            // Redirecting to the show route of the Grade1 model with the newly created fee's ID
            return redirect()->route('grade1.show', $grade12->id); // Update the route name
        } catch (\Exception $e) {
            // Log or display the error message
            dd($e->getMessage());
        }
    }

    // Rest of the controller methods...
}
