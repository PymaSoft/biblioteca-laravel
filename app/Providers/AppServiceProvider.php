<?php

namespace App\Providers;

use App\Models\Admin\Menu;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        view()->composer("theme.lte.aside", function($view){
            $menus = Menu::getMenu(true);
            $view->with('menusComposer', $menus);
        });
        View::share('theme', 'lte');
    }
}
