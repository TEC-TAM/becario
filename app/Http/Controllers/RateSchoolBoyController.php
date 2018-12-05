<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\RateSchoolBoyRequest;
use App\Rate;
use App\Student;
use Illuminate\Http\Request;

class RateSchoolBoyController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function showForm($id)
	{
		$student = Student::find($id);
		return view('schoolboys.rateform')->with('student',$student);
	}
	public function showEditForm($id)
	{
		$student = Student::find($id);
		return view('schoolboys.editrateform')->with('student',$student);
	}

	public function rate(RateSchoolBoyRequest $request,$id){
		$student = Student::find($id);
		$rate = new Rate($request->all());
		$student->rate()->save($rate);
		$student->fill(['rated' => true]);
		$student->save();
		return redirect('schoolboys/'.$student->id);
	}

	public function updateRate(Request $request,$id){
		$student = Student::find($id);
		$rate = Rate::find($student->rate->id);
		$rate->fill($request->all());
		$rate->save();
		return redirect('schoolboys/'.$student->id);
	}
	
}
