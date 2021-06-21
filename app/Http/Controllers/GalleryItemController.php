<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\GalleryItemRepository;
use DataTables;
use Helper;
use App\Http\Requests\GalleryItemRequest;

class GalleryItemController extends Controller
{

    protected $galleryItemRepository;

    function __construct(GalleryItemRepository $galleryItemRepository)
    {
        $this->galleryItemRepository = $galleryItemRepository;
    }

    public function index($galleryId)
    {
        return view('dashboard.galleryitems.index', compact('galleryId'));
    }

    public function create($galleryId)
    {
        return view('dashboard.galleryitems.create', compact('galleryId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryItemRequest $request, $galleryId)
    {
        $data = ['gallery_id' => $galleryId, 'type' => $request->type];

        if ($request->type == 'video') {
            $data['embedded_media'] = $request->embedded_media;
            $image = Helper::parseYoutube($request->embedded_media);
            if (!$image) {
                return back()->withErrors(['embedded_media' => 'Invalid youtube link'])->withInput();
            }
            $data['media'] = $image;
        } else {
            $data['media'] = $request->media;
        }

        $item = $this->galleryItemRepository->create($data);
        $request->session()->flash('success', 'Added Successfuly');
        return redirect(route('galleries.items.index', $galleryId));
    }

    public function edit($galleryId, $itemId)
    {
        $item = $this->galleryItemRepository->find($itemId);

        return view('dashboard.galleryitems.edit', compact('galleryId', 'item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryItemRequest $request, $galleryId, $itemId)
    {
        $data = ['gallery_id' => $galleryId, 'type' => $request->type];

        if ($request->type == 'video') {
            $data['embedded_media'] = $request->embedded_media;
            $image = Helper::parseYoutube($request->embedded_media);
            if (!$image) {
                return back()->withErrors(['embedded_media' => 'Invalid youtube link'])->withInput();
            }
            $data['media'] = $image;
        } else {
            $data['media'] = $request->media;
        }

        $item = $this->galleryItemRepository->update($data, $itemId);
        $request->session()->flash('success', 'Updated Successfuly');

        return redirect(route('galleries.items.index', $galleryId));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->galleryItemRepository->delete($id);

        return redirect(route('galleries.items.index', $galleryId));
    }
}
