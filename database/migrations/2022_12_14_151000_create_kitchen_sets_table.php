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
        Schema::create('kitchen_sets', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('label_id')->nullable();
            $table->string('name', 255);
            $table->string('image', 255)->nullable();
            $table->string('url', 255);
            $table->string('currency', 255)->nullable();
            $table->float('price', 11, 2);
            $table->float('original_price', 11, 2)->nullable();
            $table->float('min_price', 11, 2)->nullable();
            $table->float('max_price', 11, 2)->nullable();
            $table->string('location', 255)->nullable();
            $table->integer('sold_total')->nullable();
            $table->timestamps();

            $table->foreign('label_id')->references('id')->on('labels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kitchen_sets');
    }
};
