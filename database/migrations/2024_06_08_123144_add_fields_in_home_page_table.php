<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsInHomePageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('home_page', function (Blueprint $table) {
            $table->text('footer_title')->nullable()->after('footer_description');
            $table->text('have_question_title')->nullable()->after('footer_description');
            $table->text('business_hours_title')->nullable()->after('footer_description');
            $table->text('opening_days_title')->nullable()->after('footer_description');
            $table->text('vacations_title')->nullable()->after('footer_description');
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
            $table->dropColumn('footer_title');
            $table->dropColumn('have_question_title');
            $table->dropColumn('business_hours_title');
            $table->dropColumn('opening_days_title');
            $table->dropColumn('vacations_title');
        });
    }
}
