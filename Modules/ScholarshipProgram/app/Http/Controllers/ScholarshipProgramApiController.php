<?php

namespace Modules\ScholarshipProgram\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\ScholarshipProgram\Repositories\ModelRepository;
use App\Traits\ExecuteSafely;

class ScholarshipProgramApiController extends Controller
{
    use ExecuteSafely;

    public function __construct(private ModelRepository $repository)
    {
    }

    public function get_scholarshipprogram(Request $request): JsonResponse
    {
        return $this->executeSafely(function () use ($request) {
            $items = $this->repository->all_activeWith(['image']);
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
                    'name' => $item->name,
                    'short_description' => $item->short_description,
                ];
            });

            return response()->json(['success' => true, 'data' => $arr]);
        }, null, true);
    }
}
