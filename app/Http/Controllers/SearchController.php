<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Blog\Models\Blog;
use Modules\Partners\Models\Partners;
use Modules\Training\Models\Training;
use Modules\VideoLessons\Models\VideoLessons;

class SearchController extends Controller
{
    public $table_token;
    public $cvUploadFolderId;

    public function __construct()
    {
        $this->table_token = env('table_token');
        $this->cvUploadFolderId = env('CV_UPLOAD_FOLDER_ID');
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
        dd($this->table_token);
        $query = strtolower($params);

        $trainings = \Modules\Training\Models\Training::where(function ($q) use ($query) {
            $q->whereRaw('LOWER(JSON_UNQUOTE(JSON_EXTRACT(title, "$.az"))) LIKE ?', ["%{$query}%"])
                ->orWhereRaw('LOWER(JSON_UNQUOTE(JSON_EXTRACT(title, "$.en"))) LIKE ?', ["%{$query}%"]);
        })->paginate($perPage);

        $data = $trainings->map(function ($item) use ($lang) {
            return [
                'id' => $item->id,
                'title' => $item->getTranslation('title', $lang) ?? $item->getTranslation('title', 'en'),
                'slug' => $item->getTranslation('slug', $lang) ?? $item->getTranslation('slug', 'en'),
                'short_description' => $item->getTranslation('short_description', $lang) ?? $item->getTranslation('short_description', 'en'),
                'top_text_title' => $item->getTranslation('top_text_title', $lang) ?? $item->getTranslation('top_text_title', 'en'),
                'top_text' => $item->getTranslation('top_text', $lang) ?? $item->getTranslation('top_text', 'en'),
                'bottom_text_title' => $item->getTranslation('bottom_text_title', $lang) ?? $item->getTranslation('bottom_text_title', 'en'),
                'bottom_text' => $item->getTranslation('bottom_text', $lang) ?? $item->getTranslation('bottom_text', 'en'),
                'list' => $item->getTranslation('list', $lang) ?? $item->getTranslation('list', 'en'),
                'seo_title' => $item->getTranslation('seo_title', $lang) ?? $item->getTranslation('seo_title', 'en'),
                'seo_keywords' => $item->getTranslation('seo_keywords', $lang) ?? $item->getTranslation('seo_keywords', 'en'),
                'seo_description' => $item->getTranslation('seo_description', $lang) ?? $item->getTranslation('seo_description', 'en'),
                'seo_links' => $item->seo_links,
                'seo_scripts' => $item->seo_scripts,
                'image_url' => env('APP_URL') ,
                'image_alt' => $item->getTranslation('image_alt', $lang) ?? $item->getTranslation('image_alt', 'en'),
                'order' => $item->order,
                'status' => $item->status,
                'category_id' => $item->category_id,
                'created_at' => $item->created_at,
                'updated_at' => $item->updated_at,
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

        $blogs = \Modules\Blog\Models\Blog::where(function ($q) use ($query) {
            $q->whereRaw('LOWER(JSON_UNQUOTE(JSON_EXTRACT(title, "$.az"))) LIKE ?', ["%{$query}%"])
                ->orWhereRaw('LOWER(JSON_UNQUOTE(JSON_EXTRACT(title, "$.en"))) LIKE ?', ["%{$query}%"]);
        })->paginate($perPage);

        $data = $blogs->map(function ($item) use ($lang) {
            return [
                'id' => $item->id,
                'title' => $item->getTranslation('title', $lang) ?? $item->getTranslation('title', 'en'),
                'slug' => $item->getTranslation('slug', $lang) ?? $item->getTranslation('slug', 'en'),
                'short_description' => $item->getTranslation('short_description', $lang) ?? $item->getTranslation('short_description', 'en'),
                'seo_title' => $item->getTranslation('seo_title', $lang) ?? $item->getTranslation('seo_title', 'en'),
                'seo_keywords' => $item->getTranslation('seo_keywords', $lang) ?? $item->getTranslation('seo_keywords', 'en'),
                'seo_description' => $item->getTranslation('seo_description', $lang) ?? $item->getTranslation('seo_description', 'en'),
                'seo_links' => $item->seo_links,
                'seo_scripts' => $item->seo_scripts,
                'image_url' => env('APP_URL') . '/' . $item->image->url,
                'image_alt_text' => $item->getTranslation('image_alt_text', $lang) ?? $item->getTranslation('image_alt_text', 'en'),
                'order' => $item->order,
                'status' => $item->status,
                'category_id' => $item->category_id,
                'created_at' => $item->created_at,
                'updated_at' => $item->updated_at,
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
