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
       $faker = Faker::create('App\User');

        for ($i=0; $i < 10 ; $i++) { 
        	DB::table('books')->insert([
	        	'name' => $faker->name,
	        	'email' => $fakser->safeEmail,
	        	'password' => $password ?: $password = bcrypt('secret'),
	        	'remember_token' => str_random(10),
	        	'provider_name' => '',
	        	'provider_id' => '',
	        	'updated_at' => \Carbon\Carbon::now(),
	        	'created_at' => \Carbon\Carbon::now(),
	        ]);
        }
    }
}
