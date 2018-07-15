<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//reset users table
    	DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        $faker = Factory::create();
    
        //create three users
        DB::table('users')->insert([
        	[
        		'name' => "Super Administrator",
                'slug' => "super-administrator",
        		'email' => "superadmin@laravelblog.com",
        		'password' => bcrypt('secret'),
                'bio' => $faker->text(rand(150,200)),
        	],
        	[
        		'name' => "Administrator",
                'slug' => "administrator",
        		'email' => "admin@laravelblog.com",
        		'password' => bcrypt('secret'),
                'bio' => $faker->text(rand(150,200)),
        	],
        	[
        		'name' => "Member",
                'slug' => "member",
        		'email' => "member@laravelblog.com",
        		'password' => bcrypt('secret'),
                'bio' => $faker->text(rand(150,200)),
        	],

        ]);
    }
}
