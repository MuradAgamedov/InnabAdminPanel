<?php

namespace Modules\News\Repositories;

use App\Repositories\Repository;
use Modules\News\Models\News;
use Modules\News\Models\VideoLessons;

class ModelRepository extends Repository
{
    protected $modelClass = News::class;

    public function search($query, $limit = 1)
    {
        return $this->modelClass::where('title->' . app()->getLocale(), 'like', "%{$query}%")
            ->orWhere('short_description->' . app()->getLocale(), 'like', "%{$query}%")
            ->paginate($limit);
    }

    public function getPinnedData() {
        return $this->modelClass::where('pinned', 1)->orderBy("pinned_order")->get();
    }
    public function all_activeWith($relations = [])
    {
        return $this->modelClass::orderBy('news_time')->with($relations)->where('status', 1);
    }
}
