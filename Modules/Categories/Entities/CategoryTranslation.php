<?php

namespace Modules\Categories\Entities;

use Illuminate\Database\Eloquent\Model;

class CategoryTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'categories__category_translations';
}
