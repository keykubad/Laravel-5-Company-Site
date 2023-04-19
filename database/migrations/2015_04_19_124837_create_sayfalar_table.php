<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSayfalarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sayfalar', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('katid');
            $table->integer('modulid');
            $table->integer('durum');
            $table->string('sayfadil');
            $table->string('sayfaurl');
            $table->string('sayfaadi');
            $table->text('sayfaicerik');
            $table->text('sayfakeyw');
            $table->text('sayfadesc');
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
		Schema::drop('sayfalar');
	}

}
