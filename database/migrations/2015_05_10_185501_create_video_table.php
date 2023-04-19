<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('video', function(Blueprint $table) {
            $table->increments('id');
            $table->string('videoadi');
            $table->integer('videodurum');
            $table->string('videodil');
            $table->string('videourl');
            $table->text('videoicerik');
            $table->string('videoslug');
            $table->text('videokeyw');
            $table->text('videodesc');
            $table->string('videoresim');
            $table->integer('anasayfa');
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
		Schema::drop('video');
	}

}
