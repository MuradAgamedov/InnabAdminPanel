<?php

namespace Modules\VideoLessons\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\VideoLessons\Repositories\ModelRepository;

class VideoLessonsApiController extends Controller
{
    public function __construct(private ModelRepository $repository)
    {
    }

    public function get_videolessons(Request $request): JsonResponse
    {
        $category_id = $request->id;
        $perPage = 6;
        $page = $request->get('page', 1); // Default to page 1 if 'page' query is not present

        $items = $this->repository->getTrainingByCategoryWith('category_id', $category_id, ['image'])
                                  ->paginate($perPage, ['*'], 'page', $page);

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
                'image' => $item->image ? config('app.url') . '/' . $item->image['url'] : null,
                'category_id' => $item->category_id,
                'title' => $item->title,
                'slug' => $item->slug,
                'short_description' => $item->short_description,
                'seo_title' => $item->seo_title,
                'seo_keywords' => $item->seo_keywords,
                'seo_description' => $item->seo_description,
                'seo_links' => $item->seo_links,
                'seo_scripts' => $item->seo_scripts,
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
    }

    public function get_videolesson(Request $request): JsonResponse
    {
        $lesson = $this->repository->getLessonBySlug($request->slug, ['titles']);
        $lang = $request->locale;

        if (!$lesson) {
            return response()->json(['success' => false, 'message' => 'No data found'], 404);
        }

        app()->setLocale($lang);

        $lessonContents = $lesson->titles()->paginate(5); // Paginate lesson contents with 5 items per page
        $page = $request->get('page', 1);

        $arr = $lessonContents->map(function ($item) {
            return [
                'id' => $item->id,
                'image' => $item->image ? config('app.url') . '/' . $item->image['url'] : null,
                'title' => $item->title,
                'slug' => $item->slug,
                'short_description' => $item->short_description,
                'seo_title' => $item->seo_title,
                'seo_keywords' => $item->seo_keywords,
                'seo_description' => $item->seo_description,
                'seo_links' => $item->seo_links,
                'seo_scripts' => $item->seo_scripts,
                'links' => $item->links->map(function ($link) {
                    return [
                        'id' => $link->id,
                        'title' => $link->title,
                        'link' => $link->link,
                        'playlist_id' => $link->playlist_id,
                    ];
                }),
            ];
        });

        return response()->json([
            'success' => true,
            'data' => $arr,
            'pagination' => [
                'total' => $lessonContents->total(),
                'per_page' => $lessonContents->perPage(),
                'current_page' => $lessonContents->currentPage(),
                'last_page' => $lessonContents->lastPage(),
                'from' => $lessonContents->firstItem(),
                'to' => $lessonContents->lastItem(),
            ],
        ]);
    }
}
