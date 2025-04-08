<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Translate\Models\Translate;

class VenDiagramController extends Controller
{
    public function get_venn_diagram_data($locale)
    {
        $data = Translate::where("group", "venn_diagram")->get();
            dd($data);
        $values = [];
        foreach ($data as $el) {
            $values[] = $el->value[$locale] ?? null;
        }

        return response(['data' => $values]);
    }
}
