<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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

        $filtered = array_diff_key($data[0], ['column_to_exclude' => '']);

        dd($filtered);
    }
}
