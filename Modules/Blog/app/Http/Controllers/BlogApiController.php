<?php

namespace Modules\Blog\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Blog\Repositories\ModelRepository;
use App\Traits\ExecuteSafely;

class BlogApiController extends Controller
{
    use ExecuteSafely;

    public function __construct(private ModelRepository $repository)
    {
    }

    public function get_blog(Request $request): JsonResponse
    {
        return $this->executeSafely(function () use ($request) {
            $category_id = $request->id;
            $perPage = 8;
            $page = $request->get('page', 1); // Default to page 1 if 'page' query is not present
    
            $items = $this->repository->getTrainingByCategoryWith('category_id', $category_id, ['image'])
                                      ->paginate($perPage, ['*'], 'page', $page);
    
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

            $arr = $items->map(function ($item, $index) use ($gradients) {
                $gradientIndex = $index % count($gradients);
                $gradient = $gradients[$gradientIndex];
                $imageUrl = $item->image ? config('app.url') . '/' . $item->image['url'] : null;
                $backgroundImage = $imageUrl ? "$gradient, url($imageUrl)" : null;

                return [
                    'id' => $item->id,
                    'category_id' => $item->category_id,
                    'background_image' => $backgroundImage,
                    'title' => $item->title,
                    'slug' => $item->slug,
                    'short_description' => $item->short_description,
                    'seo_title' => $item->seo_title,
                    'seo_keywords' => $item->seo_keywords,
                    'seo_description' => $item->seo_description,
                    'seo_links' => $item->seo_links,
                    'seo_scripts' => $item->seo_scripts
                ];
            });

            return response()->json([
                'success' => true,
                'data' => $arr,
                'pagination' => [
                    'total' => $items->total(),
                    'per_page' => $perPage,
                    'current_page' => $items->currentPage(),
                    'last_page' => $items->lastPage(),
                    'from' => $items->firstItem(),
                    'to' => $items->lastItem(),
                ],
            ]);
        }, null, true);
    }



public function get_blog_content($lang, $slug) {
    return $this->executeSafely(function () use ($lang, $slug) {
        $blog = $this->repository->getBlog($slug);
        $content = $blog->content;

        if ($lang) {
            app()->setLocale($lang);
        }

        if (!$blog) {
            return response()->json(['success' => false, 'message' => 'Blog not found'], 404);
        }

        $gradients = [
            'linear-gradient(20deg, var(--color-main) 25%, rgba(0, 0, 0, 0) 60%)',
            'linear-gradient(20deg, var(--color-green) 25%, rgba(0, 0, 0, 0) 60%)',
            'linear-gradient(20deg, var(--color-violet) 25%, rgba(0, 0, 0, 0) 60%)',
            'linear-gradient(20deg, var(--color-red) 25%, rgba(0, 0, 0, 0) 60%)'
        ];

        $imageUrl = $blog->image ? config('app.url') . '/' . $blog->image['url'] : null;
        $backgroundImage = $imageUrl ? $gradients[0] . ", url($imageUrl)" : null;

        $blogData = [
            'id' => $blog->id,
            'category_id' => $blog->category_id,
            'background_image' => $backgroundImage,
            'title' => $blog->title,
            'slug' => $blog->slug,
            'short_description' => $blog->short_description,
            'seo_title' => $blog->seo_title,
            'seo_keywords' => $blog->seo_keywords,
            'seo_description' => $blog->seo_description,
            'seo_links' => $blog->seo_links,
            'seo_scripts' => $blog->seo_scripts
        ];

        $contentData = $content->map(function ($item) {
            return [
                'id' => $item->id,
                'title' => $item->title,
                'text' => $item->text
            ];
        });

        $responseData = array_merge($blogData, ['content' => $contentData]);

        return response()->json(['success' => true, 'data' => $responseData]);
    }, null, true);
}

}
