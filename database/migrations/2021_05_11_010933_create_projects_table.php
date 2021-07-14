<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('service_id')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('category')->nullable();
            $table->string('image')->nullable();
            $table->string('logo')->nullable();
            $table->string('video')->nullable();
            $table->string('website')->nullable();
            $table->text('description')->nullable();
            $table->text('lang')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
