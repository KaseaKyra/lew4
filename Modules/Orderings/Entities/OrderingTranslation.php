<?php

namespace Modules\Orderings\Entities;

use Illuminate\Database\Eloquent\Model;

class OrderingTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'orderings__ordering_translations';
}
