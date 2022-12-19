<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //
        DB::table('products')->insert([
            [
                'name'=>'Samsung mobile',
                "price"=>"10000",
                "description"=>"A smartphone with 8gb ram and much more feature",
                "category"=>"mobile",
                "gallery"=>"images/mobile.jpg"
            ],
            [
                'name'=>'Headphone',
                "price"=>"400",
                "description"=>"A smart tv with much more feature",
                "category"=>"tv",
                "gallery"=>"images/boat.jpg"
            ],
            [
                'name'=>'Sony Tv',
                "price"=>"500",
                "description"=>"A tv with much more feature",
                "category"=>"tv",
                "gallery"=>"images/tv.jpg"
            ],
            [
                'name'=>'Refrigerator',
                "price"=>"17000",
                "description"=>"A refrigerator with much more feature",
                "category"=>"refrigerator",
                "gallery"=>"images/refrigerator.jpg"
            ]
        ]);
    }
}
