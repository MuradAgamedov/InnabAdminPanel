<?php
namespace Modules\Project\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Project\Repositories\ModelRepository;
use App\Traits\ExecuteSafely;

class ProjectApiController extends Controller
{
    use ExecuteSafely;

    public function __construct(private ModelRepository $repository)
    {
    }

    public function get_projects(Request $request): JsonResponse
    {
        return $this->executeSafely(function () use ($request) {
            $items = $this->repository->all_activeWith([
                'image',
                'mobile_product_image',
                'product_image',
                'mobile_product_qr'
            ]);
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
                    'mobile_product_image' => $item->mobile_product_image ? config('app.url') . '/' . $item->mobile_product_image['url'] : null,
                    'product_image' => $item->product_image ? config('app.url') . '/' . $item->product_image['url'] : null,
                    'mobile_product_qr' => $item->mobile_product_qr ? config('app.url') . '/' . $item->mobile_product_qr['url'] : null,
                    'title' => $item->title,
                    'android_link' => $item->android_link,
                    'apple_link' => $item->apple_link,
                    'slug' => $item->slug,
                    'card_description' => $item->card_description,
                    'text' => $item->text,
                    'product_description' => $item->product_description,
                    'product_price' => $item->product_price,
                    'mobile_title' => $item->mobile_title,
                    'mobile_description' => $item->mobile_description,
                    'mobile_qr_text' => $item->mobile_qr_text,
                    'seo_title' => $item->seo_title,
                    'requirements' => $item->requirements,
                    'meta_keywords' => $item->meta_keywords,
                    'meta_description' => $item->meta_description,
                    'seo_links' => $item->seo_links,
                    'seo_scripts' => $item->seo_scripts,
                    'is_corporative' => $item->is_corporative,
                    'is_project' => $item->is_project,
                ];
            });

            return response()->json(['success' => true, 'data' => $arr]);
        }, null, true);
    }

    public function get_project($lang, $slug): JsonResponse
    {
        $item = $this->repository->getProject($slug);

        if ($lang) {
            app()->setLocale($lang);
        }

        if (!$item) {
            return response()->json(['success' => false, 'message' => 'No data found'], 404);
        }

        $arr = [
            'id' => $item->id,
            'image' => $item->image ? config('app.url') . '/' . $item->image['url'] : null,
            'mobile_product_image' => $item->mobile_product_image ? config('app.url') . '/' . $item->mobile_product_image['url'] : null,
            'product_image' => $item->product_image ? config('app.url') . '/' . $item->product_image['url'] : null,
            'mobile_product_qr' => $item->mobile_product_qr ? config('app.url') . '/' . $item->mobile_product_qr['url'] : null,
            'title' => $item->title,
            'slug' => $item->slug,
            'card_description' => $item->card_description,
            'text' => $item->text,
            'product_description' => $item->product_description,
            'product_price' => $item->product_price,
            'mobile_title' => $item->mobile_title,
            'mobile_description' => $item->mobile_description,
            'mobile_qr_text' => $item->mobile_qr_text,
            'seo_title' => $item->seo_title,
            'requirements' => $item->requirements,
            'meta_keywords' => $item->meta_keywords,
            'meta_description' => $item->meta_description,
            'seo_links' => $item->seo_links,
            'seo_scripts' => $item->seo_scripts,
            'is_corporative' => $item->is_corporative,
            'is_project' => $item->is_project,
        ];

        return response()->json(['success' => true, 'data' => $arr]);
    }
}
