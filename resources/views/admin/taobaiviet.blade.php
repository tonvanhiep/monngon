@extends('admin.layout_admin')



@section('title')
    Tạo bài viết
@endsection



@section('content')
    <div class="right-sidebar">

                        
        <h3 class="title-category mb-40">Tạo bài viết</h3>
        <div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên bài viết</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <label for="">Nội dung</label>
                    <textarea type="text" class="form-control" name="content" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">Link hình</label>
                    <input class="form-control" type="text" name="url_img" required>
                </div>

                <div class="form-group">
                    <button type="submnit" class="btn btn-info" name="save-blog">Lưu</button>
                </div>
            </form>
        </div>
    </div>
@endsection