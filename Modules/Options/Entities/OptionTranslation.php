<?php

namespace Modules\Options\Entities;

use Illuminate\Database\Eloquent\Model;

class OptionTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'options__option_translations';
}
