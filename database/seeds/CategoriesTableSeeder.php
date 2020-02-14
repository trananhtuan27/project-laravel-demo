<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\Category();
        $category->name = 'laptop';
        $category->slug = Str::slug($category->name);
        $category->description = 'máy tính xách tay';
        $category->save();

    }
}
