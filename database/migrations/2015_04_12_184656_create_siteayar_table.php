<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteayarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('siteayar', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('durum');
            $table->text('siteadi');
            $table->text('dil');
            $table->text('sitekeyw');
            $table->text('sitedesc');
            $table->text('sitetel');
            $table->text('siteadres');
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
		Schema::drop('siteayar');
	}

}
