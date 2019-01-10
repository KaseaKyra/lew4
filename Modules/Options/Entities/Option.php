<?php

namespace Modules\Options\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use Translatable;

    protected $table = 'options__options';
    public $translatedAttributes = [];
    protected $fillable = ['listening_id', 'question_id', 'option1', 'option2', 'option3'];
}
