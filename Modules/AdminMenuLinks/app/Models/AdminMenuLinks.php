<?php

namespace Modules\AdminMenuLinks\Models;

use App\Models\SystemFiles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\AdminMenuLinks\Database\Factories\AdminMenuLinksFactory;
use Spatie\Translatable\HasTranslations;
use Modules\UserRole\Models\UserPermissions;
class AdminMenuLinks extends Model
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
        return $this->hasMany(SystemFiles::class, 'relation_id')->where('model_type', 'adminmenulinks')->where('file_type', 'image');
    }

    protected static function newFactory(): AdminMenuLinksFactory
    {
        //return AdminMenuLinksFactory::new();
    }
    public function permissions($role_id)
    {
        return $this->belongsToMany(UserPermissions::class, 'role_permissions', 'page_id', 'permission_id')->where('role_id', $role_id);
    }
}
