<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalerikategoriTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('galerikategori', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('galkatid');
            $table->string('galerikatadi');
            $table->string('galerikatdil');
            $table->string('galerikatslug');
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
		Schema::drop('galerikategori');
	}

}
