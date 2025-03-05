<?php

namespace Modules\Translate\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Translate\Repositories\ModelRepository;
use App\Traits\ExecuteSafely;
use Modules\Translate\Models\Translate;
class TranslateApiController extends Controller
{
    use ExecuteSafely;

    public function __construct(private ModelRepository $repository)
    {
    }

    public function get_translate($lang, Request $request): JsonResponse
    {

        return $this->executeSafely(function () use ($request) {
            $group = $request->group;
            $keyword = $request->keyword;
            $item = $this->repository->getTranslate($group, $keyword);
   

            $lang = $request->locale;

            if ($lang) {
                app()->setLocale($lang);
            }

            if (!$item) {
                return response()->json(['success' => false, 'message' => 'No data found'], 404);
            }

            $arr = [
                'value' => $item->value
            ];

            return response()->json(['success' => true, 'data' => $arr]);
        }, null, true);
    }

    public function get_translate_group($group) {
       

        $translates = Translate::where('group', $group)->get();
        return response()->json(['success' => true, 'translates' => $translates]);
    }
}
