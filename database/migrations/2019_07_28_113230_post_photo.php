<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PostPhoto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		  Schema::create('post_photos', function (Blueprint $table) {
            $table->biginteger('photo_id')->unsigned();
			 $table->bigInteger('post_id')->unsigned();
			  $table->foreign('post_id')->references('id')->on('posts')->ondelete('cascade');
			$table->foreign('photo_id')->references('id')->on('photos')->ondelete('cascade');
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
        //
    }
}
