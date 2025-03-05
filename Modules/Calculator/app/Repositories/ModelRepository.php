<?php

namespace Modules\Calculator\Repositories;

use Modules\Calculator\Models\Calculator;
use App\Repositories\Repository;
class ModelRepository extends Repository
{
    protected $modelClass = Calculator::class;

    public function search($query, $limit = 1)
    {
        return $this->modelClass::where('title->' . app()->getLocale(), 'like', "%{$query}%")
            ->paginate($limit);
    }

}
