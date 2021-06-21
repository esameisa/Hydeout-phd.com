<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class GalleryItem extends Model implements StaplerableInterface
{
    use EloquentTrait;

    const TYPE_IMAGE = 1;
    const TYPE_VIDEO = 2;

    protected $fillable = ['gallery_id', 'embedded_media', 'type', 'media'];

    public function __construct(array $attributes = array()) {
        $this->hasAttachedFile('media', [
            'styles' => [
                'medium' => '343x341',
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
        return $this->belongsTo('App\Entities\Gallery', 'gallery_id', 'id');
    }

    public function setTypeAttribute($type)
    {
        switch ($type) {
            case 'image':
                $this->attributes['type'] = self::TYPE_IMAGE;
                break;
            case 'video':
                $this->attributes['type'] = self::TYPE_VIDEO;
                break;
        }
    }
}
