<?php

namespace Modules\Questions\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Modules\Choose\Entities\Choose;
use Modules\Listening\Entities\Listening;

class Question extends Model
{
    use Translatable;

    protected $table = 'questions__questions';
    public $translatedAttributes = [];
    protected $fillable = ['listening_id', 'question_content', 'answer'];

    public function choose()
    {
        return $this->hasOne(Choose::class, 'question_id', 'id');
    }

    public function listening()
    {
        return $this->belongsTo(Listening::class, 'id', 'listening_id');
    }
}
