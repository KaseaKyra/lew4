<?php

namespace Modules\Songquestions\Entities;

use Illuminate\Database\Eloquent\Model;

class QuestionTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'songquestions__question_translations';
}
