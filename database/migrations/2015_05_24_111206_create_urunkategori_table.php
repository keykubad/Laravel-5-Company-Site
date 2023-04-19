<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrunkategoriTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('urunkategori', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('ukatid');
            $table->string('urunkatadi');
            $table->string('urunkatdil');
            $table->string('urunkatslug');
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
		Schema::drop('urunkategori');
	}

}
