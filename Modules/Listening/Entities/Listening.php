<?php

namespace Modules\Listening\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Modules\Media\Support\Traits\MediaRelation;
use Modules\Questions\Entities\Question;

class Listening extends Model
{
    use Translatable, MediaRelation;

    protected $table = 'listening__listenings';
    public $translatedAttributes = [];
    protected $fillable = ['id', 'name', 'link', 'description'];

    public function question()
    {
        return $this->hasMany(Question::class, 'listening_id', 'id');
    }

    public function getProfilePictureAttribute()
    {
        return $this->filesByZone('profile_image')->first();
    }
}
