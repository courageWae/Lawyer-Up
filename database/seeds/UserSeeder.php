<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
        	'name'=>'Administrator',
        	'email'=>'admin@admin.com',
            'alias'=>Str::slug('Admin Admin','-'),
            'user_name'=>'Admin',

        	'role_id'=>1,
        	'phone'=>1234567890,
        	'password'=>password_hash('1234567890', PASSWORD_DEFAULT)
        ]);
        DB::table('users')->insert([
            'name' => 'Dummy Lawyer',
            'email' => 'lawyer@lawyer.com',
            'alias' => Str::slug('Dummy Lawyer'.'lawyer','-'),
            'user_name'=>'lawyer',
            'personal_statement' => 'I am a criminal lawyer who is good at defending any criminal activity. Call me Saul Goodman',
            'experience' => 'I worked with analise on several occasions to defend criminals like OJ simpsons etc.',
            'type_of_lawyer' => 'Criminal Lawyer',
            'education' => 'Harvard school of law. In United State of America',
            'role_id' => 3,
            'phone' => 1234567890,
            'password' => password_hash('1234567890', PASSWORD_DEFAULT)
        ]);
        DB::table('users')->insert([
            'name'=>'Dummy Insurer',
            'email'=>'insurer@insurer.com',
            'role_id'=>2,
            'alias'=>Str::slug('Dummy insurer'.'insurer','-'),
            'user_name'=>'insurer',
            'phone'=>1234567890,
            'password'=>password_hash('1234567890', PASSWORD_DEFAULT)
        ]);
        // DB::table('users')->insert([
        //     'name'=>'Dummy User',
        //     'email'=>'user@user.com',
        //     'role_id'=>4,
        //     'phone'=>1234567890,
        //     'password'=>password_hash('1234567890', PASSWORD_DEFAULT)
        // ]);

    }
}
