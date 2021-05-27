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
                'name'=>'Oppo S8 Plus',
                "price"=>"33000",
                'description'=>'A Smart Phone with 8GB RAM',
                'category'=>'Smart Phone',
                'gallery'=>'https://phoneaqua.com/products/oppo-f7-yough-price(1).webp'
            ],
            [
                'name'=>'Samsung Smart TV',
                "price"=>"40000",
                'description'=>'Samsung 43 Inch TU8000 Crystal UHD 4K Smart TV 2020',
                'category'=>'TV',
                'gallery'=>'https://images.samsung.com/is/image/samsung/levant-uhd-tu8000-ua43tu8000uxtw-frontblack-229856295?$720_576_PNG$'
            ],
            [
                'name'=>'LG TV',
                "price"=>"35000",
                'description'=>'LG 43 inch Class 1080p Smart FHD TV 42.5 inch Diag',
                'category'=>'TV',
                'gallery'=>'https://www.lg.com/us/images/tvs/md06098476/gallery/desktop-01.jpg'
            ],
            [
                'name'=>'Panasonic Regfrigerator',
                "price"=>"200000",
                'description'=>'Pansonic NR-BS60MSSA Side By Side Refrigerator',
                'category'=>'Regrigerator',
                'gallery'=>'https://www.shophive.com/media/catalog/product/cache/3617b85921733ef3774cdbec091e1c0f/n/r/nr-bs60ms-spec.jpg'
            ]
        ]);
    }
}
