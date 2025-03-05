<?php

namespace Modules\UserRole\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\UserRole\Database\Factories\UserRoleFactory;

class UserRole extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = [];

    protected static function newFactory(): UserRoleFactory
    {
        //return UserRoleFactory::new();
    }

    public function permissions()
    {
        return $this->belongsToMany(UserPermissions::class, 'role_permissions', 'role_id', 'permission_id');
    }



}
