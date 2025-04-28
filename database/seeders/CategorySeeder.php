<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Mobile and Gadgets',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wearables',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Accessories',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kitchen Appliances',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
