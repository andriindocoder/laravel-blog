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
    	//reset users table
    	DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();
    
        //create three users
        DB::table('users')->insert([
        	[
        		'name' => "Super Administrator",
        		'email' => "superadmin@laravelblog.com",
        		'password' => bcrypt('secret')
        	],
        	[
        		'name' => "Administrator",
        		'email' => "admin@laravelblog.com",
        		'password' => bcrypt('secret')
        	],
        	[
        		'name' => "Member",
        		'email' => "member@laravelblog.com",
        		'password' => bcrypt('secret')
        	],

        ]);
    }
}
