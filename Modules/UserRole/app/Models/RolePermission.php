<?php

namespace Modules\UserRole\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\UserRole\Database\Factories\RolePermissionFactory;

class RolePermission extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];

    protected static function newFactory(): RolePermissionFactory
    {
        //return RolePermissionFactory::new();
    }


}
