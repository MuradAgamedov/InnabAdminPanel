<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Modules\Redirect\Models\Redirect;
use PhpOffice\PhpSpreadsheet\IOFactory;

class RedirectExcellController extends Controller
{
    public function create()
    {
        return view("admin.redirect_excel.index");
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:xlsx,xls|max:10240',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $file = $request->file('file');

        $filePath = $file->getRealPath();

        $spreadsheet = IOFactory::load($filePath);

        $sheet = $spreadsheet->getActiveSheet();
        $data = $sheet->toArray();

        $rows = array_slice($data, 1);
        foreach($rows as $row) {
            Redirect::create(['old_url' => $row[0], 'new_url' => $row[1], 'status_code' => "301"]);
        }
        return view("redirect.index");
    }
}
