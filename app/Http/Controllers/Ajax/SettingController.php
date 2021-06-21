<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\SettingRepository;
use DataTables;

class SettingController extends Controller
{
     /**
     * @var SettingRepository
     */
    protected $settingRepository;

    public function __construct(SettingRepository $settingRepository)
    {
    	$this->settingRepository = $settingRepository;
    }


	
	public function index(Request $request)
	{
		$namespace = $request->input('namespace');

		$stores = $this->settingRepository->getAjaxIndex($namespace); // findWhere(['namespace' => $namespace]);
		$data = Datatables::of( $stores )
        ->addColumn('edit', function($el) {
            return route( 'settings.edit', $el->id );
        })
        ->addColumn('value_image', function($el) {
            return \URL::to('/') . $el->value_image->url('thumb');
        })->make(true);

		return $data;
	}
}
