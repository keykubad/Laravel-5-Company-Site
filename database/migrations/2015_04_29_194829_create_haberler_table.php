<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHaberlerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('haberler', function(Blueprint $table) {
            $table->increments('id');
            $table->string('haberslug');
            $table->integer('haberdurum');
            $table->string('haberdil');
            $table->string('haberbaslik');
            $table->text('habericerik');
            $table->text('haberdesc');
            $table->text('haberkeyw');
            $table->string('haberresim');
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
		Schema::drop('haberler');
	}

}
