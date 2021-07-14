<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralsettingHeader extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general-setting-header', function (Blueprint $table) {
            $table->id();
            $table->string('getintouch')->nullable();
            $table->string('subscribe')->nullable();
            $table->string('title')->nullable();
            $table->string('phone_label')->nullable();
            $table->string('phone')->nullable();
            $table->string('email_label')->nullable();
            $table->string('email')->nullable();
            $table->string('copyright')->nullable();
            $table->string('submit')->nullable();
            $table->string('lang')->nullable();
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
        Schema::dropIfExists('general-setting-header');
    }
}
