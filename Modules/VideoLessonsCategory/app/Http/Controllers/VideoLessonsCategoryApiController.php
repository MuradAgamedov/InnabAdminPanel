<?php

namespace Modules\VideoLessonsCategory\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\VideoLessonsCategory\Repositories\ModelRepository;


class VideoLessonsCategoryApiController extends Controller
{


    public function __construct(private ModelRepository $repository)
    {
    }

    public function get_videolessonscategory(Request $request): JsonResponse
    {
        return $this->executeSafely(function () use ($request) {
            $items = $this->repository->all_activeWith([]);
            $lang = $request->locale;

            if ($lang) {
                app()->setLocale($lang);
            }

            if ($items->isEmpty()) {
                return response()->json(['success' => false, 'message' => 'No data found'], 404);
            }

            $arr = $items->map(function ($item) {
                return [
                    'id' => $item->id,
                    'title' => $item->title,
                    'seo_title' => $item->seo_title,
                    'seo_keywords' => $item->seo_keywords,
                    'seo_description' => $item->seo_description,
                    'seo_links' => $item->seo_links,
                    'seo_scripts' => $item->seo_scripts,
                    'slug' => $item->slug,
                    "subData" => $item->lessons->map(function($lesson){
                         return [
                            'id' => $lesson->id,
                            'image' => $lesson->image ? config('app.url') . '/' . $lesson->image['url'] : null,
                            'category_id' => $lesson->category_id,
                            'title' => $lesson->title,
                            'slug' => $lesson->slug,
                            'short_description' => $lesson->short_description,
                            'seo_title' => $lesson->seo_title,
                            'seo_keywords' => $lesson->seo_keywords,
                            'seo_description' => $lesson->seo_description,
                            'seo_links' => $lesson->seo_links,
                            'seo_scripts' => $lesson->seo_scripts,
                        ];
                    })
                ];
            });

            return response()->json(['success' => true, 'data' => $arr]);
        }, null, true);
    }
}
