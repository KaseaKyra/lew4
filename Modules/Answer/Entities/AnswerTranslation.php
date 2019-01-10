<?php

namespace Modules\Answer\Entities;

use Illuminate\Database\Eloquent\Model;

class AnswerTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'answer__answer_translations';
}
