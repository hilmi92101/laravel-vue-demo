<?php

use Illuminate\Database\Seeder;

use App\User;
use Faker\Generator as Faker;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = \Faker\Factory::create();
        $data = [];


        for ($x = 0; $x < 100; $x++) {
		    $user = [
		                
	            'name' => $faker->name,
	            'email' => $faker->email,
	            'password' => Hash::make('qawsedrf')
	        ];
			array_push($data, $user);
		}
		
        User::insert($data);
    }
}
