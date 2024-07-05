<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Discount>
 */
class DiscountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => fake()->uuid(), // Mã giảm giá được sinh ngẫu nhiên
            'value' => fake()->randomFloat(2, 10, 1000), // Giá trị giảm giá ngẫu nhiên từ 10 đến 1000
            'discount_type' => fake()->randomElement(['percentage', 'fixed']), // Chọn ngẫu nhiên giảm giá theo % hoặc giảm trực tiếp giá
            'begin_date' => fake()->date(), // Ngày bắt đầu ngẫu nhiên
            'expiry_date' => fake()->dateTimeBetween('+1 week', '+1 month')->format('Y-m-d'), // Ngày hết hạn trong tương lai gần
            'usage_limit' => fake()->numberBetween(0, 10), // Số lượng tối đa sử dụng ngẫu nhiên từ 0 đến 10
            'status' => fake()->randomElement([0, 1]), // Trạng thái hoạt động/ngừng hoạt động ngẫu nhiên
            
        ];
    }
}
