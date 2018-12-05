<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class SemesterRequest extends Request {

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
			'semester' => 'required',
			'deadline_to_finish_service' => 'required',
			'deadline_to_rate_students' => 'required',
			'deadline_to_hand_in_file' => 'required'
		];
	}

}
