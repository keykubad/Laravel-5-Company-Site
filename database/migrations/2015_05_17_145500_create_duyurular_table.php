<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDuyurularTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('duyurular', function(Blueprint $table) {
            $table->increments('id');
            $table->string('duyurudil');
            $table->string('duyurubaslik');
            $table->text('duyuruicerik');
            $table->string('duyurukeyw');
            $table->text('duyurudesc');
            $table->string('duyuruslug');
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
		Schema::drop('duyurular');
	}

}
