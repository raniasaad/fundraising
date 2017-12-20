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
			'name_d' => 'required|max:255',
			'phone_d' => 'required|max:255',
			'email_d' => 'required|email|max:255'
		];
	}
	

}