<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kitchen_sets', function (Blueprint $table) {
            $table->string('name', 1000)->change();
            $table->string('image', 1000)->nullable()->change();
            $table->string('url', 1000)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kitchen_sets', function (Blueprint $table) {
            //
        });
    }
};
