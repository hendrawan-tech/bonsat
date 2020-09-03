<?php

use App\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create([
            'menu' => 'Dashboard',
            'icon' => 'fas fa-fw fa-tachometer-alt',
            'url' => '/dashboard/homes',
            'is_active' => '1'
        ]);
        Menu::create([
            'menu' => 'Posts',
            'icon' => 'fa fa-edit',
            'url' => '/dashboard/posts',
            'is_active' => '1'
        ]);
        Menu::create([
            'menu' => 'Managements',
            'icon' => 'fa fa-layer-group',
            'url' => '/dashboard/managements',
            'is_active' => '1'
        ]);
        Menu::create([
            'menu' => 'Users',
            'icon' => 'fa fa-user',
            'url' => '/dashboard/users',
            'is_active' => '1'
        ]);
        Menu::create([
            'menu' => 'Settings',
            'icon' => 'fas fa-cogs',
            'url' => '/dashboard/settings',
            'is_active' => '1'
        ]);
    }
}
