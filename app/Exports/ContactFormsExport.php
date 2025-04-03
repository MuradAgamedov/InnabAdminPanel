<?php

namespace App\Exports;

use App\Models\ContactForm;
use Maatwebsite\Excel\Concerns\FromCollection;


class ContactFormsExport implements FromCollection
{
    public function collection()
    {
        return ContactForm::all();
    }
}
