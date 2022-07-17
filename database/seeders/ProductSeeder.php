<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::factory([
            'name' => 'Amazon Echo 4th Generation',
            'price' => '6999',
			'description' => 'Echo (4th Gen, 2020 release) | Premium sound powered by Dolby and Alexa (Black)'
        ])->create();
        \App\Models\Product::factory([
            'name' => 'Amazon Echo Dot 4th Generation',
            'price' => '3999',
			'description' => 'Echo Dot (4th Gen, 2020 release)| Smart speaker with Alexa (Black)'
        ])->create();
        \App\Models\Product::factory([
            'name' => 'Irobot Roomba s9+ Connected Robotic Vacuum',
            'price' => '149999',
			'description' => 'Irobot Roomba s9+ Connected Robotic Vacuum with Automatic Dirt Disposal (Java Black)'
        ])->create();
		\App\Models\Product::factory([
            'name' => 'Apple iPhone 13 Pro',
            'price' => '112999',
			'description' => 'Apple iPhone 13 Pro (128GB) - Sierra Blue'
        ])->create();
		\App\Models\Product::factory([
            'name' => 'Apple iPhone 13 Pro Max',
            'price' => '122900',
			'description' => 'Apple iPhone 13 Pro Max (128GB) - Sierra Blue'
        ])->create();
		\App\Models\Product::factory([
            'name' => 'Cosmic Byte Equinox Kronos Wireless 5.8Ghz Gaming Headset',
            'price' => '6499',
			'description' => 'Cosmic Byte Equinox Kronos Wireless 5.8Ghz Gaming Headset for PC, PS4, PS5, Xbox, Mobiles, Tablets'
        ])->create();
    }
}
