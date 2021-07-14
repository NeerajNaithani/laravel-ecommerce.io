<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Headphpne',
                'price'=>'18000',
                'categery'=>'Sound',
                'description'=>'Good Sound Quality product',
                'gallery'=>'images\1.jpg',
               
            ],
            [
                'name'=>'Black Watch',
                'price'=>'10000',
                'categery'=>'Wactch on Sale',
                'description'=>'MY Watch is End',
                'gallery'=>'images\2.jpg',
               
            ],
            [
                'name'=>'Sony Laptop',
                'price'=>'50000',
                'categery'=>'Technology',
                'description'=>'Laptop with 16gb ram and i9 10th generation processeer',
                'gallery'=>'images\3.jpg',
               
            ],

           
              
        ]);
    }
}
