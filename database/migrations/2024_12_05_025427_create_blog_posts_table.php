<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Kiểm tra xem bảng blog_posts đã tồn tại chưa
        if (!Schema::hasTable('blog_posts')) {
            Schema::create('blog_posts', function (Blueprint $table) {
                $table->id();
                $table->string('title');          // Cột 'title' cho tiêu đề bài viết
                $table->text('content');          // Cột 'content' cho nội dung bài viết
                $table->string('author');         // Cột 'author' cho tên tác giả
                $table->string('slug')->unique(); // Cột 'slug' cho đường dẫn thân thiện với SEO
                $table->timestamps();             // Các cột created_at và updated_at
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};
