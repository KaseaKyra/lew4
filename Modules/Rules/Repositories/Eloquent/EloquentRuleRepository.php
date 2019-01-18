<?php

namespace Modules\Rules\Repositories\Eloquent;

use Modules\Rules\Events\RuleWasCreated;
use Modules\Rules\Events\RuleWasDeleted;
use Modules\Rules\Events\RuleWasUpdated;
use Modules\Rules\Repositories\RuleRepository;
use Modules\Core\Repositories\Eloquent\EloquentBaseRepository;

class EloquentRuleRepository extends EloquentBaseRepository implements RuleRepository
{
    public function create($data)
    {
        $rule = $this->model->create($data);
        event(new RuleWasCreated($rule, $data));
        return $rule;
    }

    public function update($rule, $data)
    {
        $rule->update($data);
        event(new RuleWasUpdated($rule, $data));
        return $rule;
    }

    public function destroy($rule)
    {
        event(new RuleWasDeleted($rule));
        return $rule->delete();
    }

}
