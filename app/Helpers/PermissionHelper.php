<?php

namespace App\Helpers;

use Modules\UserRole\Models\RolePermission;
use Modules\UserRole\Models\UserRole;

class PermissionHelper
{

    public static function hasPermission($pageId=null, $permissionId=null) {
        $user = auth()->user();
        $user_role = $user->user_type;
        $role = UserRole::find($user_role);
        $has = RolePermission::where('page_id', $pageId)->where('permission_id', $permissionId)->where('role_id', $role->id)->count() > 0;
        return $has;
    }
}
