<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database;
use App\Models\Tour;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Tạo 10 người dùng với thông tin ngẫu nhiên
        User::factory()->count(10)->create([
            'password' => bcrypt('password'), // Đặt mật khẩu chung nếu cần
        ]);
        Tour::factory(10)->create();

        $this->call([
            BlogPostSeeder::class,
            ToursTableSeeder::class,
        ]);
    }
}
