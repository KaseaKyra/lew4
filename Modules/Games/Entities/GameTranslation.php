<?php

namespace Modules\Games\Entities;

use Illuminate\Database\Eloquent\Model;

class GameTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'games__game_translations';
}
