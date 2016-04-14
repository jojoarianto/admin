<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
            'name' => 'Indyka Saidi',
            'email' => 'indyka@idntimes.com',
            'password' => bcrypt('superuser'),
            'group' => 'superuser',
        ]);

        DB::table('users')->insert([
            'name' => 'administrator',
            'email' => 'administrator@tosunair.com',
            'password' => bcrypt('tosunair2k16'),
            'group' => 'administrator',
        ]);
    }
}