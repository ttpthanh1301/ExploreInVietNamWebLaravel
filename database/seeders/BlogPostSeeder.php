<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BlogPost;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tạo một vài bài viết mẫu với ảnh
        BlogPost::create([
            'title' => 'Discover Sapa: The Stunning Beauty of the Highlands',
            'slug' => 'discover-sapa-the-stunning-beauty-of-the-highlands',
            'content' => 'Sapa, with its lush terraced fields and majestic mountains, is the perfect destination for those who love pristine nature and unique cultural experiences from ethnic minorities.',
            'image' => 'blog_images/1.jpg', // Đường dẫn ảnh
            'author' => 'Nguyen Van A', // Thêm tên tác giả
            'created_at' => now(), // Thêm thời gian tạo bài viết
            'updated_at' => now(), // Thêm thời gian cập nhật bài viết
        ]);

        BlogPost::create([
            'title' => 'Hanoi: A City Full of History and Culture',
            'slug' => 'hanoi-city-full-of-history-and-culture',
            'content' => 'Hanoi, the capital of Vietnam, offers a blend of rich history, stunning architecture, and delicious cuisine that captures the essence of Vietnamese culture.',
            'image' => 'blog_images/2.jpg', // Đường dẫn ảnh
            'author' => 'Nguyen Thi B', // Thêm tên tác giả
            'created_at' => now(), // Thêm thời gian tạo bài viết
            'updated_at' => now(), // Thêm thời gian cập nhật bài viết
        ]);

        BlogPost::create([
            'title' => 'Exploring Halong Bay: A Natural Wonder',
            'slug' => 'exploring-halong-bay-a-natural-wonder',
            'content' => 'Halong Bay, known for its emerald waters and towering limestone islands, is a UNESCO World Heritage Site and one of the most popular tourist destinations in Vietnam.',
            'image' => 'blog_images/3.jpg', // Đường dẫn ảnh
            'author' => 'Tran Thi C', // Thêm tên tác giả
            'created_at' => now(), // Thêm thời gian tạo bài viết
            'updated_at' => now(), // Thêm thời gian cập nhật bài viết
        ]);

        // Bạn có thể thêm nhiều bài viết với ảnh khác tại đây
    }
}
