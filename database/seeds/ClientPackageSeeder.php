<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('client_packages')->insert([
            'package_id' => 2,
            'status' => 'active',
            'user_id' => 2,
            'category_id'=> 1
        ]); 
        //
    }
}
