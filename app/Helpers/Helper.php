<?php

namespace App\Helpers;

use App\AccessMenu;
use App\AccessSubmenu;
use App\Menu;
use App\Submenu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;

class Helper
{
    public static function AccessMenu()
    {
        $role_id = Auth::user();
        $role_id = $role_id['role_id'];
        $main_menu = '/' . Request::segment(1) . '/' . Request::segment(2);

        // menu
        $aksesmenu = Menu::where('url', $main_menu)->first();
        $aksesmenu_id = $aksesmenu['id'];
        $aksesmenu = AccessMenu::where(['role_id' => $role_id, 'menu_id' => $aksesmenu_id])->count();

        if($aksesmenu < 1) {
            return redirect('/access/block');
        }
    }

    public static function AccessSubmenu()
    {
        $role_id = Auth::user();
        $role_id = $role_id['role_id'];
        $main_submenu = '/' . Request::segment(1) . '/' . Request::segment(2) . '/' . Request::segment(3);

        // submenu
        $akses_submenu = Submenu::where('url', $main_submenu)->first();
        $akses_submenu_id = $akses_submenu['id'];
        $akses_submenu = AccessSubmenu::where(['role_id' => $role_id, 'submenu_id' => $akses_submenu_id])->count();

        if($akses_submenu < 1) {
            return redirect('/access/block');
        }
    }

    public static function permission()
    {
        $role_id = Auth::user()->role_id;
        $main_submenu = '/' . Request::segment(1) . '/' . Request::segment(2) . '/' . Request::segment(3);
        $permission = DB::table('submenus')
        ->join('access_submenus', 'submenus.id', '=', 'access_submenus.submenu_id')
        ->where(['access_submenus.role_id' => $role_id, 'submenus.url' => $main_submenu])
        ->first();
        return $permission;
    }
}

