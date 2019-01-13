<?php

namespace Modules\Sortings\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Modules\Rules\Entities\Rule;

class Sorting extends Model
{
    use Translatable;

    protected $table = 'sortings__sortings';
    public $translatedAttributes = [];
    protected $fillable = ['id', 'rule_id', 'question', 'i1', 'i2', 'i3', 'i4', 'i5'];

    public function rule()
    {
        return $this->belongsTo(Rule::class, 'id', 'rule_id');
    }
}
