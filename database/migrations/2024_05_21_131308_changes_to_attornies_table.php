<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangesToAttorniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('attornies', function (Blueprint $table) {
            // $table->renameColumn('title','position');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attornies', function (Blueprint $table) {
            // $table->renameColumn('position','title');
            $table->dropSoftDeletes();
        });
    }
}
