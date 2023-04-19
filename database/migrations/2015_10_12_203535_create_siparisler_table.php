<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiparislerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('siparisler', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('urunidi');
            $table->string('urunadi');
            $table->string('adet');
            $table->string('fiyat');
            $table->string('durum');
            $table->string('adunvan');
            $table->string('email');
            $table->text('adres');
            $table->text('telefon');
            $table->text('mesaj');
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
		Schema::drop('siparisler');
	}

}
