<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\EventsRepository;
use App\Repositories\GalleryRepository;
use DB;
use App\Http\Requests\EventRequest;

class EventsController extends Controller
{
    protected $eventsRepository;
    protected $galleryRepository;

    public function __construct(EventsRepository $eventsRepository,GalleryRepository $galleryRepository)
    {
    	$this->eventsRepository = $eventsRepository;
        $this->galleryRepository = $galleryRepository;
    }

    public function index()
    {
    	return view('dashboard.events.index');
    }

    public function edit($id)
    {
        $event = $this->eventsRepository->find($id);

        return view('dashboard.events.edit', compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.events.create');
    }

    public function update(EventRequest $request, $id)
    {
        $event = $this->eventsRepository->find($id);

        $eventInput = ["title" => $request->title,
                       "content" => $request->content,
                       "date" => $request->date,
                       "image" => $request->image
                   ];

        $this->eventsRepository->update($eventInput, $id);

        return redirect()->route('events.index')->withSuccess('Event Updated Successfully');
    }

    public function store(EventRequest $request)
    {
        $event = $this->eventsRepository->makeModel();

        $eventInput = ["title" => $request->title,
                       "content" => $request->content,
                       "date" => $request->date,
                       "image" => $request->image
                   ];
        $event = $event->create($eventInput);

        return redirect()->route('events.index')->withSuccess('Event Updated Successfully');
    }

    public function destroy($id)
    {
        $event = $this->eventsRepository->find($id);
        $gallery = $this->galleryRepository->findWhere(['entity_id' => $event->id,'entity_type' => 'events'])->first();
        if ($gallery) {
            $gallery->delete();
        }
        $event = $this->eventsRepository->delete($id);

        return redirect()->route('events.index')->withSuccess('Event deleted Successfully');
    }
}
