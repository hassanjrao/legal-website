<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSlugInPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->string('slug')->nullable()
                ->unique()
            ->after('title');
            $table->dropColumn('description');
            $table->text('content')->nullable()->after('meta_tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn('slug');
            $table->dropColumn('content');
            $table->text('description')->nullable()->after('meta_tags');
        });
    }
}
