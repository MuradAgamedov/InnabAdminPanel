<?php

namespace App\Helpers;

use Modules\MenuLinks\Models\Menu;
use Modules\MenuLinks\Repositories\MenuLinkRepository;

class MenuHelper
{
    protected $menuLinkRepository;



    public static function menu($code)
    {
        $links = Menu::where('code', $code)->get();
        return view('partials._menu', compact('links'))->render();
    }
}
