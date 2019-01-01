<?php

namespace Modules\Questions\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use Translatable;

    protected $table = 'questions__questions';
    public $translatedAttributes = [];
    protected $fillable = ['listening_id', 'question_content', 'answer'];
}
