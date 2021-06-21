<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\GalleryRepository;
use DataTables;

class GalleryController extends Controller
{

    protected $galleryRepository;

    function __construct(GalleryRepository $galleryRepository)
    {
        $this->galleryRepository = $galleryRepository;
    }
    /**
     * Display a listing of gallery.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = $this->galleryRepository->getAjaxIndex();

        $data = Datatables::of( $gallery )
        ->addColumn('main_image', function($row) {
            $row->main_image_file_name = rawurlencode($row->main_image_file_name);
            return $row->main_image->url('thumb');
        })
        ->addColumn('entity_title', function($el){
            return $el->title;
        })
        ->addColumn('event_type', function($el){
            return $el->entity_type;
        })
        ->addColumn('edit', function($el){
            return route( 'galleries.edit', $el->id );
        })
        ->addColumn('delete', function($el){
            return route( 'galleries.destroy', $el->id );
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
        $input = ['entity_id' => $request->entity,
                  'entity_type' => $request->entity_type,
                  'main_image' => $request->main_image];

        $gallery = $this->galleryRepository->create($input);

        return response()->json($gallery, 201);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $input = ['entity_id' => $request->entity,
                  'entity_type' => $request->entity_type,
                  'main_image' => $request->main_image];

        return response()->json($gallery, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = $this->galleryRepository->delete($id);

        return response()->json($gallery, 204);
    }
}
