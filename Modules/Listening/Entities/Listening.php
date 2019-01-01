<?php

namespace Modules\Listening\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Listening extends Model
{
    use Translatable;

    protected $table = 'listening__listenings';
    public $translatedAttributes = [];
    protected $fillable = ['name', 'link', 'description'];
}
