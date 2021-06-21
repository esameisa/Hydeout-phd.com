<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Gallery extends Model implements StaplerableInterface
{
    use EloquentTrait;

    protected $fillable = ['main_image', 'entity_id', 'entity_type', 'title'];

    public function __construct(array $attributes = array()) {
        $this->hasAttachedFile('main_image', [
            'styles' => [
                'preview' => '1045x435',
                'medium' => '300x300',
                'thumb' => '100x100'
            ]
        ]);

        parent::__construct($attributes);
    }

    public function getAttributes()
    {
        return parent::getAttributes();
    }

    public function galleryitems()
    {
        return $this->hasMany('App\Entities\GalleryItem', 'gallery_id', 'id');
    }

    public function entity()
    {
        return $this->morphTo();
    }
}
