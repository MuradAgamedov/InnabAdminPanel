<?php

namespace Modules\Admin\Repositories;

use Modules\Admin\Models\Admin;
use App\Repositories\Repository;
class ModelRepository extends Repository
{
    protected $modelClass = Admin::class;

    public function search($query, $limit = 1)
    {
        return $this->modelClass::where('title->' . app()->getLocale(), 'like', "%{$query}%")
            ->paginate($limit);
    }

}
