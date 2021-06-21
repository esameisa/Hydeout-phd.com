<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\GalleryItemRepository;
use DataTables;

class GalleryItemController extends Controller
{

    protected $galleryItemRepository;

    function __construct(GalleryItemRepository $galleryItemRepository)
    {
        $this->galleryItemRepository = $galleryItemRepository;
    }

    public function index($galleryId)
    {
        $items = $this->galleryItemRepository->getAjaxIndex($galleryId);

        $data = Datatables::of( $items )
        ->addColumn('type', function($row) {
            $row->type = rawurlencode($row->type);
            return $row->type == 1 ? 'image' : 'video';
        })
        ->addColumn('media', function($row) {
            $row->image_file_name = rawurlencode($row->image_file_name);
            return $row->media->url('thumb');
        })
        ->addColumn('edit', function($el) use($galleryId){
            return route( 'galleries.items.edit', [$galleryId, $el->id] );
        })
        ->addColumn('delete', function($el) use($galleryId){
            return route( 'ajax.galleries.items.destroy', [$galleryId, $el->id] );
        })
        ->make(true);

        return $data;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->galleryItemRepository->create($request->all());

        return response('OK', 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($galleryId, $itemId)
    {
        $this->galleryItemRepository->delete($itemId);

        return redirect()->route('galleries.items.index', $galleryId)->withSuccess('Media Deleted Successfully.');
    }
}
