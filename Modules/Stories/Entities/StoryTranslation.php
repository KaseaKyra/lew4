<?php

namespace Modules\Stories\Entities;

use Illuminate\Database\Eloquent\Model;

class StoryTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'stories__story_translations';
}
