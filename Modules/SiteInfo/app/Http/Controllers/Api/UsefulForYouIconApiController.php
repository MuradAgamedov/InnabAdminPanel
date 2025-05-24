<?php

namespace Modules\SiteInfo\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Modules\SiteInfo\Models\UsefulForYouIcon;

class UsefulForYouIconApiController extends Controller
{
    public function index()
    {
        dd(1);
        $icons = UsefulForYouIcon::all()->map(function ($icon) {
            return [
                'id' => $icon->id,
                'type' => $icon->type,
                'type_text' => $icon->type_text,
                'icon' => $icon->icon ? asset($icon->icon) : null,
            ];
        });

        return response()->json([
            'status' => true,
            'data' => $icons
        ]);
    }
} 