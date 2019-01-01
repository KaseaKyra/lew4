<?php

namespace Modules\Frontend\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Frontend extends Model
{
    use Translatable;

    protected $table = 'frontend__frontends';
    public $translatedAttributes = [];
    protected $fillable = [];
}
