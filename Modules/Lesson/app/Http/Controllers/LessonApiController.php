<?php

namespace Modules\Lesson\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Lesson\Repositories\ModelRepository;
use App\Traits\ExecuteSafely;

class LessonApiController extends Controller
{
    use ExecuteSafely;

    public function __construct(private ModelRepository $repository)
    {
    }

    public function get_lesson(Request $request): JsonResponse
    {
        return $this->executeSafely(function () use ($request) {
            $title_id = $request->id;
            $items = $this->repository->getTrainingByCategoryWith('title_id', $title_id, []);
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
                    'slug' => $item->slug,
                    'link' => $item->link,
                    'playlist_id' => $item->playlist_id
                ];
            });

            return response()->json(['success' => true, 'data' => $arr]);
        }, null, true);
    }
}
