<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenelayarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('genelayar', function(Blueprint $table) {
            $table->increments('id');
            $table->string('sitelogo');
            $table->text('sitesosyal');
            $table->text('siteanaliz');
            $table->text('sitegooglemap');
            $table->text('mailhost');
            $table->text('mailkullanici');
            $table->text('mailsifre');
            $table->text('sifretip');
            $table->text('driver');
            $table->text('port');
            $table->integer('cachedurum');
            $table->string('kime');
            $table->text('baslik');
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
		Schema::drop('genelayar');
	}

}
