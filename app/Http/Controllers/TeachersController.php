<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\TeacherRequest;
use App\User;
use Illuminate\Http\Request;

class TeachersController extends Controller {

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
		$teachers = User::where('type','=',0)->latest()->paginate(15);
		$teachers->setPath('teachers');
		return view('teachers.index')->with('teachers',$teachers);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('teachers.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(TeacherRequest $request)
	{
		User::create([
			'name' => $request->name,
			'last_name' => $request->last_name,
			'middle_name' => $request->middle_name,
			'itesm_id' => $request->itesm_id,
			'email' => $request->itesm_id.'@itesm.mx',
			'password' => bcrypt($request->itesm_id),
			'work_area' => $request->work_area,
			'type' => false
		]);

		return redirect('teachers');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$teacher = User::find($id);
		return view('teachers.show')->with('teacher',$teacher);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$teacher = User::find($id);
		return view('teachers.edit')->with('teacher',$teacher);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
		$teacher = User::find($id);
		$teacher->fill($request->all());
        $teacher->password = bcrypt($request->password);
		$teacher->save();
		return redirect('teachers/'.$teacher->id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$teacher = User::find($id);
		//$teacher->students()
		$teacher->delete();
		return redirect()->back();
	}

}
