<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\GalleryRepository;
use App\Repositories\EventsRepository;
use App\Http\Requests\GalleryRequest;
use Validator;
class GalleryController extends Controller
{
    protected $galleryRepository;

    public function __construct(GalleryRepository $galleryRepository, EventsRepository $eventsRepository)
    {
        $this->galleryRepository = $galleryRepository;
        $this->eventsRepository = $eventsRepository;
    }

    public function index()
    {
        return view('dashboard.galleries.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($eventId = null)
    {
        if (!$eventId) {
            $route = ['galleries.store'];
            return view('dashboard.galleries.create', compact('route'));
        }
        
        $event = $this->eventsRepository->find($eventId);
        $route = ['events.galleries.store', $event->id];        

        return view('dashboard.galleries.create', compact('event', 'route'));
    }

    public function store(GalleryRequest $request, $entityId = null)
    {
        $entityType = $entityId ? 'events' : 'galleries';
        $gallery = $this->galleryRepository->create(
                [
                    'title' => $request->title,
                    'main_image' => $request->main_image, 
                    'entity_type' => $entityType, 
                    'entity_id' => $entityId
                ]
            );

        return redirect()->route('galleries.items.create', $gallery->id)->withSuccess('Gallery Updated Successfully');
    }

    public function edit(... $params)
    {
        // if params > 1 then it's an event gallery
        if (count($params) > 1) {
            $gallery = $this->galleryRepository->find($params[1]);
            $route = ['events.galleries.update', $params[0], $params[1]];
        } else {
            $gallery = $this->galleryRepository->find($params[0]);
            $route = ['galleries.update',$params[0]];
        }
        
        return view('dashboard.galleries.edit', compact('gallery', 'route'));
    }

    public function destroy($id)
    {
        $gallery = $this->galleryRepository->delete($id);

        return redirect()->route('galleries.index')->withSuccess('Gallery deleted Successfully');

    }

    public function update(GalleryRequest $request,... $params)
    {
        $data = array(
                'title' => $request->title,
                'main_image' => $request->main_image, 
            );
        // if params > 1 then it's an event gallery
        if (count($params) > 1) {
            $data['entity_id'] = $params[0];
            $data['gallery_id'] = $params[1];
            $data['entity_type'] = 'events';
        } else {
            $data['gallery_id'] = $params[0];
            $data['entity_type'] = 'galleries';
        }

        // validate data
        $validator = Validator::make($data, [
            'gallery_id' => 'required|exists:galleries,id',
        ]);

        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }

        $this->galleryRepository->update($data, $data['gallery_id']);

        return redirect()->route('galleries.index')->withSuccess('Gallery Updated Successfully');
    }
}
