<?php

namespace Modules\Frontend\Entities;

use Illuminate\Database\Eloquent\Model;

class FrontendTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'frontend__frontend_translations';
}
