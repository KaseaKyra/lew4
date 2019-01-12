<?php

namespace Modules\Inputs\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
    use Translatable;

    protected $table = 'inputs__inputs';
    public $translatedAttributes = [];
    protected $fillable = ['grammar_id', 'answer', 'i1', 'i2', 'i3', 'i4', 'i5'];
}
