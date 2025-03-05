<?php

namespace Modules\BlogContent\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\BlogContent\Repositories\ModelRepository;
use App\Traits\ExecuteSafely;

class BlogContentApiController extends Controller
{
    use ExecuteSafely;

    public function __construct(private ModelRepository $repository)
    {
    }

    public function get_blogcontent($lang, $slug): JsonResponse
    {
    
        return $this->executeSafely(function () use ($lang, $slug) {
            $blog = $this->repository->getBlog($slug);
            $content = $blog->content;
          

            if ($lang) {
                app()->setLocale($lang);
            }

            if ($content->isEmpty()) {
                return response()->json(['success' => false, 'message' => 'No data found'], 404);
            }

            $arr = $content->map(function ($item) {
                return [
                    'id' => $item->id,
                    'title' => $item->title,
                    'text' => $item->text
                ];
            });

            return response()->json(['success' => true, 'data' => $arr]);
        }, null, true);
    }
}
