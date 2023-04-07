<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = [
            [
                'product_name' => 'Compas',
                'product_price' => 499999,
                'product_image' => 'https://cms.sepatucompass.com/images/productdetail/6ebd14afe7e78277b8cba83cc1c4c1c1f212e118.png'
            ],
            [
                'product_name' => 'Patrobas',
                'product_price' => 299999,
                'product_image' => 'https://www.patrobas.id/wp-content/uploads/2022/01/61450da0343c9fb1d5ce659beffbf745_1602076769745._resized1024-800x800.jpeg'
            ],
            [
                'product_name' => 'Whyfootwear',
                'product_price' => 159999,
                'product_image' => 'https://lzd-img-global.slatic.net/g/p/7023be324ea76e2b7a56c5b45f08212f.jpg_720x720q80.jpg_.webp'
            ],
        ];

        Product::insert($product);
    }
}
