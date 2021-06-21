<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use App\Repositories\StoreRepository;
use Validator;
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
		return view('dashboard.stores.index');
	}

    public function edit($id)
    {
        $store = $this->storeRepository->find($id);
        return view('dashboard.stores.edit',compact('store'));
    }

    public function update(StoreRequest $request,$id)
    {
        $store = $this->storeRepository->update( $request->only('title','content','logo'), $id );
        
        return redirect(route('stores.index'));
    }
}
