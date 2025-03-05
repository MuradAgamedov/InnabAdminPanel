<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Google\Client;
use Google\Service\Sheets;
use Google\Service\Drive;

class ContactController extends Controller
{
    // Google Client konfigurasiya funksiyası
    private function getClient($scopes)
    {
        $client = new Client();
        $client->setAuthConfig(storage_path('app/credentials.json'));
        $client->addScope($scopes);
        return $client;
    }

    // Google Sheets-ə məlumat göndərən ümumi funksiya
    private function appendToGoogleSheet($spreadsheetId, $range, $values)
    {
        $client = $this->getClient(Sheets::SPREADSHEETS);
        $service = new Sheets($client);
        $body = new Sheets\ValueRange(['values' => $values]);
        $params = ['valueInputOption' => 'RAW'];
        $service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);
    }

    // Google Drive-a fayl yükləyən ümumi funksiya
    private function uploadToGoogleDrive($file, $folderId)
    {
        $client = $this->getClient(Drive::DRIVE_FILE);
        $driveService = new Drive($client);
        $fileMetadata = new Drive\DriveFile([
            'name' => $file->getClientOriginalName(),
            'parents' => [$folderId]
        ]);

        $content = file_get_contents($file->getRealPath());
        $driveFile = $driveService->files->create($fileMetadata, [
            'data' => $content,
            'mimeType' => $file->getMimeType(),
            'uploadType' => 'multipart',
            'fields' => 'id'
        ]);

        return "https://drive.google.com/file/d/" . $driveFile->id . "/view?usp=sharing";
    }

    // Əlaqə formu üçün funksiya
    public function contactForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'phone' => 'required',
            'email' => 'nullable|email',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            $values = [[$request->name, $request->phone, $request->email, $request->formType]];
            $this->appendToGoogleSheet('1qiecnUMFhrpcZsiicI9U5hD2ZppIaD2IVe4TAx7AV1w', 'innab-contact-form', $values);

            return response()->json(['success' => true, 'message' => 'Data successfully sent to Google Sheets']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to send data to Google Sheets', 'details' => $e->getMessage()], 500);
        }
    }

    // Vebinar formu üçün funksiya
    public function vebinar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'phone' => 'required',
            'email' => 'nullable|email',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            $values = [[$request->name, $request->phone, $request->email, $request->training]];
            $this->appendToGoogleSheet('1qiecnUMFhrpcZsiicI9U5hD2ZppIaD2IVe4TAx7AV1w', 'innab-vebinar-form', $values);

            return response()->json(['success' => true, 'message' => 'Data successfully sent to Google Sheets']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to send data to Google Sheets', 'details' => $e->getMessage()], 500);
        }
    }

    // Workshop formu üçün funksiya
    public function workshop(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'phone' => 'required',
            'email' => 'nullable|email',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            $values = [[$request->name, $request->phone, $request->email, $request->training]];
            $this->appendToGoogleSheet('1qiecnUMFhrpcZsiicI9U5hD2ZppIaD2IVe4TAx7AV1w', 'innab-workshop-form', $values);

            return response()->json(['success' => true, 'message' => 'Data successfully sent to Google Sheets']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to send data to Google Sheets', 'details' => $e->getMessage()], 500);
        }
    }

    // Karyera və təqaüd formu üçün funksiya
    public function carrier_and_schoolarship(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'date' => 'required|date',
            'phone' => 'required',
            'fin' => 'required',
            'cv' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            $cvLink = $this->uploadToGoogleDrive($request->file('cv'), '1P385UpMv58dNSGbYmzXh4CbuuItBeJdd');
            $values = [
                [$request->name, $request->fin, $request->date, $request->phone, $request->project, $request->education, $request->studentStatus, $request->workStatus, $request->voen, $request->address, $cvLink]
            ];

            $this->appendToGoogleSheet('1qiecnUMFhrpcZsiicI9U5hD2ZppIaD2IVe4TAx7AV1w', 'innab-carrier-and-schoolarship-form', $values);

            return response()->json(['success' => true, 'message' => 'Məlumatlar uğurla Google Sheets-ə və Drive-a göndərildi']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Məlumatların göndərilməsi alınmadı', 'details' => $e->getMessage()], 500);
        }
    }
}
