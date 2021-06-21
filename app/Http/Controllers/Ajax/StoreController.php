<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\StoreRepository;
use DataTables;

class StoreController extends Controller
{
     /**
     * @var StoreRepository
     */
    protected $storeRepository;

    public function __construct(StoreRepository $storeRepository)
    {
    	$this->storeRepository = $storeRepository;
    }
	
	public function index()
	{
		$stores = $this->storeRepository->getAjaxIndex();

		$data = Datatables::of( $stores )
        ->addColumn('edit', function($el) {
            return route( 'stores.edit', $el->id );
        })->addColumn('logo', function($el) {
            return \URL::to('/') . $el->logo->url();
        })
        ->make(true);

		return $data;
	}
}
