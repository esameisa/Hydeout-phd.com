<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\TemplateRepository;
use App\Entities\Events;
use App\Validators\EventsValidator;

/**
 * Class TemplateRepositoryEloquent
 * @package namespace App\Repositories;
 */
class EventsRepositoryEloquent extends BaseRepository implements EventsRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Events::class;
    }

    public function getAjaxIndex()
    {
        return $this->model->newQuery();
    }    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
