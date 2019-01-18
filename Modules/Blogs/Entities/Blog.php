<?php

namespace Modules\Blogs\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Modules\Media\Support\Traits\MediaRelation;

class Blog extends Model
{
    use Translatable, MediaRelation;

    protected $table = 'blogs__blogs';
    public $translatedAttributes = [];
    protected $fillable = ['title', 'content', 'link', 'description'];

    public function getProfilePictureAttribute()
    {
        return $this->filesByZone('profile_image')->first();
    }
}
