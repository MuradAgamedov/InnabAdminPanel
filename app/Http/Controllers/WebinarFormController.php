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
}
