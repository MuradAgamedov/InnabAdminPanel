<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkshopForm;

class WorkshopFormController extends Controller
{
    public function index()
    {
        $forms = WorkshopForm::all();
        return view('admin.workshop_forms.index', compact('forms'));
    }

    public function destroy($id)
    {
        WorkshopForm::findOrFail($id)->delete();
        return redirect()->route('workshop-forms.index')->with('success', 'Form silindi.');
    }

    public function exportCsv()
    {
        $forms = \App\Models\WorkshopForm::all();

        $filename = "workshop_forms_" . now()->format('Y_m_d_H_i_s') . ".csv";
        $headers = [
            "Content-type" => "text/csv; charset=UTF-8",
            "Content-Disposition" => "attachment; filename=$filename",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        ];

        $callback = function () use ($forms) {
            $file = fopen('php://output', 'w');

            // UTF-8 BOM – Excel uyğunluğu üçün
            fprintf($file, chr(0xEF) . chr(0xBB) . chr(0xBF));

            // Başlıqlar (dəyərlərə uyğun dəyiş)
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
