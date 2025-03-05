<?php

namespace Modules\News\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\News\Repositories\ModelRepository;
use Modules\News\Models\News;
use App\Traits\ExecuteSafely;

class NewsApiController extends Controller
{
    use ExecuteSafely;

    public function __construct(private ModelRepository $repository)
    {
    }

 public function get_news(Request $request): JsonResponse
    {
        return $this->executeSafely(function () use ($request) {
            $lang = $request->locale;
            $perPage = 6;
            $page = $request->get('page', 1); // Default to page 1 if 'page' query is not present

            if ($lang) {
                app()->setLocale($lang);
            }

            $items = $this->repository->all_activeWith(['image'])->paginate($perPage, ['*'], 'page', $page);

            if ($items->isEmpty()) {
                return response()->json(['success' => false, 'message' => 'No data found'], 404);
            }

            $arr = $items->map(function ($item) {
                return [
                    'id' => $item->id,
                    'image' => $item->image ? config('app.url') . '/' . $item->image['url'] : null,
                    'title' => $item->title,
                    'published_at' => $item->news_time,
                    'page_title' => $item->page_title,
                    'text' => $item->text,
                    'slug' => $item->slug,
                    'short_description' => $item->short_description,
                    'seo_title' => $item->seo_title,
                    'seo_keywords' => $item->seo_keywords,
                    'seo_description' => $item->seo_description,
                    'seo_links' => $item->seo_links,
                    'seo_scripts' => $item->seo_scripts,
                    'pined' => $item->pined,
                    'pined_order' => $item->pined_order,
                ];
            });

            return response()->json([
                'success' => true,
                'data' => $arr,
                'pagination' => [
                    'total' => $items->total(),
                    'per_page' => $perPage,
                    'current_page' => $items->currentPage(),
                    'last_page' => $items->lastPage(),
                    'from' => $items->firstItem(),
                    'to' => $items->lastItem(),
                ],
            ]);
        }, null, true);
    }

    public function get_one_news($lang, $slug): JsonResponse
    {
        return $this->executeSafely(function () use ($slug, $lang) {
            $item = $this->repository->getBySlug(News::class, $slug, ['image']);
          

            if ($lang) {
                app()->setLocale($lang);
            }

            return response()->json([
                'image' => $item->image ? config('app.url') . '/' . $item->image['url'] : null,
                'title' => $item->title,
                'page_title' => $item->page_title,
                'published_at' => $item->created_at,
                'text' => $item->text,
                'slug' => $item->slug,
                'short_description' => $item->short_description,
                'seo_title' => $item->seo_title,
                'seo_keywords' => $item->seo_keywords,
                'seo_description' => $item->seo_description,
                'seo_links' => $item->seo_links,
                'seo_scripts' => $item->seo_scripts,
                'pined' => $item->pined,
                'pined_order' => $item->pined_order,
            ]);
        }, null, true);
    }
}
