<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;

class AjaxResponsesController extends Controller {

	public function getTeachers(){
		$teachers = User::where('type','=',0)->get();
		$response = [];
		foreach ($teachers as $teacher){
			$arr = ['itesm_id' => $teacher->itesm_id, 'email'=>$teacher->email, 'passwordOk' => \Hash::check($teacher->itesm_id,$teacher->password)];
			array_push($response,$arr);
		}
		return response()->json($response);
	}

}
