<?php

namespace Modules\Training\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Training\Repositories\ModelRepository;
use App\Traits\ExecuteSafely;

class TrainingApiController extends Controller
{
    use ExecuteSafely;

    public function __construct(private ModelRepository $repository)
    {
    }

 public function get_trainings(Request $request): JsonResponse 
{
    return $this->executeSafely(function () use ($request) {
        $category_id = $request->id;
        $items = $this->repository->getTrainingByCategoryWith('category_id', $category_id, ['main_images','image', 'files']);
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
                'icon' => optional($item->image)['url'] ? config('app.url') . '/' . $item->image['url'] : null,
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
        });

        return response()->json(['success' => true, 'data' => $arr]);
    }, null, true);
}
}
