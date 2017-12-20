<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PledgeCreateRequest;
use App\Http\Requests\PledgeUpdateRequest;
use Illuminate\Support\Facades\DB;
use App\Repositories\PledgeRepository;



class PledgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	    protected $pledgeRepository;

    protected $nbrPerPage = 4;

    public function __construct(PledgeRepository $pledgeRepository)
	{
		$this->pledgeRepository = $pledgeRepository;
	}
	 protected function validator(array $data)
    {
        return Validator::make($data, [
            'name_d' => 'required|string|max:255|unique:pledges',
            'email_d' => 'required|string|email|max:255|unique:pledges'
           
        ]);
    }
    public function index()
    {
	/*	$pledges = $this->pledgeRepository->getPaginate($this->nbrPerPage);
		$links = $pledges->setPath('')->render();

		return view('index', compact('pledges', 'links'));*/
		 
		 $pledges = DB::table('pledges')->paginate(15);
$links = $pledges->setPath('')->render();
        return view('index', ['pledges' => $pledges]);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pledge = $this->pledgeRepository->store($request->all());

		return redirect('pledge')->withOk("Pledge from " . $pledge->name_d . " added.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $pledge = $this->pledgeRepository->getById($id);

		return view('show',  compact('pledge'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pledge = $this->pledgeRepository->getById($id);

		return view('edit',  compact('pledge'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->pledgeRepository->update($id, $request->all());
		
		return redirect('pledge')->withOk("Pledge from " . $request->input('name_d') . " was modified.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->pledgeRepository->destroy($id);

		return back();
    }
}
