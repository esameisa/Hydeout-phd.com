<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\SettingRepository;
use App\Entities\Setting;
use App\Validators\SettingValidator;

/**
 * Class SettingRepositoryEloquent
 * @package namespace App\Repositories;
 */
class SettingRepositoryEloquent extends BaseRepository implements SettingRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Setting::class;
    }

    public function getAjaxIndex($namespace)
    {

        $indexQuery =  $this->model->newQuery();
        
        $indexQuery->where(function($q) use ($namespace){
            $q->where('namespace',$namespace);
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
