<?php

namespace Modules\Stories\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use Translatable;

    protected $table = 'stories__stories';
    public $translatedAttributes = [];
    protected $fillable = ['name', 'content'];
}
