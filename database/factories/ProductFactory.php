<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph,
            'features' => $this->faker->text(200),
            'specification' => $this->faker->text(200),
            'buying_price' => $this->faker->randomFloat(2, 50, 500),
            'selling_price' => $this->faker->randomFloat(2, 100, 1000),
            'discount' => $this->faker->optional()->randomFloat(2, 5, 30),
            'main_image' => $this->faker->imageUrl(640, 480, 'products'),
            'multi_images' => json_encode([
                $this->faker->imageUrl(640, 480, 'products'),
                $this->faker->imageUrl(640, 480, 'products'),
            ]),
            'video_url' => $this->faker->optional()->url,
            'stock_amount' => $this->faker->optional()->numberBetween(0, 100),
            'is_out_of_stock' => $this->faker->boolean(10),
            'brand_id' => Brand::factory(),
            'category_id' => Category::factory(),
            'sub_category_id' => SubCategory::factory(),
        ];
    }
}
