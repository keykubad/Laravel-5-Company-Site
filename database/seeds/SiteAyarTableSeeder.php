<?php

use Illuminate\Database\Seeder;
use App\SiteAyar;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class SiteAyarSeeder extends Seeder {

    public function run()
    {
        DB::table('siteayar')->delete();

        SiteAyar::create([
            'durum' => '1',
            'siteadi' => 'Kurumsal Site',
            'dil' =>      'tr',
            'sitekeyw' => 'kurumsal,site,demo,etiketler',
            'sitedesc' => 'Kurumsal site açıklaması',
        ]);
    }

}