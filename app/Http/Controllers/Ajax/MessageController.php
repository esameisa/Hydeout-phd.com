<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\MessageRepository;
use DataTables;

class MessageController extends Controller
{
    /**
     * @var MessageRepository
     */
    protected $repository;

    public function __construct(MessageRepository $messageRepository)
    {
    	$this->messageRepository = $messageRepository;
    }
	
	public function index()
	{
		$messages = $this->messageRepository->getAjaxIndex();
		
		$data = Datatables::of( $messages )
        ->addColumn('delete', function($el){
            return route('messages.destroy',$el->id);
        })
        ->addColumn('show', function($el){
            return route('messages.show',$el->id);
        })
        ->make(true);

		return $data;
	}

}
