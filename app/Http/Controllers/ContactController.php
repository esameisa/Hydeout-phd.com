<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Repositories\ContactRepository;
use Validator;

class ContactController extends Controller
{
    /**
     * @var MessageRepository
     */
    protected $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
    	$this->contactRepository = $contactRepository;
    }
	
	public function index()
	{
		return view('dashboard.contacts.index');
	}

	public function edit($id)
	{
		$contact = $this->contactRepository->find($id);
		return view('dashboard.contacts.edit',compact('contact'));
	}

	public function update(ContactRequest $request,$id)
	{
		
		$contact = $this->contactRepository->find($id);
		if ($request->key !== $contact->key) {
			return back()->withErrors(['key' => 'You can not change this value'])->withInput();
		}
		$contact = $this->contactRepository->update($request->all(),$id);
		$request->session()->flash('success', 'Updated Successfully');
		return redirect(route('contacts.index'));
	}
}









