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
}
