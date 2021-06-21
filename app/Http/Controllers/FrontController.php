<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ContactRepository;
use App\Repositories\SettingRepository;
use App\Repositories\MessageRepository;
use App\Repositories\StoreRepository;
use App\Repositories\GalleryRepository;
use App\Repositories\EventsRepository;
use App\Http\Requests\MessageRequest;

use Carbon\Carbon;

use App\Entities\Setting;
use App\Entities\Point;
class FrontController extends Controller
{
	/**
	* @var ContactRepository
    * @var SettingRepository
    * @var messageRepository
    * @var storeRepository
	* @var galleryRepository
	*/
    protected $contactRepository;
    protected $SettingRepository;
    protected $messageRepository;
    protected $storeRepository;
    protected $galleryRepository;
    protected $eventsRepository;

    public function __construct(ContactRepository $contactRepository, SettingRepository $settingRepository,MessageRepository $messageRepository,StoreRepository $storeRepository,GalleryRepository $galleryRepository,EventsRepository $eventsRepository)
    {
    	$this->contactRepository = $contactRepository;
    	$this->settingRepository = $settingRepository;
        $this->messageRepository = $messageRepository;
        $this->storeRepository = $storeRepository;
        $this->galleryRepository = $galleryRepository;
        $this->eventsRepository = $eventsRepository;
    }

    public function index()
    {
    	$data = array();
    	$data['contacts'] = $this->contactRepository->pluck('value','key');
        $data['stores'] = $this->storeRepository->all();
        $data['galleries'] = $this->getGalleries();

        // get today date
        $today = Carbon::now()->toDateString();
        // get upcoming event
        $data['upcoming'] = ($this->getUpComingEvent($today)) ?: $this->getUpComingEvent($today);


        // return $data['galleries'];
        $setting = new Setting();
        $point = new Point();
    	return view('frontend.index',compact('data','setting','point'));
    }

    public function storeMessage(MessageRequest $request)
    {
        $this->messageRepository->create($request->all());
        return redirect('/#!/contact');
    }

    public function getGalleries()
    {
        $result = $this->galleryRepository->all();
        return $result;
    }

    public function getGallery($id)
    {
        return 'success';
    }


    private function getUpComingEvent($today)
    {
        $upcoming = $this->eventsRepository->scopeQuery(function($query){
            return $query->orderBy('date','asc');
        })->findWhere([['date', '>=', $today]])->first();

        if ($upcoming) {
            $upcomingArr = [
                'title' => $upcoming->title,
                'content' => $upcoming->content,
                'date' => $upcoming->date,
                'image' => $upcoming->image->url('medium'),
            ];

            return (object)$upcomingArr;
        }
        return null;
    }
}
