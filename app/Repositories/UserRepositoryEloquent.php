<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\UserRepository;
use App\Entities\User;
use App\Validators\UserValidator;

/**
 * Class UserRepositoryEloquent
 * @package namespace App\Repositories;
 */
class UserRepositoryEloquent extends BaseRepository implements UserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
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

    public function create(array $attributes)
    {
        $attributes['password'] = bcrypt($attributes['password']);
        parent::create($attributes);
    }

    public function update(array $attributes, $id)
    {
        if (isset($attributes['password']) && !empty($attributes['password']) ) {
            $attributes['password'] = bcrypt($attributes['password']);
        }elseif (!isset($attributes['password']) || !empty($attributes['password'])) {
            $attributes['password'] = $this->find($id)->password;         
        }
        parent::update($attributes, $id);
    }
}




