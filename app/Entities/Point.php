<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Point extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['key','name','value'];


    /**
    * @param Key
    */
    public function getValue($key)
    {
      
      // $settingRepository = new SettingRepository();
      $point = Point::Where(['key'=>$key])->first();
      if ($point == null) {
        return "Not Found";
      }
      return $point->value;
    }
}
