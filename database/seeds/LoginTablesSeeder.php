<?php

use Illuminate\Database\Seeder;

class LoginTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $logins=array(
        	array(
        		//'name'=>'Admin User',
        		'email'=>'admin@voklagyo.com',
        		'password'=>Hash::make('admin123'),
        	
        	)
        	
        );
        DB::table('logins')->insert($logins);
    }
}
