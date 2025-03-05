<?php

namespace Modules\Workshop\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Workshop\Repositories\ModelRepository;
use App\Traits\ExecuteSafely; // Trait əlavə edilib

class WorkshopApiController extends Controller
{
    use ExecuteSafely; // Trait istifadə olunur

    public function __construct(private ModelRepository $repository)
    {
    }

    public function get_workshop(Request $request): JsonResponse
    {
        return $this->executeSafely(function () use ($request) {
            $items = $this->repository->all_activeWith(['images']);
            $lang = $request->locale;

            if ($lang) {
                app()->setLocale($lang);
            }

            if ($items->isEmpty()) {
                return response()->json(['success' => false, 'message' => 'No data found'], 404);
            }

           $arr = $items->map(function ($item) use ($lang) {
                $image = $item->images ? $item->images->where('type', "image_".$lang)->first() : null;
                return [
                    'image' => $image ? config('app.url') . '/' . $image->url : null,
                    'title' => $item->title,
                    'slug' => $item->slug,
                    'spikers' => array_map('trim', explode(',', $item->spikers)),
                    'event_datetime' => $item->event_datetime,
                    'place' => $item->place,
                ];
            });


            return response()->json(['success' => true, 'data' => $arr]);
        }, null, true);
    }
}
