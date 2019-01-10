<?php

namespace Modules\Answer\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use Translatable;

    protected $table = 'answer__answers';
    public $translatedAttributes = [];
    protected $fillable = ['song_id', 'a1', 'a2', 'a3', 'a4', 'a5'];
}
