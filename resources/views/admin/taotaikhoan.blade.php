@extends('admin.layout_admin')



@section('title')
    Tổng quan website
@endsection



@section('content')
    <div class="right-sidebar">
        <h3 class="title-category mb-40">Tạo tài khoản</h3>
        <div>
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Tên đăng nhập</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <textarea type="text" class="form-control" name="email" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="text" class="form-control" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="">Phân quyền</label>
                        <select class="form-control" name="role">
                        <option value="3" selected>Khách hàng</option>
                        <option value="2">Quản lý</option>
                        <option value="1">Administrator</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submnit" class="btn btn-info" name="save-user">Lưu</button>
                </div>
            </form>
        </div>
    </div>
@endsection