<?php

namespace Modules\Songs\Entities;

use Illuminate\Database\Eloquent\Model;

class alphabetTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'songs__alphabet_translations';
}
