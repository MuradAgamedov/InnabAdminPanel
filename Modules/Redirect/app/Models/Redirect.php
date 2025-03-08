<?php

namespace Modules\Redirect\Models;

use App\Models\SystemFiles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Redirect\Database\Factories\RedirectFactory;
use Spatie\Translatable\HasTranslations;

class Redirect extends Model
{
    use HasFactory, HasTranslations;

    /**
     * The attributes that are mass assignable.
     */
    protected  $hidden = ["created_at", "updated_at", 'order'];
    protected $guarded = [];
    public $translatable = [];

    protected static function boot()
    {
        parent::boot();


    }

    public function images()
    {
        return $this->hasMany(SystemFiles::class, 'relation_id')->where('model_type', 'redirect')->where('file_type', 'image');
    }

    protected static function newFactory(): RedirectFactory
    {
        //return RedirectFactory::new();
    }
}
