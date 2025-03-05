<?php

namespace Modules\Blog\Repositories;

use App\Repositories\Repository;
use Modules\Blog\Models\Blog;
use Modules\VideoLessons\Models\VideoLessons;
use Illuminate\Support\Facades\Schema;
class ModelRepository extends Repository
{
    protected $modelClass = Blog::class;
    public function search($query, $limit = 1)
    {
        return $this->modelClass::where('title->' . app()->getLocale(), 'like', "%{$query}%")
            ->orWhere('short_description->' . app()->getLocale(), 'like', "%{$query}%")
            ->paginate($limit);
    }

       public function getTrainingByCategoryWith($relation, $relation_id, $relations = [])
        {
    
            $model = new $this->modelClass;

    
            $query = $model::where($relation, $relation_id);

           
            if (Schema::hasColumn($model->getTable(), 'order')) {
                $query->orderBy('order');
            } else {
                $query->orderBy('id');
            }

           
            if (Schema::hasColumn($model->getTable(), 'status')) {
                $query->where('status', 1);
            }

     
            return $query->with($relations);
        }



    public function getBlog($slug) {
         return $this->modelClass::where('slug', 'like', "%{$slug}%")
            ->first();
    }
}
