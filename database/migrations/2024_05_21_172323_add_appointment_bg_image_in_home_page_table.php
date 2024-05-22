<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAppointmentBgImageInHomePageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('home_page', function (Blueprint $table) {
            $table->string('appointment_bg_image_path')->nullable()->after('copy_right_text');
            $table->string('appointment_title')->nullable()->after('appointment_bg_image_path');
            $table->string('appointment_subtitle')->nullable()->after('appointment_title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('home_page', function (Blueprint $table) {
            $table->dropColumn('appointment_bg_image_path');
            $table->dropColumn('appointment_title');
            $table->dropColumn('appointment_subtitle');
        });
    }
}
