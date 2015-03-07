<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreCastRequest extends Request {

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
//        $rules = array(
//            'voter_id' => 'required|min:13|max:13|unique:voters,voter_id,'.$this->get('voter_id'),
//        );
//
//        $validation = Validator::make(Input::all(), $rules);
//
//        if ($validation->fails()) {
//            echo 'That email address is already registered. You sure you don\'t have an account?';
//        }


        return [

            'voter_id' => 'required|min:13|max:13|exists:voters,voter_id|unique:casts,voter_id,'.$this->get('voter_id'),

            'exists' => 'The :attribute does not listed in database.',

            'unique' => 'The :attribute already been registered.',

		];
	}

}
