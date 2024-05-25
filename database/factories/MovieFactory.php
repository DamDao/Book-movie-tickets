<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "category_id" => fake()->numberBetween(1, 5), // Chọn một số ngẫu nhiên từ 1 đến 5 cho category_id
            "title" => fake()->sentence(), // Tạo một tiêu đề ngẫu nhiên (câu ngắn)
            "price" => fake()->randomFloat(2, 0, 100), // Tạo một giá tiền ngẫu nhiên (2 số lẻ) từ 0 đến 100
            "description"=>fake()->sentence(50),
            "image" => fake()->imageUrl(), // Tạo một URL ngẫu nhiên cho hình ảnh
            "trailer" => fake()->url(), // Tạo một URL ngẫu nhiên cho trailer
       
        ];
    }
}
