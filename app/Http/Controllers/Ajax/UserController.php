<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Validator;
use DataTables;
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
		$users = $this->userRepository->getAjaxIndex();

		$data = Datatables::of( $users )
        ->addColumn('edit', function($el) {
            return route( 'users.edit',$el->id);
        })->addColumn('delete', function($el) {
            return route('users.destroy',$el->id);
        })
        ->make(true);

		return $data;
	}
}
