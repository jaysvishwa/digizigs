<?php

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();

    	for($i=0; $i < 10; $i++){

    		Contact::create([
    			'name' => $name = $faker->name,
    			'email' => $faker->email,
    			'contact' => $faker->phoneNumber,
    			'status' => 1,
                'type' => 'contact',
    		]);

    		
    	}     
    }
}
