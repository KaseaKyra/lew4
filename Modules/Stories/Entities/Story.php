<?php

namespace Modules\Stories\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Modules\Orderings\Entities\Ordering;
use Modules\Results\Entities\Result;

class Story extends Model
{
    use Translatable;

    protected $table = 'stories__stories';
    public $translatedAttributes = [];
    protected $fillable = ['name', 'content'];

    public function ordering()
    {
        return $this->hasOne(Ordering::class, 'story_id', 'id');
    }

    public function result()
    {
        return $this->hasOne(Result::class, 'story_id', 'id');
    }
}
