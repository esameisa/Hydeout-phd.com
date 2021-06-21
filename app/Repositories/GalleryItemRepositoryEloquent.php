<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\GalleryItemRepository;
use App\Entities\GalleryItem;
use App\Validators\GalleryItemValidator;

/**
 * Class GalleryItemRepositoryEloquent
 * @package namespace App\Repositories;
 */
class GalleryItemRepositoryEloquent extends BaseRepository implements GalleryItemRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return GalleryItem::class;
    }

    public function getAjaxIndex($galleryId)
    {
        $indexQuery = $this->model->newQuery();

        $indexQuery->where(function($q) use ($galleryId){
            $q->where('gallery_id',$galleryId);
        });

        return $indexQuery;
    }    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
