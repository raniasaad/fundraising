<?php

namespace App\Repositories;

use App\Pledge;

class PledgeRepository extends ResourceRepository
{

    protected $pledge;

    public function __construct(Pledge $pledge)
	{
		//$this->pledge = $pledge;
		$this->model = $pledge;
	}
	protected function validator(array $data)
    {
        return Validator::make($data, [
            'name_d' => 'required|string|max:255|unique:pledges',
            'email_d' => 'required|string|email|max:255|unique:pledges'
           
        ]);
    }
	

	/*private function save(Pledge $pledge, Array $inputs)
	{
		$pledge->one_time = $inputs['one_time'];
		$pledge->monthly = $inputs['monthly'];
		$pledge->duration = $inputs['duration'];
		$pledge->start_date = $inputs['start_date'];
		$pledge->name_d = $inputs['name_d'];
		$pledge->email_d = $inputs['email_d'];		
		$pledge->phone_d = $inputs['phone_d'];		
		$pledge->direction1 = $inputs['direction1'];		
		$pledge->direction2 = $inputs['direction2'];		
		$pledge->direction3 = $inputs['direction3'];		

		$pledge->save();
	}

	public function getPaginate($n)
	{
		return $this->pledge->paginate($n);
	}

	public function store(Array $inputs)
	{
		$pledge = new $this->pledge;		
		//$pledge->password = bcrypt($inputs['password']);

		$this->save($pledge, $inputs);

		return $pledge;
	}

	public function getById($id)
	{
		return $this->pledge->findOrFail($id);
	}

	public function update($id, Array $inputs)
	{
		$this->save($this->getById($id), $inputs);
	}

	public function destroy($id)
	{
		$this->getById($id)->delete();
	}*/

}