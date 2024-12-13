@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Xác nhận xóa bài viết</h3>
                </div>
                <div class="card-body">
                    <p>Bạn có chắc chắn muốn xóa bài viết "<strong>{{ $blog->title }}</strong>" không?</p>
                    
                    <form action="{{ route('admin.blog.destroy', $blog->slug) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Xóa bài viết</button>
                        <a href="{{ route('admin.blog.index') }}" class="btn btn-secondary">Hủy bỏ</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
