<?php

namespace Modules\Songs\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use Translatable;

    protected $table = 'songs__songs';
    public $translatedAttributes = [];
    protected $fillable = ['name', 'lyric', 'link', 'description'];
}
