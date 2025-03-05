<?php

namespace Modules\UserRole\Repositories;

use Modules\UserRole\Models\UserRole;
use App\Repositories\Repository;
class ModelRepository extends Repository
{
    protected $modelClass = UserRole::class;

    public function search($query, $limit = 1)
    {
        return $this->modelClass::where('title->' . app()->getLocale(), 'like', "%{$query}%")
            ->paginate($limit);
    }

}
