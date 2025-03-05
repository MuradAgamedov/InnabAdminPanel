<?php

namespace Modules\HeaderDatas\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\HeaderDatas\Repositories\ModelRepository;
use Modules\HeaderDatas\Models\HeaderDatas;

class HeaderDataApiController extends Controller
{


    public function __construct(private ModelRepository $repository)
    {
    }

    public function get_headerdatas(Request $request): JsonResponse
    {
        return $this->executeSafely(function () use ($request) {
           

            return response()->json(['success' => true, 'data' => HeaderDatas::with('image')->where('status', 1)->orderBy('order')->get()]);
        }, null, true);
    }
}
