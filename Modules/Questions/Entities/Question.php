<?php

namespace Modules\Questions\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Modules\Choose\Entities\Choose;

class Question extends Model
{
    use Translatable;

    protected $table = 'questions__questions';
    public $translatedAttributes = [];
    protected $fillable = ['listening_id', 'question_content', 'answer'];

    public function getChoice()
    {
        return $this->hasOne(Choose::class, 'question_id', 'id');
    }
}
