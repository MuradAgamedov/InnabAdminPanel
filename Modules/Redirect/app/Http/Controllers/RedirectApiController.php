<?php

namespace Modules\Redirect\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Redirect\Models\Redirect;

class RedirectApiController extends Controller
{
    public function get_redirect(): JsonResponse
    {
        $redirects = Redirect::all(); // Bütün Redirect qeydlərini alır

        return response()->json([
            'success' => true,
            'data' => $redirects
        ]);
    }
}
