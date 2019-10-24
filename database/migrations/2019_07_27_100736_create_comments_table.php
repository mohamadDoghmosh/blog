<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->text('content');
			$table->biginteger('post_id')->unsigned();
			$table->biginteger('user_id')->unsigned();
			$table->foreign('post_id')->references('id')->on('posts')->ondelete('cascade');
			$table->foreign('user_id')->references('id')->on('users')->ondelete('cascade');

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
        Schema::dropIfExists('comments');
    }
}
