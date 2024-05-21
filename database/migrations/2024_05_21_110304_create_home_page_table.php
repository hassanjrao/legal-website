<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomePageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_page', function (Blueprint $table) {
            $table->id();
            $table->string('hero_welcome')->nullable();
            $table->string('hero_title');
            $table->string('hero_description')->nullable();
            $table->string('hero_button_text');
            $table->string('hero_bg_image_path');

            $table->string('services_title')->nullable();
            $table->string('services_description')->nullable();

            $table->string('footer_description')->nullable();
            $table->string('opening_days')->nullable();
            $table->string('vacations')->nullable();

            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();

            $table->string('copy_right_text')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_page');
    }
}
