<?php

namespace Modules\UserRole\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\MenuLinks\Models\Menu;
use Modules\UserRole\Database\Factories\UserRolePermissionsFactory;

class UserRolePermissions extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];

    protected static function newFactory(): UserRolePermissionsFactory
    {
        //return UserRolePermissionsFactory::new();
    }
      
}
