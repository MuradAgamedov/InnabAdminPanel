<?php
namespace Modules\Customer\Models;

use App\Models\SystemFiles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $hidden = ['order', "created_at", "updated_at", "order"];
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
        return $this->hasMany(SystemFiles::class, 'relation_id')
            ->where('model_type', 'customer')
            ->where('file_type', 'image');
    }

    public function image()
    {
        return $this->hasOne(SystemFiles::class, 'relation_id')
            ->where('model_type', 'customer')
            ->where('file_type', 'image')
            ->select('url', 'relation_id');
    }

    // Custom relation to return image URL
    public function imageWithUrl()
    {
        return $this->hasOne(SystemFiles::class, 'relation_id')
            ->where('model_type', 'customer')
            ->where('file_type', 'image')
            ->select('url', 'relation_id');
    }

    // Accessor to append the full URL for the image
    public function getImageUrlAttribute()
    {
        $image = $this->imageWithUrl()->first(); // Fetch the image record

        if ($image && $image->url) {
            return config('app.url') . '/' . $image->url;
        }

        return null; // Return null if no image is found
    }

    protected static function newFactory()
    {
        // Return the factory (if needed)
        // return BlogFactory::new();
    }
}
