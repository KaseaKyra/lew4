<?php

namespace Modules\Choose\Entities;

use Illuminate\Database\Eloquent\Model;

class ChooseTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'choose__choose_translations';
}
