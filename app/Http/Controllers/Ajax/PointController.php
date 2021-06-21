<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\PointRepository;
use DataTables;

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
		$points = $this->pointRepository->getAjaxIndex();


		$data = Datatables::of( $points )
        ->addColumn('edit', function($el) {
            return route( 'points.edit', $el->id );
        })
        ->make(true);

		return $data;
	}
}
