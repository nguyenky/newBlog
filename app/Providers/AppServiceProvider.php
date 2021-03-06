<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\LaravelController\PublicController\ShareController;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      $obj = new ShareController();
      // dd($obj->getInstagram()['data']);
      $instagram = $obj->getInstagram()['data'];
      $status = $obj->shareStatus();
      $categories = $obj->categories();
      $profile = $obj->profile();
      $latests = $obj->latests();
      View::share('instagram',$instagram);
      View::share('status',$status);
      View::share('categories',$categories);
      View::share('profile',$profile);
      View::share('latests',$latests);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
