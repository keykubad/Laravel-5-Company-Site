<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIletisimTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('iletisim', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('kontrol');
            $table->string('email')->unique();
            $table->string('adsoyad');
            $table->string('baslik');
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
		Schema::drop('iletisim');
	}

}
