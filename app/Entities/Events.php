<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Events extends Model implements StaplerableInterface
{
    use EloquentTrait;

    protected $fillable = [
        'title', 
        'content',
        'date',
        'image'
    ];

    public function __construct(array $attributes = array()) {
        $this->hasAttachedFile('image', [
            'styles' => [
                'medium' => '700x700',
                'thumb' => '100x100'
            ]
        ]);

        parent::__construct($attributes);
    }

    public function getAttributes()
    {
        return parent::getAttributes();
    }

    public function gallery()
    {
        return $this->morphOne('App\Entities\Gallery', 'entity');
    }

    public function galleryitems()
    {
        return $this->hasManyThrough('App\Entities\GalleryItem', 'App\Entities\Gallery', 'entity_id', 'gallery_id', 'id');
    }
}
