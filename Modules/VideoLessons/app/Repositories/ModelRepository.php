<?php

namespace Modules\VideoLessons\Repositories;
use Illuminate\Support\Facades\Schema;
use App\Repositories\Repository;
use Modules\VideoLessons\Models\VideoLessons;

class ModelRepository extends Repository
{
    protected $modelClass = VideoLessons::class;


    public function search($query, $limit = 1)
    {
        return $this->modelClass::where('title->' . app()->getLocale(), 'like', "%{$query}%")
            ->orWhere('short_description->' . app()->getLocale(), 'like', "%{$query}%")
            ->paginate($limit);
    }

        public function getAllWidthCategory($limit, $category_id) {
            return $this->modelClass::orderBy('order')->where('category_id', $category_id)->paginate($limit);
        }
        public function searchWithCategory($query, $limit = 1, $category_id)
        {
            return $this->modelClass::where('category_id', $category_id)
                ->where(function ($queryBuilder) use ($query) {
                    $queryBuilder->where('title->' . app()->getLocale(), 'like', "%{$query}%")
                        ->orWhere('short_description->' . app()->getLocale(), 'like', "%{$query}%");
                })
                ->paginate($limit);
        }


        public function getLessonBySlug($slug, $relation=[]) {
            return $this->modelClass::where('slug', 'like', "%{$slug}%")->with($relation)->first();
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

}
