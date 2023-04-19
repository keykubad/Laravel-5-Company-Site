<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEkstraalanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ekstraalan', function(Blueprint $table) {
            $table->increments('id');
            $table->string('adi');
            $table->integer('durum');
            $table->text('alan');
            $table->string('dil');
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
		Schema::drop('ekstraalan');
	}

}
