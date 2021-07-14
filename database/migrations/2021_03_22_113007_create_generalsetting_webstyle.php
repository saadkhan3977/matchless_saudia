<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralsettingWebstyle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general-setting-webstyle', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('front_theme_color')->nullable();
            $table->string('front_text_color')->nullable();
            $table->string('front_background')->nullable();
            $table->string('admin_theme_color')->nullable();
            $table->string('admin_text_color')->nullable();
            $table->string('admin_background')->nullable();
            $table->string('copyright')->nullable();
            $table->string('tawkto')->nullable();
            $table->text('tawkto_status')->nullable();
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
        Schema::dropIfExists('general-setting-webstyle');
    }
}
