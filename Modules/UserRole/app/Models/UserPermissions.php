<?php

namespace Modules\UserRole\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\MenuLinks\Models\Menu;
use Modules\UserRole\Database\Factories\UserPermissionsFactory;

class UserPermissions extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];

    protected static function newFactory(): UserPermissionsFactory
    {
        //return UserPermissionsFactory::new();
    }

   
}
