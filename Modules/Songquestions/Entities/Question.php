<?php

namespace Modules\Songquestions\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use Translatable;

    protected $table = 'songquestions__questions';
    public $translatedAttributes = [];
    protected $fillable = ['song_id', 'question_content', 'answer'];

    /*public  function songs*/
}
