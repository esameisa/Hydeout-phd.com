<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SettingRequest;
use App\Repositories\SettingRepository;
use Validator;
use App\Entities\Setting;

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
		return view('dashboard.settings.index',compact('namespace'));
	}

	public function edit($id)
	{
		$setting = $this->settingRepository->find($id);
		return view('dashboard.settings.edit',compact('setting'));
	}

	public function update(SettingRequest $request,$id)
	{
		$setting = $this->settingRepository->find($id);
		if ($setting->type == 'text' || $setting->type == 'content') {
			if ($setting->key == 'about_page_video') {
				$data = $request->only('name','value');
				$image = \Helper::parseYoutube($request->value);
				if (!$image) {
					return back()->withErrors(['value' => 'Invalid Link'])->withInput();
				}
				$imageSetting = $this->settingRepository->findWhere(['key'=>'about_page_image','namespace'=>'about_page'])->first();
				
				$this->settingRepository->update(['name'=>$imageSetting->name , 'value_image' => $image],$imageSetting->id);

				$this->settingRepository->update( $request->only('name','value'), $id );
			}else{
				$this->settingRepository->update( $request->only('name','value'), $id );
			}
		}elseif ($setting->type == 'image') {
			$validator = Validator::make($request->all(), [
			    'value_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			]);
			if ($validator->fails())
			{
			    return back()->withErrors($validator)->withInput();
			}
			$this->settingRepository->update( $request->all(), $id );
		}
		$request->session()->flash('success', 'Updated Successfuly');
		return redirect( route('settings.index').'?namespace='.$setting->namespace);
	}
}
