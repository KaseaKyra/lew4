<?php

namespace Modules\Results\Entities;

use Illuminate\Database\Eloquent\Model;

class ResultTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'results__result_translations';
}
