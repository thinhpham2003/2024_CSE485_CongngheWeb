<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'address' => $this->faker->address,
            'email' => $this->faker->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'thumb' => $this->faker->imageUrl($width = 640, $height = 480), // Tạo URL hình ảnh ngẫu nhiên
            'website' => $this->faker->url,
            'parent_department_id' => $this->faker->randomDigitNotNull, // Tạo một số nguyên ngẫu nhiên khác không
            'description' => $this->faker->paragraph

        ];
    }
}
