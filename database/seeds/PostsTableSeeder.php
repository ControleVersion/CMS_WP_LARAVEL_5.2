<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //reset the users
		DB::table('posts')->truncate();
		
		//generate 10 dumy posts data
		$posts = [];
		$faker = Factory::create();
		
		for($i=0; $i <= 10; $i++){
			$posts[] =[
				'author_id'=>rand(1,3),
				'title'=> $faker->sentence(rand(8,12)),
			];
		}
		DB::table('posts')->insert($posts);
    }
}
