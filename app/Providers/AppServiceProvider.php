<?php

namespace App\Providers;
use App\Models\Article;
use App\Models\Menu;
use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     */
    public function boot(): void
    {
//         $setting =   Setting::all();
//         view::composer('_setting',$setting);
//         view::share('_setting',$setting);
        $menus = Menu::all();
//        $footers = Article::all();
//        $setting = Setting::all();
//        View::share('_setting', $setting);

        View::share('_menu',$menus);
//        View::share('footer',$footers);

//        view::share('top_header',$top_header);

    }
}
