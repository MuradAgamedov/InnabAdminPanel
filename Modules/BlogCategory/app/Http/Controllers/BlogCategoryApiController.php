<?php

namespace Modules\BlogCategory\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\BlogCategory\Repositories\ModelRepository;
use App\Traits\ExecuteSafely;

class BlogCategoryApiController extends Controller
{
    use ExecuteSafely;

    public function __construct(private ModelRepository $repository)
    {
    }

public function get_blogcategory(Request $request): JsonResponse
{
    return $this->executeSafely(function () use ($request) {
        $items = $this->repository->all_activeWith(['blogs']);
        $lang = $request->locale;
        
        if ($lang) {
            app()->setLocale($lang);
        }

        if ($items->isEmpty()) {
            return response()->json(['success' => false, 'message' => 'No data found'], 404);
        }

        $gradients = [
            'linear-gradient(20deg, var(--color-main) 25%, rgba(0, 0, 0, 0) 60%)',
            'linear-gradient(20deg, var(--color-green) 25%, rgba(0, 0, 0, 0) 60%)',
            'linear-gradient(20deg, var(--color-violet) 25%, rgba(0, 0, 0, 0) 60%)',
            'linear-gradient(20deg, var(--color-red) 25%, rgba(0, 0, 0, 0) 60%)'
        ];

        $arr = $items->map(function ($item) use ($gradients) {
            return [
                'id' => $item->id,
                'title' => $item->title,
                'seo_title' => $item->seo_title,
                'seo_keywords' => $item->seo_keywords,
                'seo_description' => $item->seo_description,
                'seo_links' => $item->seo_links,
                'seo_scripts' => $item->seo_scripts,
                'slug' => $item->slug,
                'subData' => $item->blogs->map(function ($blog, $index) use ($gradients) {
                    $gradientIndex = $index % count($gradients); // Gradient döngüsü
                    $gradient = $gradients[$gradientIndex];
                    $imageUrl = $blog->image ? config('app.url') . '/' . $blog->image['url'] : null;
                    $backgroundImage = $imageUrl ? "$gradient, url($imageUrl)" : $gradient;

                    return [
                        'id' => $blog->id,
                        'title' => $blog->title,
                        'slug' => $blog->slug,
                        'short_description' => $blog->short_description,
                        'seo_title' => $blog->seo_title,
                        'seo_keywords' => $blog->seo_keywords,
                        'seo_description' => $blog->seo_description,
                        'background_image' => $backgroundImage, // Gradient ve image eklenmiş
                    ];
                }),
            ];
        });

        return response()->json(['success' => true, 'data' => $arr]);
    }, null, true);
}

}
