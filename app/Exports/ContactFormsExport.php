<?php

namespace App\Exports;

use App\Models\ContactForm;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ContactFormsExport 
{
    public function collection()
    {
        return ContactForm::all();
    }

    public function map($form): array
    {
        return [
            $form->name,
            $form->phone,
            $form->service,
            $form->formType ?? '-',
            $form->created_at->timezone('Asia/Baku')->format('d.m.Y H:i:s'),
        ];
    }

    public function headings(): array
    {
        return [
            'Ad Soyad',
            'Telefon',
            'Xidmət',
            'Form Tipi',
            'Göndərilmə Tarixi',
        ];
    }
}
