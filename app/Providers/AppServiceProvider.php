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
      View::share('instagram',$instagram);
      View::share('status',$status);
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
