<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
			$table->string('title');
			$table->text('content');
			$table->biginteger('user_id')->unsigned();
			$table->biginteger('section_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->ondelete('cascade');
			$table->foreign('section_id')->references('id')->on('sections')->ondelete('cascade');

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
