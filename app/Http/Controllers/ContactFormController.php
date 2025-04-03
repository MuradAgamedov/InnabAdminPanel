<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarrierAndScholarshipForm;

class ContactFormController extends Controller
{
    public function index()
    {
        $forms = CarrierAndScholarshipForm::all();
        return view('admin.contact_forms.index', compact('forms'));
    }

    public function destroy($id)
    {
        CarrierAndScholarshipForm::findOrFail($id)->delete();
        return redirect()->route('contact-forms.index')->with('success', 'Form silindi.');
    }
}
