<?php

namespace App\Providers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class SettingsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $settings = DB::table('settings')->first();

        if ($settings) {
            Config::set('app.name', $settings->app_name ? $settings->app_name : config('app.name'));
            Config::set('mail.driver', $settings->mail_driver ?? env('MAIL_MAILER'));
            Config::set('mail.host', $settings->mail_host ?? env('MAIL_HOST'));
            Config::set('mail.port', $settings->mail_port ?? env('MAIL_PORT'));
            Config::set('mail.username', $settings->mail_username ?? env('MAIL_USERNAME'));
            Config::set('mail.password', $settings->mail_password ?? env('MAIL_PASSWORD'));
            // Config::set('mail.encryption', $settings->mail_encryption ?? env('MAIL_ENCRYPTION'));
            Config::set('mail.from.address', $settings->mail_from_address ?? env('MAIL_FROM_ADDRESS'));
            Config::set('mail.from.name', $settings->mail_from_name ?? env('MAIL_FROM_NAME'));
        }
    }
}
