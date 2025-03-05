<?php

namespace App\Http\Middleware;

use App\Helpers\PermissionHelper;
use App\Repositories\UserRepository;
use Closure;
use Illuminate\Http\Request;
use Modules\UserRole\Models\RolePermission;
use Modules\UserRole\Repositories\UserRoleRepository;
use Symfony\Component\HttpFoundation\Response;

class CheckUserPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function __construct(public UserRepository $userRepository, public UserRoleRepository $userRoleRepository, public PermissionHelper $permissionHelper)
    {

    }
    public function handle(Request $request, Closure $next,  $pageId=null, $permissionId=null)
    {
        if ($this->permissionHelper->hasPermission( $pageId, $permissionId)) {
            return $next($request);
        }
        return redirect('/admin')->with('have_not_permission' , 'Bu səhifədəyə keçid etmək və ya bu əməliyyatı yerinə yetirmək hüququnuz yoxdur');
    }
}
