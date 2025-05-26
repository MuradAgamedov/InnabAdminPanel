<?php

namespace Modules\Menu\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Menu\Repositories\ModelRepository;
use App\Traits\ExecuteSafely;
use Modules\Menu\Models\Menu;

class MenuApiController extends Controller
{
    use ExecuteSafely;

    public function __construct(private ModelRepository $repository) {}

    public function get_menu(Request $request): JsonResponse
    {
        $menus = cache()->remember('menus_all', 60 * 60, function () {
            return Menu::select(['id', 'name', 'slug'])->get();
        });

        return response()->json($menus);
    }
}
