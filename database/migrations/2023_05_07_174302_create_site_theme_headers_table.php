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
        Schema::create('site_theme_headers', function (Blueprint $table) {
            $table->id();
            $table->string('layout','255')->nullable();
            $table->string('header_position','255')->nullable();
            $table->string('sidebar','255')->nullable();
            $table->string('sidebar_position','255')->nullable();
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
        Schema::dropIfExists('site_theme_headers');
    }
};
