<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGaleriTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('galeri', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('galerikatid');
            $table->string('galeribaslik');
            $table->string('galerislug');
            $table->text('galerietiket');
            $table->text('galeridesc');
            $table->text('galeriicerik');
            $table->string('galeriresim');
            $table->string('galeridil');
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
		Schema::drop('galeri');
	}

}
