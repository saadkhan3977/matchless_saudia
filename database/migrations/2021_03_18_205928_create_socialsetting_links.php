<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialsettingLinks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social-setting-links', function (Blueprint $table) {
            $table->id();
            $table->string('facebook')->nullable();
            $table->string('facebook_status')->nullable();
            $table->string('instagram')->nullable();
            $table->string('instagram_status')->nullable();
            $table->string('twitter')->nullable();
            $table->string('twitter_status')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('linkedin_status')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('whatsapp_status')->nullable();
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
        Schema::dropIfExists('social-setting-links');
    }
}
