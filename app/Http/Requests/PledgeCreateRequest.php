<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PledgeCreateRequest extends Request
{

    public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'name_d' => 'required|max:255|unique:pledges',
			'phone_d' => 'required|max:255|unique:pledges',
			'email_d' => 'required|email|max:255|unique:pledges'
		];
	}
	protected function validator(array $data)
    {
        return Validator::make($data, [
            'name_d' => 'required|string|max:255|unique:pledges',
            'email_d' => 'required|string|email|max:255|unique:pledges'
           
        ]);
    }

}