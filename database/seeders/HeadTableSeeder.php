<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Faker\Factory as Faker;

class HeadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$faker = Faker::create();
    	foreach (range(1,1000000) as $index) {
	        DB::table('heads')->insert([
	        	'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
	            // 'name' => $faker->sentence(2),
	            // 'email' => $faker->email,
	            'emp_id' => $faker->numberBetween(1,3),
	        ]);
	    }
        //
        // DB::table('heads')->insert([
        //    'name'=>'Mridula',
        //    'email'=>'mky10@gmail.com',
        //    'emp_id'=>'1'
        // ]);
    }
}
