<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Blog\Models\Blog;
use Modules\Partners\Models\Partners;
use Modules\Training\Models\Training;
use Modules\VideoLessons\Models\VideoLessons;

class SearchController extends Controller
{
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

    public function search_trainings($params, $perPage = 6)
    {
        $query = strtolower($params);

        $trainings = \Modules\Training\Models\Training::whereRaw('LOWER(title) LIKE ?', ["%{$query}%"])
            ->paginate($perPage);

        return response()->json([
            'data' => $trainings->items(),
            'current_page' => $trainings->currentPage(),
            'total' => $trainings->total(),
            'per_page' => $trainings->p`erPage(),`
            'last_page' => $trainings->lastPage(),
            'next_page_url' => $trainings->nextPageUrl(),
            'prev_page_url' => $trainings->previousPageUrl(),
        ]);
    }


    public function search_blogs($params, $perPage = 6) {
        $query = strtolower($params);

        $trainings = Blog::whereRaw('LOWER(title) LIKE ?', ["%{$query}%"])
            ->paginate($perPage);

        return response()->json([
            'data' => $trainings->items(),
            'current_page' => $trainings->currentPage(),
            'total' => $trainings->total(),
            'per_page' => $trainings->perPage(),
            'last_page' => $trainings->lastPage(),
            'next_page_url' => $trainings->nextPageUrl(),
            'prev_page_url' => $trainings->previousPageUrl(),
        ]);
    }
}
