<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\MessageRepository;


class MessageController extends Controller
{
    /**
     * @var MessageRepository
     */
    protected $messageRepository;

    public function __construct(MessageRepository $messageRepository)
    {
    	$this->messageRepository = $messageRepository;
    }
	
	public function index()
	{
		return view('dashboard.messages.index');
	}

	public function show($id)
	{
		$message = $this->messageRepository->find($id);
		return view('dashboard.messages.show',compact('message'));
		
	}

	public function destroy($id)
	{
		$this->messageRepository->delete($id);
		return back();
	}
}
