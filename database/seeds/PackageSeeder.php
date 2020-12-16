<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->insert([
        	'name'=>'Family Legal Protection Plan',
            'package_alias'=>Str::slug('Family Legal Protection Plan Categories','-'),
            'price'=>300,
            'abbreviation'=>'flpp'
        ]);  

        DB::table('packages')->insert([
        	'name'=>'Personal Legal Protection Plan',
            'package_alias'=>Str::slug('Personal Legal Protection Plan Categories','-'),
            'price'=>300,
            'abbreviation'=>'plpp'
        ]); 

        DB::table('packages')->insert([
        	'name'=>'Business Legal Protection Plan',
            'package_alias'=>Str::slug('Business Legal Protection Plan Categories','-'),
            'price'=>300,
            'abbreviation'=>'blpp'
        ]);  
    }
}
