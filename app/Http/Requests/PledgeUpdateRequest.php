<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PledgeUpdateRequest extends Request
{

    public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'name_d' => 'required|max:255|unique:pledges',
			'email_d' => 'required|email|max:255|unique:pledges'
		];
	}

}