<?php

namespace Modules\Songs\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Modules\Answer\Entities\Answer;

class Song extends Model
{
    use Translatable;

    protected $table = 'songs__songs';
    public $translatedAttributes = [];
    protected $fillable = ['id', 'name', 'lyric', 'link', 'description'];

    public function answer()
    {
        return $this->hasOne(Answer::class, 'song_id', 'id');
    }
}
