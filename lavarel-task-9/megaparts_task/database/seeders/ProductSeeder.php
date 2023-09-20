<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'двигател',
                'description' => 'двигател бмв 3.0д',
                'price' => 1500,
                'image' => 'image 5.png',
            ],
            [
                'name' => 'стопове',
                'description' => 'заден ляв',
                'price' => 200,
                'image' => 'image 5.png'
                
            ],
            [
                'name' => 'преден капак',
                'description' => 'преден капак шкода октавия',
                'image' => 'image 5.png',
                'price' => 400
            ],
            [
                'name' => 'врата',
                'description' => 'задна лява врата мерцедес е-класа',
                'image' => 'image 5.png',
                'price' => 800
            ]
        ];
  
        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }

        //
}

