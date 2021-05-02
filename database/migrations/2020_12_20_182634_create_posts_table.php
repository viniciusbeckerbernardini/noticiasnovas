<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name','255')->nullable(false);
            $table->string('slug','255')->nullable(false);
            $table->boolean('draft')->default(false);
            $table->longText('content')->nullable(false);
            $table->date('post_date')->nullable(false);
            $table->text('background_image')->nullable(true);
            $table->foreignId('author')->nullable(false);
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
        Schema::dropIfExists('posts');
    }
}
