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
            'name'=>'smart tv LG',
            'price'=>'1500',
            'category'=>'TV',
            'description'=>'a smart tv  with  32 inch and much more features',
            'gallery'=>'https://umg.sa/pub/media/catalog/product/cache/b8954327bf0e7adf2e2e5b0b3c7d4ad0/k/d/kdg32rr672ant-1.jpg',        
        ],
        [
            'name'=>'apple iphone',
            'price'=>'300',
            'category'=>'mobile',
            'description'=>'a smarthpone with 5gb ram and much more features',
            'gallery'=>'https://cdn.dxomark.com/wp-content/uploads/medias/post-132367/Apple-iPhone-14_Plus_FINAL_featured-image-packshot-review.jpg',
        
        ],
        [
            'name'=>'LG mobile',
            'price'=>'200',
            'category'=>'mobile',
            'description'=>'a smarthpone with 4gb ram and much more features',
            'gallery'=>'https://cdn.dxomark.com/wp-content/uploads/medias/post-125428/Apple-iPhone-14-Pro-Max_FINAL_featured-image-packshot-review-1.jpg',        
        ],   
        
        ]);
    }
}
