<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Translate\Models\Translate;

class VenDiagramController extends Controller
{
    public function get_venn_diagram_data($locale)
    {
        // Set the application locale to the specified locale
        app()->setLocale($locale);

        // Retrieve all translations where the group is 'venn_diagram'
        $data = Translate::where("group", "venn_diagram")->get();

        // Use map to transform the collection and extract the 'value' field
        $values = $data->map(function ($item) {
            return $item->value ?? null;
        });

        // Return the values as a JSON response
        return response(['data' => $values]);
    }
}
