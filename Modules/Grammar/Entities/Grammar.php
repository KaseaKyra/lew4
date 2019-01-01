<?php

namespace Modules\Grammar\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Grammar extends Model
{
    use Translatable;

    protected $table = 'grammar__grammars';
    public $translatedAttributes = [];
    protected $fillable = ['name', 'content'];
}
