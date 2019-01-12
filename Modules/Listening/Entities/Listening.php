<?php

namespace Modules\Listening\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Modules\Questions\Entities\Question;

class Listening extends Model
{
    use Translatable;

    protected $table = 'listening__listenings';
    public $translatedAttributes = [];
    protected $fillable = ['id',  'name', 'link', 'description'];

    public function getQuestion()
    {
        return $this->hasMany(Question::class, 'listening_id', 'id');
    }
}
