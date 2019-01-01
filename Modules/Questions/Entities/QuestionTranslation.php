<?php

namespace Modules\Questions\Entities;

use Illuminate\Database\Eloquent\Model;

class QuestionTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'questions__question_translations';
}
