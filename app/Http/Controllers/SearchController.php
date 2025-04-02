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

    public function search_page(Request $request)
    {

        $query = strtolower($request->q); // axtarışı kiçik hərfə çevir

        $trainings = \Modules\Training\Models\Training::whereRaw('LOWER(title) LIKE ?', ["%{$query}%"])->get();
        $blogs = \Modules\Blog\Models\Blog::whereRaw('LOWER(title) LIKE ?', ["%{$query}%"])->get();
        $news = \Modules\News\Models\News::whereRaw('LOWER(title) LIKE ?', ["%{$query}%"])->get();
        $workshops = \Modules\Workshop\Models\Workshop::whereRaw('LOWER(title) LIKE ?', ["%{$query}%"])->get();
        $webinars = \Modules\Vebinar\Models\Vebinar::whereRaw('LOWER(title) LIKE ?', ["%{$query}%"])->get();
        $videos = VideoLessons::whereRaw('LOWER(title) LIKE ?', ["%{$query}%"])->get();
        $scholarships = \Modules\ScholarshipProgram\Models\ScholarshipProgram::whereRaw('LOWER(name) LIKE ?', ["%{$query}%"])->get();
        $partners = Partners::whereRaw('LOWER(name) LIKE ?', ["%{$query}%"])->get();
        $projects = \Modules\Project\Models\Project::whereRaw('LOWER(title) LIKE ?', ["%{$query}%"])->get();
        return response()->json([
            'trainings' => $trainings,
            'blogs' => $blogs,
            'news' => $news,
            'workshops' => $workshops,
            'webinars' => $webinars,
            'videos' => $videos,
            'scholarships' => $scholarships,
            'partners' => $partners,
            'projects' => $projects,
        ]);
    }
}
