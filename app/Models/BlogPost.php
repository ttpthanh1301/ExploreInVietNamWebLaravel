<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'slug',
        'image',
        'author', // Nếu có trường 'author' trong bảng
    ];

    // Phương thức tạo slug tự động nếu không có giá trị
    protected static function booted()
    {
        static::creating(function ($blogPost) {
            if (empty($blogPost->slug)) {
                $blogPost->slug = Str::slug($blogPost->title);
            }
        });
    }

    // Phương thức để lưu ảnh và trả về đường dẫn ảnh
    public function setImageAttribute($value)
    {
        if (is_null($value)) {
            return;
        }

        // Nếu có ảnh, lưu vào thư mục storage và tạo symbolic link
        $this->attributes['image'] = $value ? 'storage/' . $value : null; // Lưu đường dẫn ảnh đúng cách
    }

    // Phương thức để lấy ảnh từ public/storage
    public function getImageUrlAttribute()
    {
        // Trả về URL đầy đủ của ảnh
        return $this->image ? asset($this->image) : asset('storage/default-image.jpg');
    }
}
