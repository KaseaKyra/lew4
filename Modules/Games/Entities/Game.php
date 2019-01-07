<?php

namespace Modules\Games\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use Translatable;

    protected $table = 'games__games';
    public $translatedAttributes = [];
    protected $fillable = [];
}
