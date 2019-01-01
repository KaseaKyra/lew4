<?php

namespace Modules\Grammar\Entities;

use Illuminate\Database\Eloquent\Model;

class GrammarTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'grammar__grammar_translations';
}
