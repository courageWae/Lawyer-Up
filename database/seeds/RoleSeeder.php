<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('roles')->insert([
    		'name'=>'admin'
    	]);
    	DB::table('roles')->insert([
    		'name'=>'insurer'
    	]);
    	DB::table('roles')->insert([
    		'name'=>'lawyer'
    	]);
    	DB::table('roles')->insert([
    		'name'=>'user'
    	]);   
    }
}
