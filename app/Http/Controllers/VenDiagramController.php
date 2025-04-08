<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Translate\Models\Translate;

class VenDiagramController extends Controller
{
    public function get_venn_diagram_data($locale)
    {
        $data = Translate::where("group", "venn_diagram")->get();

        $values = [];
        foreach ($data as $el) {
            $decodedValue = json_decode($el->value, true); // Decode the JSON string
            if (isset($decodedValue[$locale])) {
                $values[] = $decodedValue[$locale]; // Add the value for the specified locale
            }
        }
        return response(['data' => $values]);

    }
}
