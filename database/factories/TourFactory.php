<?php

namespace Database\Factories;

use App\Models\Tour;
use Illuminate\Database\Eloquent\Factories\Factory;

class TourFactory extends Factory
{
    protected $model = Tour::class;

    public function definition()
    {
        // Danh sách các khoảng thời gian phổ biến
        $periods = [
            '2 ngày 1 đêm',
            '3 ngày 2 đêm',
            '4 ngày 3 đêm',
            '5 ngày 4 đêm',
            '1 ngày',
            '6 giờ',
        ];

        // Danh sách các thể loại tour giả
        $categories = [
            'Adventure',
            'Relax',
            'Cultural',
            'Nature',
            'Historical',
            'Beach',
        ];

        return [
            'title' => $this->faker->sentence(3),
            'location' => $this->faker->city,
            'price' => number_format($this->faker->numberBetween(1000000, 10000000), 0, ',', '.') . ' VNĐ',
            'description' => $this->faker->paragraph,
            'period' => $this->faker->randomElement($periods), // Lấy ngẫu nhiên từ danh sách
            'schedule' => '07:30 - Start | 12:30 - Lunch | 15:30 - End',
            'category' => $this->faker->randomElement($categories), // Lấy ngẫu nhiên thể loại
        ];
    }
}
