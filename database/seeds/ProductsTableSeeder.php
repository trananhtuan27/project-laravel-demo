<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product();
        $product->name = 'laptop asus';
        $product->description = 'laptop asus 2019';
        $product->price = '20000000';
        $product->image = 'images/laptop-asus.jpg';
        $product->category_id = 2;
        $product->save();

        $product = new \App\Product();
        $product->name = 'laptop lenovo';
        $product->description = 'laptop lenovo 2019';
        $product->price = '20000000';
        $product->image = 'images/laptop-lenovo.jpg';
        $product->category_id = 2;
        $product->save();

        $product = new \App\Product();
        $product->name = 'laptop hp';
        $product->description = 'laptop hp 2019';
        $product->price = '20000000';
        $product->image = 'images/laptop-hp.jpg';
        $product->category_id = 2;
        $product->save();

        $product = new \App\Product();
        $product->name = 'laptop dell';
        $product->description = 'laptop dell 2019';
        $product->price = '20000000';
        $product->image = 'images/dell-asus.jpg';
        $product->category_id = 2;
        $product->save();

    }
}
