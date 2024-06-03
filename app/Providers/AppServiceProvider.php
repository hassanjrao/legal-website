<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Events\MigrationsStarted;
    use Illuminate\Database\Events\MigrationsEnded;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Event;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // \URL::forceScheme('https');
    }
}
