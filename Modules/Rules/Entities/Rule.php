<?php

namespace Modules\Rules\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Modules\Media\Support\Traits\MediaRelation;
use Modules\Sortings\Entities\Sorting;

class Rule extends Model
{
    use Translatable, MediaRelation;

    protected $table = 'rules__rules';
    public $translatedAttributes = [];
    protected $fillable = ['title', 'example', 'remember', 'be_careful', 'we_say', 'description'];

    public function sorting()
    {
        return $this->hasOne(Sorting::class, 'rule_id', 'id');
    }

    public function getProfilePictureAttribute()
    {
        return $this->filesByZone('profile_image')->first();
    }
}
