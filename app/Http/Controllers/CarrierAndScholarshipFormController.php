<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarrierAndScholarshipForm;

class CarrierAndScholarshipFormController extends Controller
{
    public function index()
    {
        $forms = CarrierAndScholarshipForm::all();
        return view('admin.carrier_scholarship_forms.index', compact('forms'));
    }

    public function destroy($id)
    {
        CarrierAndScholarshipForm::findOrFail($id)->delete();
        return redirect()->route('carrier-forms.index')->with('success', 'Form silindi.');
    }
}
