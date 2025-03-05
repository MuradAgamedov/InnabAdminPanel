<?php

namespace Modules\Lang\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Lang\Repositories\ModelRepository;


class LangApiController extends Controller
{


    public function __construct(private ModelRepository $repository)
    {
    }

    public function get_langs(Request $request): JsonResponse
    {
  
        return $this->executeSafely(function () use ($request) {
            $items = $this->repository->all_active();
           
            

            if ($items->isEmpty()) {
                return response()->json(['success' => false, 'message' => 'No data found'], 404);
            }

            $arr = $items->map(function ($item) {
                return [
                    'name' => $item->name,
                    'site_code' => $item->site_code,
                    'ise_default' => $item->is_default
                ];
            });

            return response()->json(['success' => true, 'data' => $arr]);
        }, null, true);
    }


    public function get_langs_group($locale) {
        dd($locale);
    }
}
