<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\StudentRequest;
use App\Rate;
use App\Student;
use App\User;
use Illuminate\Http\Request;

class StudentsController extends Controller {
    public function __construct()
    {
        $this->middleware('auth');
		$this->middleware('AuthenticateAdmin');
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        //$students = Student::latest()->paginate(20);
        $students = Student::paginate(20);
        $students->setPath('students');
		return view('students.index')->with('students',$students);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('students.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(StudentRequest $request)
	{
		$teacher = User::where('itesm_id','=',$request->assigned_to)->first();
		$student = new Student(array_except($request->all(),['assigned_to']));
		$teacher->students()->save($student);
		return redirect('students');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$student = Student::find($id);
		return view('students.show')->with('student',$student);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$student = Student::find($id);
		return view('students.edit')->with('student',$student);
	}

	/**
	 * Update the specified resource in storage.
	 * http://stackoverflow.com/questions/16921511/how-can-i-update-an-existing-eloquent-relationship-in-laravel-4
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
		$student = Student::find($id);
		if($student->user->itesm_id == $request->assigned_to){
			$student->fill(array_except($request->all(),['assigned_to']));
			$student->save();
		}else{
			$teacher = User::where('itesm_id','=',$request->assigned_to)->first();
			$student->fill(array_except($request->all(),['assigned_to']));
			$student->user()->associate($teacher);
			$student->save();
		}
		return redirect('students/'.$student->id);

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$student = Student::find($id);
		if($student->rated) {
			$rate = Rate::find($student->rate->id);
			$rate->delete();
		}
		$student->delete();
		return redirect()->back();
	}

}
