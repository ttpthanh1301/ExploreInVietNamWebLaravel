<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Hiển thị chi tiết bài viết theo slug
    public function show($slug)
    {
        // Tìm bài viết theo slug và xử lý khi không tìm thấy
        $blog = BlogPost::where('slug', $slug)->first();
        if (!$blog) {
            abort(404, 'Bài viết không tồn tại.');
        }

        // Trả về view và truyền dữ liệu
        return view('pages.blog-detail', compact('blog'));
    }

    // Lưu bài viết mới
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Kiểm tra ảnh hợp lệ
        ]);

        // Xử lý ảnh
        $imagePath = null;
        if ($request->hasFile('image')) {
            // Lưu ảnh vào thư mục 'blog_images' trong storage/app/public
            $imagePath = $request->file('image')->store('blog_images', 'public');
        }

        // Lưu bài viết vào cơ sở dữ liệu
        BlogPost::create([
            'title' => $request->title,
            'content' => $request->content,
            'slug' => Str::slug($request->title, '-'),
            'image' => $imagePath, // Lưu đường dẫn ảnh nếu có
        ]);

        // Redirect về trang danh sách bài viết với thông báo thành công
        return redirect()->route('admin.blog.index')->with('success', 'Bài viết đã được tạo thành công.');
    }
}
