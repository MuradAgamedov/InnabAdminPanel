<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarrierAndScholarshipForm extends Model
{
    use HasFactory;

    protected $table = 'carrier_and_scholarship_forms'; // Əgər cədvəl adını dəyişmisənsə, əlavə et

    protected $fillable = [
        'name',
        'date',
        'phone',
        'fin',
        'project',
        'education',
        'student_status',
        'work_status',
        'voen',
        'address',
        'cv_path',
        'work_status_other',
        'student_status_other',
        'education_other',
        'project_other',
    ];
}
