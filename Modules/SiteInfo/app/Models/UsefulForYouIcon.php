<?php

namespace Modules\SiteInfo\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UsefulForYouIcon extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'icon',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    public const TYPES = [
        'video_lessons' => 'Video dersler',
        'blog' => 'Blog',
        'career_calculator' => 'Karyera kalkulatoru',
        'seminars_webinars' => 'Seminar və vebinarlar',
        'workshop' => 'Workshop',
        'scholarship_programs' => 'Təqaüd proqramları'
    ];

    public function getTypeNameAttribute()
    {
        return self::TYPES[$this->type] ?? $this->type;
    }
} 