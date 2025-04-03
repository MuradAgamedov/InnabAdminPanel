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
}
