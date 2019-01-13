<?php

namespace Modules\Rules\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Modules\Sortings\Entities\Sorting;

class Rule extends Model
{
    use Translatable;

    protected $table = 'rules__rules';
    public $translatedAttributes = [];
    protected $fillable = ['title', 'example', 'remember', 'be_careful', 'we_say', 'description'];

    public function sorting()
    {
        return $this->hasMany(Sorting::class, 'rule_id', 'id');
    }
}
