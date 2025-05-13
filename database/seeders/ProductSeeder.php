<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['Apple iPhone 14', 'Latest model with A15 Bionic chip and improved battery life.'],
            ['Samsung Galaxy S23', 'Flagship Android phone with powerful performance and camera.'],
            ['Sony WH-1000XM5 Headphones', 'Noise-cancelling over-ear headphones with premium sound quality.'],
            ['Dell XPS 13 Laptop', 'Compact and powerful ultrabook with 13-inch InfinityEdge display.'],
            ['Canon EOS R5 Camera', 'Professional mirrorless camera with 8K video recording.'],
            ['Apple MacBook Air M2', 'Lightweight laptop with Apple Silicon and all-day battery life.'],
            ['Bose SoundLink Speaker', 'Portable Bluetooth speaker with deep bass and long battery life.'],
            ['Logitech MX Master 3 Mouse', 'Ergonomic mouse designed for productivity and comfort.'],
            ['Samsung 55" 4K Smart TV', 'Ultra HD smart TV with vivid colors and built-in streaming apps.'],
            ['Amazon Echo Dot 5th Gen', 'Smart speaker with Alexa voice assistant and improved audio.'],
            ['Microsoft Surface Pro 9', '2-in-1 tablet and laptop with sleek design and pen support.'],
            ['Razer BlackWidow Keyboard', 'Mechanical gaming keyboard with RGB lighting.'],
            ['Anker PowerCore Power Bank', 'High-capacity portable charger with USB-C and fast charging.'],
            ['ASUS ROG Strix GPU', 'High-performance graphics card for serious gaming and rendering.'],
            ['JBL Flip 6 Bluetooth Speaker', 'Waterproof and portable speaker with bold sound.'],
            ['Google Pixel 8', 'Clean Android experience with excellent camera features.'],
            ['Fitbit Charge 6', 'Fitness tracker with heart rate monitor and sleep tracking.'],
            ['WD 1TB External HDD', 'Reliable external hard drive for backup and storage.'],
            ['TP-Link WiFi 6 Router', 'High-speed wireless router for home and office use.'],
            ['Sony PlayStation 5', 'Next-gen gaming console with immersive graphics and fast load times.'],
        ];

        foreach ($products as $index => $data) {
            Product::create([
                'name' => $data[0],
                'description' => $data[1],
                'category_id' => rand(1, 4), 
                'user_id' => $index % 2 === 0 ? 1 : 2,
                'price' => rand(100, 30000),
                'image_path' => null, 
            ]);
        }
    }
}

