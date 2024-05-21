<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropAboutUsIdInAboutUsTabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('about_us_tabs', function (Blueprint $table) {
            $table->dropForeign('about_us_tabs_about_us_id_foreign');
            $table->dropColumn('about_us_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('about_us_tabs', function (Blueprint $table) {
            $table->unsignedBigInteger('about_us_id');
            $table->foreign('about_us_id')->references('id')->on('about_us');
        });
    }
}
