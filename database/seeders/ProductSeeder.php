<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Wireless Headphones',
                'description' => 'Experience high-fidelity audio without the wires with our premium wireless headphones.',
                'image' => 'assets/wirelessheadphone.jpg',
            ],
            [
                'name' => 'Smartwatch',
                'description' => 'Stay connected and track your fitness goals with this stylish and smart wearable.',
                'image' => 'assets/smartwatch.jpg',
            ],
            [
                'name' => 'Gaming Mouse',
                'description' => 'Dominate your games with precision and speed with our pro-level gaming mouse.',
                'image' => 'assets/gamingmouse.jpg',
            ],
            [
                'name' => 'Portable Speaker',
                'description' => 'Bring your music everywhere with our durable and waterproof portable speaker.',
                'image' => 'assets/portablespeaker.jpg',
            ],
            [
                'name' => 'Mechanical Keyboard',
                'description' => 'Elevate your typing and gaming experience with a tactile mechanical keyboard.',
                'image' => 'assets/mechanicalkeyboard.jpg',
            ],
            [
                'name' => 'Wireless Earbuds',
                'description' => 'Enjoy crystal-clear calls and immersive music with our noise-cancelling earbuds.',
                'image' => 'assets/earbuds.jpg',
            ],
            [
                'name' => 'Fitness Tracker',
                'description' => 'Monitor your heart rate, steps, and workouts with our sleek fitness tracker.',
                'image' => 'assets/fitnesstracker.jpg',
            ],
            [
                'name' => 'External SSD',
                'description' => 'Store and transfer your files faster with our compact external solid-state drive.',
                'image' => 'assets/ssd.jpg',
            ],
            [
                'name' => 'Laptop',
                'description' => 'Power through tasks with our lightweight and high-performance laptop.',
                'image' => 'assets/laptop.jpg',
            ],
            [
                'name' => 'Professional Camera',
                'description' => 'Capture stunning photos and videos with our professional-grade camera.',
                'image' => 'assets/camera.jpg',
            ],
        ];

        foreach ($products as $product) {
            Product::create([
                'name' => $product['name'],
                'description' => $product['description'],
                'price' => rand(100, 1500),
                'category_id' => rand(1, 4), // Adjust depending on your categories
                'image' => $product['image'], // 👈 Make sure your migration has 'image'
            ]);
        }
    }
}
