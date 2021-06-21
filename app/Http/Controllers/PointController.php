<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PointRequest;
use App\Repositories\PointRepository;
use Validator;
use App\Entities\Setting;

class PointController extends Controller
{
    /**
	* @var PointRepository
	*/
    protected $pointRepository;

    public function __construct(PointRepository $pointRepository)
    {
    	$this->pointRepository = $pointRepository;
    }
	
	public function index(Request $request)
	{
		return view('dashboard.points.index');
	}

	public function edit($id)
	{
		$point = $this->pointRepository->find($id);
		return view('dashboard.points.edit',compact('point'));
	}

	public function update(PointRequest $request,$id)
	{
		
		$this->pointRepository->update($request->all(),$id);
		$request->session()->flash('success', 'Edited Successfuly');
		return redirect(route('points.index'));
	}
}
