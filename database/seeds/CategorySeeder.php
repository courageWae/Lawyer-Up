<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Famlily Legal Categories
        DB::table('categories')->insert([
        	'name'=>'bronze',
            'price'=>300,
            'category_alias'=> Str::slug('Family Legal Categories bronze','-'),
            'package_id'=>1
        ]);
        DB::table('categories')->insert([
        	'name'=>'silver',
            'price'=>350,
            'category_alias'=>Str::slug('Family Legal Categories silver','-'),
            'package_id'=>1
        ]);
        DB::table('categories')->insert([
        	'name'=>'gold',
            'price'=>400,
            'category_alias'=>Str::slug('Family Legal Categories gold','-'),
            'package_id'=>1
        ]);
        
        // Personal Legal Protection
        DB::table('categories')->insert([
        	'name'=>'bronze',
            'price'=>300,
            'category_alias'=>Str::slug('Personal Legal Categories bronze','-'),
            'package_id'=>2
        ]);
        DB::table('categories')->insert([
        	'name'=>'silver',
            'price'=>350,
            'category_alias'=>Str::slug('Personal Legal Categories silver','-'),
            'package_id'=>2
        ]);
        DB::table('categories')->insert([
        	'name'=>'gold',
            'price'=>400,
            'category_alias'=>Str::slug('Personal Legal Categories gold','-'),
            'package_id'=>2
        ]);

        //Business Legal Protection
        DB::table('categories')->insert([
        	'name'=>'bronze',
            'price'=>300,
            'category_alias'=>Str::slug('Business Legal Categories bronze','-'),
            'package_id'=>3
        ]);
        DB::table('categories')->insert([
        	'name'=>'silver',
            'price'=>400,
            'category_alias'=>Str::slug('Business Legal Categories silver','-'),
            'package_id'=>3
        ]);
        DB::table('categories')->insert([
        	'name'=>'gold',
            'price'=>600,
            'category_alias'=>Str::slug('Business Legal Categories gold','-'),
            'package_id'=>3
        ]);

    }
}
