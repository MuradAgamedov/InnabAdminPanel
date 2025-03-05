<?php

namespace Modules\CourseFAQ\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\CourseFAQ\Repositories\ModelRepository;
use App\Traits\ExecuteSafely;

class CourseFAQApiController extends Controller
{
    use ExecuteSafely;

    public function __construct(private ModelRepository $repository)
    {
    }

    public function get_faq(Request $request): JsonResponse
    {
        return $this->executeSafely(function () use ($request) {
            $course_id = $request->id;
            $items = $this->repository->getTrainingByCategoryWith('course_id', $course_id);
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
                    'question' => $item->question,
                    'answer' => $item->answer,
                ];
            });

            return response()->json(['success' => true, 'data' => $arr]);
        }, null, true);
    }
}
