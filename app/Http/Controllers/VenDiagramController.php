<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Translate\Models\Translate;

class VenDiagramController extends Controller
{
    public function get_venn_diagram_data() {
        $data = Translate::where("group", "venn_diagram")->get();
        return response(['data' => $data]);
    }
}
