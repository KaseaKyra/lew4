<?php

namespace Modules\Inputs\Entities;

use Illuminate\Database\Eloquent\Model;

class InputTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'inputs__input_translations';
}
