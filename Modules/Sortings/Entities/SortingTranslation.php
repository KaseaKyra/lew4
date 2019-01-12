<?php

namespace Modules\Sortings\Entities;

use Illuminate\Database\Eloquent\Model;

class SortingTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'sortings__sorting_translations';
}
