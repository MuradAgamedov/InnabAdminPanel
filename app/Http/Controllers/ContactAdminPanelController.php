<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class ContactAdminPanelController extends Controller
{
    public function contactForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'phone' => 'required',
            'email' => 'nullable|email',
            'form_type' => 'nullable|string',
            'service' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            ContactForm::create($request->only(['name', 'phone', 'email', 'form_type', 'service']));

            return response()->json(['success' => true, 'message' =>  $request->all()]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Məlumatların göndərilməsi alınmadı', 'details' => $e->getMessage()], 500);
        }
    }
}
