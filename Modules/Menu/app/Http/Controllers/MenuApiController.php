<?php

namespace Modules\Menu\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Menu\Repositories\ModelRepository;
use App\Traits\ExecuteSafely;

class MenuApiController extends Controller
{
    use ExecuteSafely;

    public function __construct(private ModelRepository $repository)
    {
    }

    public function get_menu(Request $request): JsonResponse
    {
        return $this->executeSafely(function () use ($request) {
            $items = $this->repository->all_active();
            $lang = $request->locale;

            if ($lang) {
                app()->setLocale($lang);
            }

            if ($items->isEmpty()) {
                return response()->json(['success' => false, 'message' => 'No data found'], 404);
            }

            $arr = $items->map(function ($item) {
                return [
                    'title' => $item->title,
                    'slug' => $item->slug,
                    'seo_title' => $item->seo_title,
                    'seo_keywords' => $item->seo_keywords,
                    'seo_description' => $item->seo_description,
                    'seo_links' => $item->seo_links,
                    'seo_scripts' => $item->seo_scripts,
                    'parent_id' => $item->parent_id,
                ];
            });

            return response()->json(['success' => true, 'data' => $arr]);
        }, null, true);
    }
}
