<?php

namespace Database\Factories;

use App\Models\BlogPost;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BlogPostFactory extends Factory
{
    protected $model = BlogPost::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(),
            'slug' => $this->faker->slug(),
            'image' => 'blog_images/' . $this->faker->image('public/storage/blog_images', 640, 480, null, false), // Tạo ảnh giả và lưu vào thư mục blog_images
            'author' => $this->faker->name(), // Tạo tên tác giả giả
        ];
    }
}
