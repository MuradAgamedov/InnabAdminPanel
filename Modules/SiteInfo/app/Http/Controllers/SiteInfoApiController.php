<?php

namespace Modules\SiteInfo\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\SiteInfo\Repositories\ModelRepository;
use App\Traits\ExecuteSafely;
use Modules\SiteInfo\Models\SiteInfo;
class SiteInfoApiController extends Controller
{
    use ExecuteSafely;

    public function __construct(private ModelRepository $repository)
    {
    }

    public function get_siteinfo($lang, Request $request): JsonResponse
    {
        return $this->executeSafely(function () use ($request, $lang) {
            if($lang) {
                app()->setLocale($lang);
            }
            return response()->json(['success' => true, 'data' => SiteInfo::with(['header_footer', 'header_top', 'header_image', 'vebinar_icon', 'workshop_icon', 'scholarship_icon'])->get()]);
        }, null, true);
    }
}
