<?php

namespace Modules\Redirect\Repositories;

use Modules\Redirect\Models\Redirect;
use App\Repositories\Repository;

class ModelRepository extends Repository
{
    protected $modelClass = Redirect::class;

    public function search($query, $limit = 10)
    {
        return ($this->modelClass)::where('old_url', 'like', "%{$query}%")
            ->orWhere('new_url', 'like', "%{$query}%")
            ->paginate($limit);
    }
}
