<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ConfirmationRequest extends Request {

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
     * A00513236
	 * 'enrollment' => 'required|regex:/^{A}{0}[0-9][0-9][0-9][0-9][0-9][0-9][0-9]/'
	 * @return array
	 */
	public function rules()
	{
		return [
			'enrollment' => 'required|regex:/^A[0-9][0-9][0-9][0-9][0-9][0-9][0-9]/',
            'confirmed' => 'required|boolean'
		];
	}

}
