<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Blog\Models\Blog;
use Modules\Partners\Models\Partners;
use Modules\Training\Models\Training;
use Modules\VideoLessons\Models\VideoLessons;

class SearchController extends Controller
{
    public $domain;

    public function __construct()
    {
        $this->domain = "https://admin.innab.az";

    }
    public function search(Request $request) {
        $query = $request->q;
        $trainings = Training::where('title', 'LIKE', "%$query%")->paginate(5);
        $blogs = Blog::where('title', 'LIKE', "%$query%")->orderBy('created_at', 'desc')->paginate(5);

        $response = [
            'trainings' => $trainings,
            'blogs' => $blogs
        ];

        return response()->json($response);
    }

    public function search_trainings($lang, $params, $perPage = 6)
    {
        app()->setLocale($lang);
        $query = strtolower($params);

        $trainings = \Modules\Training\Models\Training::with('category')->whereRaw(
            'LOWER(JSON_UNQUOTE(JSON_EXTRACT(title, "$.' . $lang . '"))) LIKE ?',
            ["%{$query}%"]
        )->paginate($perPage);


        $data = $trainings->map(function ($item) use ($lang) {
            return [
                'id' => $item->id,
                'title' => $item->getTranslation('title', $lang),
                'slug' => $item->getTranslation('slug', $lang),
                'short_description' => $item->getTranslation('short_description', $lang),
                'top_text_title' => $item->getTranslation('top_text_title', $lang),
                'top_text' => $item->getTranslation('top_text', $lang),
                'bottom_text_title' => $item->getTranslation('bottom_text_title', $lang),
                'bottom_text' => $item->getTranslation('bottom_text', $lang),
                'list' => $item->getTranslation('list', $lang),
                'seo_title' => $item->getTranslation('seo_title', $lang),
                'seo_keywords' => $item->getTranslation('seo_keywords', $lang),
                'seo_description' => $item->getTranslation('seo_description', $lang),
                'seo_links' => $item->seo_links,
                'seo_scripts' => $item->seo_scripts,
                'image_url' => optional($item->main_images)->where('type', "main_image_training_" . $lang)->first()
                    ? config('app.url') . '/' . optional($item->main_images)->where('type', "main_image_training_" . $lang)->first()->url
                    : null,
                'image_alt_text' => $item->getTranslation('image_alt', $lang),
                'order' => $item->order,
                'status' => $item->status,
                'category_id' => $item->category_id,
                'created_at' => $item->created_at,
                'updated_at' => $item->updated_at,
                'category' => $item->category ? [
                    'id' => $item->category->id,
                    'slug' => $item->category->getTranslation('slug', $lang),
                ] : null,

            ];
        });

        return response()->json([
            'data' => $data,
            'current_page' => $trainings->currentPage(),
            'total' => $trainings->total(),
            'per_page' => $trainings->perPage(),
            'last_page' => $trainings->lastPage(),
            'next_page_url' => $trainings->nextPageUrl(),
            'prev_page_url' => $trainings->previousPageUrl(),
        ]);
    }







    public function search_blogs($lang, $params, $perPage = 6)
    {
        app()->setLocale($lang);
        $query = strtolower($params);
        $blogs = \Modules\Blog\Models\Blog::with('category')->whereRaw(
            'LOWER(JSON_UNQUOTE(JSON_EXTRACT(title, "$.' . $lang . '"))) LIKE ?',
            ["%{$query}%"]
        )->paginate($perPage);


        $data = $blogs->map(function ($item) use ($lang) {
            return [
                'id' => $item->id,
                'title' => $item->getTranslation('title', $lang),
                'slug' => $item->getTranslation('slug', $lang),
                'short_description' => $item->getTranslation('short_description', $lang),
                'seo_title' => $item->getTranslation('seo_title', $lang),
                'seo_keywords' => $item->getTranslation('seo_keywords', $lang),
                'seo_description' => $item->getTranslation('seo_description', $lang),
                'seo_links' => $item->seo_links,
                'seo_scripts' => $item->seo_scripts,
                'image_url' => $item->image ? $this->domain . '/' . $item->image->url : null,
                'image_alt_text' => $item->getTranslation('image_alt_text', $lang),
                'order' => $item->order,
                'status' => $item->status,
                'category_id' => $item->category_id,
                'created_at' => $item->created_at,
                'updated_at' => $item->updated_at,
                'category' => $item->category ? [
                    'id' => $item->category->id,
                    'slug' => $item->category->getTranslation('slug', $lang),
                ] : null,

            ];
        });

        return response()->json([
            'data' => $data,
            'current_page' => $blogs->currentPage(),
            'total' => $blogs->total(),
            'per_page' => $blogs->perPage(),
            'last_page' => $blogs->lastPage(),
            'next_page_url' => $blogs->nextPageUrl(),
            'prev_page_url' => $blogs->previousPageUrl(),
        ]);
    }
}
