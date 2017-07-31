<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Book');
        for ($i=0; $i < 10 ; $i++) { 
        	DB::table('books')->insert([
	        	'title' => $faker->sentence,
	        	'description' => implode($fakser->paragraphs(2)),
	        	'title' => $faker->name,
	        	'updated_at' => \Carbon\Carbon::now(),
	        	'created_at' => \Carbon\Carbon::now(),
	        ]);
        }
        
    }
}
