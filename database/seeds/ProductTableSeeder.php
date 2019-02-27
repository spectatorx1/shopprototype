<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
           'imagePath' => 'https://imgplaceholder.com/420x320/ff7f7f/333333/fa-image',
            'title' => 'example title',
            'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            'price' => '12',
        ]);
        $product->save();
        
        $product = new \App\Product([
           'imagePath' => 'https://imgplaceholder.com/420x320/ff7f7f/333333/fa-image',
            'title' => 'example title',
            'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            'price' => '12',
        ]);
        $product->save();
        
        $product = new \App\Product([
           'imagePath' => 'https://imgplaceholder.com/420x320/ff7f7f/333333/fa-image',
            'title' => 'example title',
            'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            'price' => '12',
        ]);
        $product->save();
        
        $product = new \App\Product([
           'imagePath' => 'https://imgplaceholder.com/420x320/ff7f7f/333333/fa-image',
            'title' => 'example title',
            'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            'price' => '12',
        ]);
        $product->save();
        
        $product = new \App\Product([
           'imagePath' => 'https://imgplaceholder.com/420x320/ff7f7f/333333/fa-image',
            'title' => 'example title',
            'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            'price' => '12',
        ]);
        $product->save();
        
        $product = new \App\Product([
           'imagePath' => 'https://imgplaceholder.com/420x320/ff7f7f/333333/fa-image',
            'title' => 'example title',
            'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
            'price' => '12',
        ]);
        $product->save();
    }
}
