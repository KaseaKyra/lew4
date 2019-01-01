<?php

namespace Modules\Songs\Entities;

use Illuminate\Database\Eloquent\Model;

class SongTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'songs__song_translations';
}
