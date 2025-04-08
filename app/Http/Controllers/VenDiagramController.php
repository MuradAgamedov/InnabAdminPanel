<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Translate\Models\Translate;

class VenDiagramController extends Controller
{
    public function get_venn_diagram_data($locale)
    {
        app()->setLocale($locale);
        $data = Translate::where("group", "venn_diagram")->get();
        $values = [];
        for ($i = 0; $i <= $data->count(); $i++) {

            dd($data[$i]->value);
            $values[] = $el->value[$locale] ?? null;
        }

        return response(['data' => $values]);
    }
}
