<?php

namespace App\Providers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class EmailSettingsServiceProvider extends ServiceProvider
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
            Config::set('mail.driver', $settings->mail_mailer);
            Config::set('mail.host', $settings->mail_host);
            Config::set('mail.port', $settings->mail_port);
            Config::set('mail.username', $settings->mail_username);
            Config::set('mail.password', $settings->mail_password);
            // Config::set('mail.encryption', $settings->mail_encryption);
            Config::set('mail.from.address', $settings->mail_from_address);
            // Config::set('mail.from.name', $settings->mail_from_name);
        }
    }
}
