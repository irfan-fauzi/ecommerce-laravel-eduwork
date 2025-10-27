<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Elektronik',
                'description' => 'Produk elektronik seperti laptop, smartphone, dan aksesorisnya.',
            ],
            [
                'name' => 'Fashion',
                'description' => 'Pakaian dan aksesoris untuk pria dan wanita.',
            ],
            [
                'name' => 'Olahraga',
                'description' => 'Peralatan dan perlengkapan olahraga.',
            ],
        ];

        foreach($categories as $data) {
          $category = Category::create($data);
          Product::factory(3)->create([
            'category_id' => $category->id,
          ]);
        }
    }
}
