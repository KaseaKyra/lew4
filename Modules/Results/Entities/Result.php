<?php

namespace Modules\Results\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Modules\Stories\Entities\Story;

class Result extends Model
{
    use Translatable;

    protected $table = 'results__results';
    public $translatedAttributes = [];
    protected $fillable = ['story_id', 'result1', 'result2', 'result3', 'result4', 'result5', 'result6', 'result7', 'result8' ];

    public function story()
    {
        return $this->belongsTo(Story::class, 'id', 'story_id');
    }
}
