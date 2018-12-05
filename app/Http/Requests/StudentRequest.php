<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class StudentRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name' => 'required',
			'last_name' => 'required',
			'middle_name' => 'required',
			'itesm_id' => 'required|regex:/^A[0-9][0-9][0-9][0-9][0-9][0-9][0-9]/',
			'career' => 'required',
			'semester' => 'required|integer',
			'grant' => 'required|integer',
			'assigned_to' => 'required|regex:/^L[0-9][0-9][0-9][0-9][0-9][0-9][0-9]/',
			'confirmed' => 'required',
			'rated' => 'required'
		];
	}

}
