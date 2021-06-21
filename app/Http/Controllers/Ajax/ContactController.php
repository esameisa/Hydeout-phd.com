<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ContactRepository;
use DataTables;

class ContactController extends Controller
{
    /**
     * @var ContactRepository
     */
    protected $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
    	$this->contactRepository = $contactRepository;
    }
	
	public function index()
	{
		$contacts = $this->contactRepository->getAjaxIndex();
		
		$data = Datatables::of( $contacts )
        ->addColumn('edit', function($el){
            return route('contacts.edit',$el->id);
        })
        ->make(true);

		return $data;
	}
}
