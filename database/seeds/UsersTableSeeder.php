<?php

use Illuminate\Database\Seeder;
use App\User;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create([
            'email' => 'info@keykubad.com',
            'name' => 'Gürkan',
            'analytics_profilid' => 'Profilid',
            'analytics_mail' => 'Mail adresi',
            'analytics_sifre' => 'Şifre',
            'password' => Hash::make('123456')

        ]);
    }

}