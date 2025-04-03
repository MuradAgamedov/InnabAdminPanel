<?php

namespace App\Http\Controllers;

use App\Models\CarrierAndScholarshipForm;
use App\Models\ContactForm;
use App\Models\WebinarForm;
use App\Models\WorkshopForm;
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
            'formType' => 'nullable|string',
            'service' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            ContactForm::create($request->only(['name', 'phone', 'email', 'formType', 'service']));

            return response()->json(['success' => true, 'message' => 'Məlumatlar uğurla yadda saxlanıldı']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Məlumatların göndərilməsi alınmadı', 'details' => $e->getMessage()], 500);
        }
    }


    public function vebinar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'phone' => 'required',
            'email' => 'nullable|email',
            'service' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            WebinarForm::create($request->only(['name', 'phone', 'email', 'service']));

            return response()->json(['success' => true, 'message' => 'Məlumatlar uğurla yadda saxlanıldı']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Məlumatların göndərilməsi alınmadı', 'details' => $e->getMessage()], 500);
        }
    }


    public function workshop(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'phone' => 'required',
            'email' => 'nullable|email',
            'service' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            WorkshopForm::create($request->only(['name', 'phone', 'email', 'service']));

            return response()->json(['success' => true, 'message' => 'Məlumatlar uğurla yadda saxlanıldı']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Məlumatların göndərilməsi alınmadı', 'details' => $e->getMessage()], 500);
        }
    }



    public function carrier_and_schoolarship(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'date' => 'required|date',
            'phone' => 'required|string',
            'fin' => 'required|string',
            'cv' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2048',
            'project' => 'nullable|string',
            'project_other' => 'nullable|string',
            'education' => 'nullable|string',
            'education_other' => 'nullable|string',
            'student_status' => 'nullable|string',
            'student_status_other' => 'nullable|string',
            'work_status' => 'nullable|string',
            'work_status_other' => 'nullable|string',
            'voen' => 'nullable|string',
            'address' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            // CV faylını yadda saxla
            $cvPath = $request->file('cv')->store('cvs', 'public'); // public diskdə saxlayırıq ki, storage link işləsin

            // Məlumatları bazaya yaz
            CarrierAndScholarshipForm::create([
                'name' => $request->name,
                'date' => $request->date,
                'phone' => $request->phone,
                'fin' => $request->fin,
                'project' => $request->project,
                'project_other' => $request->project_other,
                'education' => $request->education,
                'education_other' => $request->education_other,
                'student_status' => $request->student_status,
                'student_status_other' => $request->student_status_other,
                'work_status' => $request->work_status,
                'work_status_other' => $request->work_status_other,
                'voen' => $request->voen,
                'address' => $request->address,
                'cv_path' => $cvPath,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Müraciət uğurla göndərildi.',
                'cv_link' => asset('storage/' . $cvPath)
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Məlumatların göndərilməsi alınmadı',
                'details' => $e->getMessage()
            ], 500);
        }
    }
}
