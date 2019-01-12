<?php

namespace Modules\Rules\Entities;

use Illuminate\Database\Eloquent\Model;

class RuleTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'rules__rule_translations';
}
