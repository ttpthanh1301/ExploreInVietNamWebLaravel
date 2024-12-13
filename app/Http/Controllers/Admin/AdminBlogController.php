<?php

namespace App\Http\Controllers\Admin;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AdminBlogController extends Controller
{
    // Hiển thị danh sách các bài viết
    public function index()
    {
        $blogs = BlogPost::paginate(10); // Lấy 10 bài viết mỗi trang
        return view('admin.blog.index', compact('blogs'));
    }

    // Hiển thị form tạo bài viết mới
    public function create()
    {
        return view('admin.blog.create');
    }

    // Xử lý lưu bài viết mới vào cơ sở dữ liệu
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Kiểm tra ảnh hợp lệ
        ]);

        // Xử lý ảnh
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blog_images', 'public'); // Lưu ảnh vào thư mục 'blog_images' trong storage/app/public
        }

        // Lưu bài viết vào cơ sở dữ liệu
        BlogPost::create([
            'title' => $request->title,
            'content' => $request->content,
            'slug' => Str::slug($request->title),
            'image' => $imagePath, // Lưu đường dẫn ảnh
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'Bài viết đã được tạo thành công.');
    }

    // Hiển thị form chỉnh sửa bài viết
    public function edit($slug)
    {
        $blog = BlogPost::where('slug', $slug)->firstOrFail();
        return view('admin.blog.edit', compact('blog'));
    }

    // Xử lý cập nhật bài viết
    public function update(Request $request, $slug)
    {
        $blog = BlogPost::where('slug', $slug)->firstOrFail();

        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Kiểm tra ảnh hợp lệ
        ]);

        // Xử lý ảnh (nếu có)
        $imagePath = $blog->image;
        if ($request->hasFile('image')) {
            // Xóa ảnh cũ nếu có và lưu ảnh mới
            if ($imagePath) {
                Storage::delete('public/' . $imagePath);
            }
            $imagePath = $request->file('image')->store('blog_images', 'public');
        }

        // Cập nhật bài viết
        $blog->update([
            'title' => $request->title,
            'content' => $request->content,
            'slug' => Str::slug($request->title),
            'image' => $imagePath, // Cập nhật đường dẫn ảnh
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'Bài viết đã được cập nhật.');
    }

    // Xóa bài viết
    public function destroy($slug)
    {
        $blog = BlogPost::where('slug', $slug)->firstOrFail();

        // Xóa ảnh nếu có
        if ($blog->image) {
            Storage::delete('public/' . $blog->image);
        }

        // Xóa bài viết
        $blog->delete();

        return redirect()->route('admin.blog.index')->with('success', 'Bài viết đã được xóa.');
    }
}
