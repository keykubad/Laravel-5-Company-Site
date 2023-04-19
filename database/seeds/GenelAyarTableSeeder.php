<?php

use Illuminate\Database\Seeder;
use App\GenelAyar;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class GenelAyarSeeder extends Seeder {

    public function run()
    {
        DB::table('genelayar')->delete();

        GenelAyar::create([
            'sitelogo' => 'logo.png',
            'sitesosyal' => 'http://www.facebook.com',
            'siteanaliz' =>      'Analiz Kodu',
            'sitegooglemap' => 'Googlemap kodu',
        ]);
    }

}