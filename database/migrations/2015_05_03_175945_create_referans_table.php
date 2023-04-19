<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferansTable extends Migration {

	public function up()
	{
		Schema::create('referans', function(Blueprint $table) {
            $table->increments('id');
            $table->string('refdil');
            $table->string('refbaslik');
            $table->text('reficerik');
            $table->text('refkeyw');
            $table->text('refdesc');
            $table->text('refslug');
            $table->string('refresim');
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
		Schema::drop('referans');
	}

}
