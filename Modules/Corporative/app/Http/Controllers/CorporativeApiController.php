<?php

namespace Modules\Corporative\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Corporative\Repositories\ModelRepository;


class CorporativeApiController extends Controller
{


    public function __construct(private ModelRepository $repository)
    {
    }

   public function get_corporative(Request $request): JsonResponse
{
    return $this->executeSafely(function () use ($request) {
        $item = $this->repository->find(1, ['image', 'banner']);

        $lang = $request->locale;

        if ($lang) {
            app()->setLocale($lang);
        }

        if (!$item) {
            return response()->json(['success' => false, 'message' => 'No data found'], 404);
        }

        // Assuming `$item->corporative_trainings` is a string like:
        // "Kompüter bilikləri: MS Excel, MS Office, Excel VBA, MOSE; Data Analitika: vba"
        $corporative_trainings = $item->corporative_trainings;

        // Convert the string into an array of arrays
        $trainingsArray = $this->transformTrainings($corporative_trainings);

        $data = [
            'image' => $item->image ? config('app.url') . '/' . $item->image['url'] : null,
            'banner' => $item->banner ? config('app.url') . '/' . $item->banner['url'] : null,
            'banner_title' => $item->banner_title,
            'banner_description' => $item->banner_description,
            'content_title' => $item->content_title,
            'content_top_text' => $item->content_top_text,
            'content_text' => $item->content_text,
            'corporative_trainings' => $trainingsArray, // Add transformed data here
        ];

        return response()->json(['success' => true, 'data' => $data]);
    }, null, true);
}

// Helper function to transform the string into a structured array
private function transformTrainings(string $trainings): array
{
    $result = [];
    
    // Split the string by ';' to get separate training sections
    $sections = explode(';', $trainings);

    foreach ($sections as $section) {
        // Split the title and trainings by ':'
        list($title, $trainingList) = explode(':', $section);
        
        // Trim and split the trainings by ',' to get individual trainings
        $trainingsArray = array_map('trim', explode(',', $trainingList));
        
        // Add the title and its related trainings to the result array
        $result[] = [
            'title' => trim($title),
            'trainings' => $trainingsArray
        ];
    }
    
    return $result;
}

}
