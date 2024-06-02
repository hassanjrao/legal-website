<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::updateOrCreate([
            'id' => 1,
        ],[
            'id' => 1,
            'logo_path' => 'media/logo.png',
            'favicon_path' => 'media/logo.png',
            'mail_mailer' => 'smtp',
            'mail_host' => 'smtp.mailtrap.io',
            'mail_port' => '2525',
            'mail_username' => 'your_username',
            'mail_password' => 'your_password',
            'mail_from_address' => 'your_email',
        ]);
    }
}
