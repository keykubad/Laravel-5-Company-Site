<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {
	public function run()
	{
		Model::unguard();
		$this->call('UsersTableSeeder');
        $this->call('SiteAyarSeeder');
        $this->call('GenelAyarSeeder');
	}

}
