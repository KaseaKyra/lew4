<?php

namespace Modules\Categories\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Translatable;

    protected $table = 'categories__categories';
    public $translatedAttributes = [];
    protected $fillable = ['id', 'name', 'description', 'router_name'];
}
