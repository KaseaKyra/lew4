<?php

namespace Modules\Blogs\Entities;

use Illuminate\Database\Eloquent\Model;

class BlogTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'blogs__blog_translations';
}
