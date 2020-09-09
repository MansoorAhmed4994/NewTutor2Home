<?php

namespace App\Providers;

use App\Services\Zoom\ZoomAPI;
use Illuminate\Support\ServiceProvider;

class ZoomServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('zoom', function() {
            return new ZoomAPI(env('ZOOM_CLIENT_ID'), env('ZOOM_CLIENT_SECRET'));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
