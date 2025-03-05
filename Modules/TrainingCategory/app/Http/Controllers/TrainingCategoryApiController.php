<?php

namespace Modules\TrainingCategory\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\TrainingCategory\Repositories\ModelRepository;
use App\Traits\ExecuteSafely;

class TrainingCategoryApiController extends Controller
{
    use ExecuteSafely;

    public function __construct(private ModelRepository $repository)
    {
    }

  public function get_categories(Request $request): JsonResponse
{
    return $this->executeSafely(function () use ($request) {
        $items = $this->repository->all_activeWith('trainings');
        $lang = $request->locale;

        if ($lang) {
            app()->setLocale($lang);
        }

        if ($items->isEmpty()) {
            return response()->json(['success' => false, 'message' => 'No data found'], 404);
        }
  
        $arr = $items->map(function ($item) use ($lang) {
            return [
                'id' => $item->id,
                'title' => $item->title,
                'seo_title' => $item->seo_title,
                'slug' => $item->slug,
                'subtitle' => $item->subtitle,
                'seo_keywords' => $item->seo_keywords,
                'seo_description' => $item->seo_description,
                'seo_links' => $item->seo_links,
                'seo_scripts' => $item->seo_scripts,
                'subData' => $item->trainings->map(function ($item) use ($lang) {
                    $image = !empty($item->images) && isset($item->images[0]['url']) ? $item->images[0]['url'] : null;
                    return [
                        'id' => $item->id,
                        'title' => $item->title,
                        'icon' => $item->images ? config('app.url') . '/' . $image : null,
                        'main_image' => optional($item->main_images)->where('type', "main_image_training_".$lang)->first() 
                            ? config('app.url') . '/' . optional($item->main_images)->where('type', "main_image_training_".$lang)->first()->url 
                            : null,
                        'file' => optional($item->files)->where('type', "education_plan_".$lang)->first()
                            ? config('app.url') . '/' . optional($item->files)->where('type', "education_plan_".$lang)->first()->url 
                            : null,
                        'slug' => $item->slug,
                        'short_description' => $item->short_description,
                        'top_text_title' => $item->top_text_title,
                        'top_text' => $item->top_text,
                        'bottom_text_title' => $item->bottom_text_title,
                        'bottom_text' => $item->bottom_text,
                        'seo_title' => $item->seo_title,
                        'list' => $item->list,
                        'seo_keywords' => $item->seo_keywords,
                        'seo_description' => $item->seo_description,
                        'seo_links' => $item->seo_links,
                        'seo_scripts' => $item->seo_scripts,
                    ];
                })
            ];
        });

        return response()->json(['success' => true, 'data' => $arr]);
    }, null, true);
}
}
