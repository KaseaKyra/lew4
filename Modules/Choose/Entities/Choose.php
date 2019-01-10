<?php

namespace Modules\Choose\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Choose extends Model
{
    use Translatable;

    protected $table = 'choose__chooses';
    public $translatedAttributes = [];
    protected $fillable = ['question_id', 'option1', 'option2', 'option3'];
}
