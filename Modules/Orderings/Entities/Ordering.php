<?php

namespace Modules\Orderings\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Modules\Stories\Entities\Story;

class Ordering extends Model
{
    use Translatable;

    protected $table = 'orderings__orderings';
    public $translatedAttributes = [];
    protected $fillable = ['story_id', 'order1', 'order2', 'order3', 'order4', 'order5', 'order6', 'order7', 'order8' ];

    public function story()
    {
        return $this->belongsTo(Story::class, 'id', 'story_id');
    }
}
