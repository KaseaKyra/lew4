<?php

namespace Modules\Songs\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class alphabet extends Model
{
    use Translatable;

    protected $table = 'songs__alphabets';
    public $translatedAttributes = [];
    protected $fillable = [];
}
