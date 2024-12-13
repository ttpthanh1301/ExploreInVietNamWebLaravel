@extends('admin.layout') <!-- Sử dụng layout chung cho admin -->

@section('content')
<section class="space-ptb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center mb-5">
                    <h3 class="section-sub-title">Admin Panel</h3>
                    <h2 class="section-title mb-3">All Blog Posts</h2>
                </div>

                <!-- Thêm nút tạo bài viết mới -->
                <a href="{{ route('admin.blog.create') }}" class="btn btn-primary mb-3">Create New Post</a>

                <div class="row">
                    @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="h-entry">
                            <!-- Hiển thị ảnh bài viết nếu có -->
                            @if ($blog->image)
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="img-fluid">
                            @endif

                            <!-- Thông tin metadata của bài viết -->
                            <div class="meta mb-4">
                                <span class="mx-2">&bullet;</span> 
                                {{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}
                            </div>

                            <!-- Tóm tắt nội dung bài viết -->
                            <p>{{ Str::limit($blog->content, 150) }}</p>

                            <!-- Các nút hành động: sửa, xóa -->
                            <div class="actions">
                                <a href="{{ route('admin.blog.edit', $blog->slug) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('admin.blog.destroy', $blog->slug) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Phân trang nếu cần -->
                <div class="pagination">
                    {{ $blogs->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
