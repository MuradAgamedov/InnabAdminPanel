<?php

namespace Modules\TrainingSubject\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\TrainingSubject\Repositories\ModelRepository;


class TrainingSubjectApiConteoller extends Controller
{


    public function __construct(private ModelRepository $repository)
    {
    }

    public function get_trainingsubject(Request $request): JsonResponse
    {
  
          return $this->executeSafely(function () use ($request) {
           $training_id = $request->id;
           $items = $this->repository->getTrainingByCategoryWith('training_id', $training_id);
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
                    'name' => $item->name,
                    'description' => $item->description
                ];
            });

            return response()->json(['success' => true, 'data' => $arr]);
        }, null, true);
    }
}
