<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('category')->onUpdate('cascade')->onDelete('cascade');
            $table->string('title')->nullable();
            $table->string('keyword')->nullable();
            $table->string('slug')->nullable();
            $table->string('lang')->nullable();
            $table->string('company')->nullable();
            $table->string('image')->nullable();
            $table->string('bg_image')->nullable();
            $table->text('description')->nullable();
            $table->text('content')->nullable();
            $table->string('feature')->nullable();
            $table->string('event')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
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
        Schema::dropIfExists('blog');
    }
}
