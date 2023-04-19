<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrunlerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('urunler', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('urunkatid');
            $table->text('urunadi');
            $table->text('urunslug');
            $table->string('urunkodu');
            $table->text('urunetiket');
            $table->text('urundesc');
            $table->text('urunicerik');
            $table->string('urunresim');
            $table->string('urunfiyati');
            $table->string('urundurum');
            $table->string('urundil');
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
		Schema::drop('urunler');
	}

}
