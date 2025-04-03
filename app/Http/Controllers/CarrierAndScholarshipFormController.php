<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarrierAndScholarshipForm;
use Illuminate\Support\Facades\Storage;

class CarrierAndScholarshipFormController extends Controller
{
    public function index()
    {
        $forms = CarrierAndScholarshipForm::orderBy('date', 'desc')->get();
        return view('admin.carrier_scholarship_forms.index', compact('forms'));
    }

    public function destroy($id)
    {
        $form = CarrierAndScholarshipForm::findOrFail($id);

        if ($form->cv_path && Storage::disk('public')->exists($form->cv_path)) {
            Storage::disk('public')->delete($form->cv_path);
        }

        $form->delete();

        return redirect()->route('carrier-forms.index')->with('success', 'Form və CV faylı silindi.');
    }

    public function exportCsv()
    {
        $forms = CarrierAndScholarshipForm::orderBy('date', 'desc')->get();

        $filename = "carrier_scholarship_forms_" . now()->format('Y_m_d_H_i_s') . ".csv";
        $headers = [
            "Content-type" => "text/csv; charset=UTF-8",
            "Content-Disposition" => "attachment; filename=$filename",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        ];

        $callback = function () use ($forms) {
            $file = fopen('php://output', 'w');

            // UTF-8 BOM – Excel uyumlu açsın
            fprintf($file, chr(0xEF) . chr(0xBB) . chr(0xBF));

            // Başlıqlar
            fputcsv($file, [
                'Ad Soyad',
                'Telefon',
                'FIN',
                'Doğum Tarixi',
                'Təhsil',
                'Təhsil (Digər)',
                'Tələbə Statusu',
                'Tələbə Statusu (Digər)',
                'İş Statusu',
                'İş Statusu (Digər)',
                'Layihə',
                'Layihə (Digər)',
                'VOEN',
                'Ünvan',
                'CV Linki',
                'Göndərilmə Tarixi'
            ], ';');

            foreach ($forms as $form) {
                $cvUrl = $form->cv_path ? asset('storage/' . $form->cv_path) : '-';

                fputcsv($file, [
                    $form->name,
                    $form->phone,
                    $form->fin,
                    optional($form->date)->format('d.m.Y'),
                    $form->education,
                    $form->education_other,
                    $form->student_status,
                    $form->student_status_other,
                    $form->work_status,
                    $form->work_status_other,
                    $form->project,
                    $form->project_other,
                    $form->voen,
                    $form->address,
                    $cvUrl,
                    $form->created_at->timezone('Asia/Baku')->format('d.m.Y H:i:s'),
                ], ';');
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
