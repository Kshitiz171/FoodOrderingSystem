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
        //
        $users=array(
        	array(
        		'name'=>'Admin User',
        		'email'=>'admin@voklagyo.com',
        		'password'=>Hash::make('admin123'),
        	
        	)
        	
        );
        DB::table('users')->insert($users);
    }
}
