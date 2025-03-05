<?php

namespace Modules\Calculator\Models;

use App\Models\SystemFiles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Calculator\Database\Factories\CalculatorFactory;
use Spatie\Translatable\HasTranslations;

class Calculator extends Model
{
    use HasFactory, HasTranslations;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];
    public $translatable = [];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $maxOrder = self::max('order');
            $model->order = $maxOrder !== null ? $maxOrder + 1 : 1;
        });
    }

    public function images()
    {
        return $this->hasMany(SystemFiles::class, 'relation_id')->where('model_type', 'calculator')->where('file_type', 'image');
    }

    protected static function newFactory(): CalculatorFactory
    {
        //return CalculatorFactory::new();
    }
}
