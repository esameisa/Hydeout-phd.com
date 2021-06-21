<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;
use App\Repositories\SettingRepository;

class Setting extends Model implements Transformable, StaplerableInterface
{
    use TransformableTrait;
    use EloquentTrait;

    protected $fillable = [
    	'name',
    	'key',
    	'value',
    	'type',
    	'value_image',
    	'namespace'
    ];

    protected $settingRepository;
    
    public function __construct(array $attributes = array()) {
		$this->hasAttachedFile('value_image', [
			'styles' => [
				'medium' => '300x300',
				'thumb' => '100x100'
			]
		]);

    // $this->settingRepository = $settingRepository;

		parent::__construct($attributes);
	
  }

      /**
     * Get all of the current attributes on the model.
     *
     * @return array
     */
    public function getAttributes()
    {
        return parent::getAttributes();
    }


    /**
    * @param Key
    * @param Namespace
    */
    public function getValue($key,$namespace)
    {
      
      // $settingRepository = new SettingRepository();
      $setting = Setting::Where(['namespace'=>$namespace,'key'=>$key])->first();
      if ($setting == null) {
        return "Not Found";
      }
      if ($setting->type == 'image') {
        return $setting->value_image->url();    
      }
      return $setting->value;
    }


}
