<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebinarForm;

class WebinarFormController extends Controller
{
    public function index()
    {
        $forms = WebinarForm::all();
        return view('admin.webinar_forms.index', compact('forms'));
    }

    public function destroy($id)
    {
        WebinarForm::findOrFail($id)->delete();
        return redirect()->route('webinar-forms.index')->with('success', 'Form silindi.');
    }



    public function exportCsv()
    {
        $forms = \App\Models\WebinarForm::all();

        $filename = "webinar_forms_" . now()->format('Y_m_d_H_i_s') . ".csv";
        $headers = [
            "Content-type" => "text/csv; charset=UTF-8",
            "Content-Disposition" => "attachment; filename=$filename",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        ];

        $callback = function () use ($forms) {
            $file = fopen('php://output', 'w');

            // UTF-8 BOM əlavə edilir (Excel üçün uyğundur)
            fprintf($file, chr(0xEF) . chr(0xBB) . chr(0xBF));

            // CSV başlıqları
            fputcsv($file, ['Ad Soyad', 'Telefon', 'Email', 'Xidmət', 'Göndərilmə Tarixi'], ';');

            foreach ($forms as $form) {
                fputcsv($file, [
                    $form->name,
                    $form->phone,
                    $form->email ?? '-',
                    $form->service ?? '-',
                    $form->created_at->timezone('Asia/Baku')->format('d.m.Y H:i:s'),
                ], ';');
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
