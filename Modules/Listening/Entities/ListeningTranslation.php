<?php

namespace Modules\Listening\Entities;

use Illuminate\Database\Eloquent\Model;

class ListeningTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'listening__listening_translations';
}
