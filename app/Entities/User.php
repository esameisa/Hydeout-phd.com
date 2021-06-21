<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements Transformable
{
    use Notifiable, TransformableTrait;

    use TransformableTrait;

    protected $fillable = [
		'name',
		'email',
		'password',
	];

	protected $hidden = [
        'password', 'remember_token',
    ];
}
