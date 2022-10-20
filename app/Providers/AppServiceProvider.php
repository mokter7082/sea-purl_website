<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Munu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $menuItem = Munu::where('status','Active')->get();
        view()->share('menuItem',$menuItem);
    }
}
