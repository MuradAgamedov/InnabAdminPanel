<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarrierAndScholarshipForm;
use App\Models\ContactForm;

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
}
