<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\GalleryRepository;
use DB;

class GalleryController extends Controller
{
    protected $galleryRepository;

    public function __construct(GalleryRepository $galleryRepository)
    {
        $this->galleryRepository = $galleryRepository;
    }

    public function show($entity_type, $entity_id)
    {
        $gallery = $this->galleryRepository->with('galleryitems');
        $gallery = $gallery->findWhere([
            'entity_type' => $entity_type,
            'entity_id' => $entity_id
        ])->first();
        $gallery->setAttribute('image',\URL::to('/').$gallery->main_image->url('preview'));
        $gallery->setAttribute('title',$gallery->entity->title);
        $gallery->setAttribute('date',$gallery->entity->date);
        $next = $this->galleryRepository->findWhere([['id', '>', $gallery->id]])->min('id');
        if (!$next) {
            $next = null;
        }
        $gallery->setAttribute('next_id',$next);
        $gallery->galleryitems->map(function ($item){
            $item['image'] = \URL::to('/').$item->media->url('medium');
            return $item;
        });
        return response()->json($gallery, 200);
    }
}
