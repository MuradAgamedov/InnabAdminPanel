<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Blog\Models\Blog;
use Modules\Training\Models\Training;

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
}
