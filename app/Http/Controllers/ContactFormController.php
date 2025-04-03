<?php

namespace App\Http\Controllers;

use App\Exports\ContactFormsExport;
use App\Models\ContactForm;
use Maatwebsite\Excel\Facades\Excel;


use OpenSpout\Writer\Common\Creator\WriterEntityFactory;

class ContactFormController extends Controller
{
    public function index()
    {
        $forms = ContactForm::all();
        return view('admin.contact_forms.index', compact('forms'));
    }

    public function destroy($id)
    {
        ContactForm::findOrFail($id)->delete();
        return redirect()->route('contact-forms.index')->with('success', 'Form silindi.');
    }

    public function exportCsv()
    {
        $forms = ContactForm::all();

        $filename = "forms_" . now()->format('Y_m_d_H_i_s') . ".csv";
        $headers = [
            "Content-type" => "text/csv; charset=UTF-8",
            "Content-Disposition" => "attachment; filename=$filename",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        ];

        $callback = function () use ($forms) {
            $file = fopen('php://output', 'w');

            // UTF-8 BOM - Excel üçün
            fprintf($file, chr(0xEF) . chr(0xBB) . chr(0xBF));

            // Header (sətrlərin ayrılması üçün `;` istifadə edilir)
            fputcsv($file, ['Ad Soyad', 'Telefon', 'Xidmət', 'Form Tipi', 'Göndərilmə Tarixi'], ';');

            // Məlumatlar
            foreach ($forms as $form) {
                fputcsv($file, [
                    $form->name,
                    $form->phone,
                    $form->service,
                    $form->formType ?? '-',
                    $form->created_at->timezone('Asia/Baku')->format('d.m.Y H:i:s'),
                ], ';');
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }




 
}
