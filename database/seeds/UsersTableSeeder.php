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
        //reset the users
		DB::table('users')->truncate();
		
		//create 3 users iniciais
		DB::table('users')->insert([
			[
				'name'=> 'Roberto Melo',
				'email'=> 'robertomelo822@gmail.com',
				'password'=> bcrypt('123456')
			],
			[
				'name'=> 'Joana Mendonça',
				'email'=> 'jomendanca@gmail.com',
				'password'=> bcrypt('123456')
			],
			[
				'name'=> 'Onosiforo',
				'email'=> 'ono822@gmail.com',
				'password'=> bcrypt('123456')
			],
		]);
    }
}
