<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'title' => 'Classic Chairs',
            'slug' => ' classic-chair-categories',
            'image' => 'http://127.0.0.1:8000/assets/images/product/1.png',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('categories')->insert([
            'title' => 'Lounge Chairs',
            'slug' => ' lounge-chair-categories',
            'image' => 'http://127.0.0.1:8000/assets/images/product/2.png',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('categories')->insert([
            'title' => 'Slipper Chairs',
            'slug' => ' slipper-chair-categories',
            'image' => 'http://127.0.0.1:8000/assets/images/product/4.png',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('categories')->insert([
            'title' => 'Beds',
            'slug' => ' beds-categories',
            'image' => 'http://127.0.0.1:8000/assets/images/product/5.png',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('categories')->insert([
            'title' => 'Side Chairs',
            'slug' => ' side-chair-categories',
            'image' => 'http://127.0.0.1:8000/assets/images/product/10.png',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('categories')->insert([
            'title' => 'Arm Chairs',
            'slug' => ' arm-chair-categories',
            'image' => 'http://127.0.0.1:8000/assets/images/product/11.png',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('categories')->insert([
            'title' => 'Sofa',
            'slug' => ' sofa-categories',
            'image' => 'http://127.0.0.1:8000/assets/images/product/12.png',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' =>Carbon::now()->toDateTimeString()
        ]);
        DB::table('categories')->insert([
            'title' => 'Modern Chairs',
            'slug' => ' modern-chair-categories',
            'image' => 'http://127.0.0.1:8000/assets/images/product/13.png',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
    }
}
