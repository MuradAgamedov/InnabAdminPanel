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

        // Faylın validasiyası
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:xlsx,xls|max:10240',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Faylı al
        $file = $request->file('file');

        // Faylın tam yolunu əldə et
        $filePath = $file->getRealPath();

        // Excel faylını yüklə
        $spreadsheet = IOFactory::load($filePath);

        // İlk sheet-i array şəklində al
        $sheet = $spreadsheet->getActiveSheet();
        $data = $sheet->toArray();

        // Məlumatı göstər
        dd($data);
    }
}
