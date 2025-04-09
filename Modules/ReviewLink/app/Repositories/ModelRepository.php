<?php

namespace Modules\ReviewLink\Repositories;

use Modules\ReviewLink\Models\ReviewLink;
use App\Repositories\Repository;
class ModelRepository extends Repository
{
    protected $modelClass = ReviewLink::class;

    public function search($query, $limit = 1)
    {
        return $this->modelClass::where('title->' . app()->getLocale(), 'like', "%{$query}%")
            ->paginate($limit);
    }

}
