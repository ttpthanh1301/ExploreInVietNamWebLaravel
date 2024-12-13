@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Chỉnh sửa bài viết</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.blog.update', $blog->slug) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                            <label for="title">Tiêu đề</label>
                            <input type="text" name="title" class="form-control" id="title" value="{{ old('title', $blog->title) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="content">Nội dung</label>
                            <textarea name="content" class="form-control" id="content" rows="5" required>{{ old('content', $blog->content) }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Ảnh bài viết</label>
                            <input type="file" name="image" class="form-control" id="image">
                            @if ($blog->image)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $blog->image) }}" alt="Ảnh bài viết" style="max-width: 200px;">
                                </div>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Cập nhật bài viết</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
