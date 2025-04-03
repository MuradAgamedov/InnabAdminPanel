<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarrierAndScholarshipForm extends Model
{
    use HasFactory;

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
    ];
}
