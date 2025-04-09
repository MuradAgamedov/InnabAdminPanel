<?php

namespace Modules\ReviewLink\Http\Controllers;

use App\Services\CommonService;
use App\Http\Controllers\Controller;
use App\Services\ServiceContainer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Modules\ReviewLink\Repositories\ModelRepository;
use Modules\ReviewLink\Models\ReviewLink;

class ReviewLApiinkController extends Controller
{
    public function __construct(
        public ServiceContainer $services,
        public ModelRepository $repository,
        public CommonService $commonService
    ) {}



    public function get_review_link() {
        return response()->json(['data' => ReviewLink::select(['link'])->first()->link]);
    }
}
