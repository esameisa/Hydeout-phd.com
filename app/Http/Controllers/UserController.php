<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Http\Requests\UserRequest;

use Validator;

class UserController extends Controller
{
	 /**
     * @var UserRepository
     */
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
    	$this->userRepository = $userRepository;
    }
	
	public function index()
	{
		return view('dashboard.users.index');
	}
    
    public function create()
    {
        return view('dashboard.users.create');
    }

    public function store(UserRequest $request)
    {
        $user = $this->userRepository->create($request->all());
        $request->session()->flash('success', 'Create Successfuly');
        return redirect('dashboard/users');
    }

    public function edit($id)
    {
        $user = $this->userRepository->find($id);
        return view('dashboard.users.edit',compact('user'));
    }

    public function update(UserRequest $request,$id)
    {

        $user = $this->userRepository->update($request->all(),$id);

        $request->session()->flash('success', 'Updated Successfuly');
        return redirect('dashboard/users');
    }
    public function destroy(Request $request,$id)
    {
        $user = $this->userRepository->first();
        if ($user->id == $id) {
            $request->session()->flash('error', 'You Can\'t Delete This User');
            return redirect('dashboard/users');
        }
        $this->userRepository->delete($id);

        $request->session()->flash('success', 'Deleted Successfuly');
        return redirect(route('users.index'));
    }
}
