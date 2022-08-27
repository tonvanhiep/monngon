@extends('admin.layout_admin')



@section('title')
    Quản lý tài khoản
@endsection



@section('content')
    <div class="right-sidebar">
        <h3 class="title-category mb-40">QUẢN LÝ TÀI KHOẢN</h3>

        <div class="options">
        <div>
            <label for="option-filter">Bộ lọc</label>
            <select id="option-filter">
            <option>Tất cả TK</option>
            <option>TK người dùng</option>
            <option>TK quản trị</option>
            </select>
        </div>
        <div>
            <form>
            <input type="search" placeholder="Tìm kiếm tên tài khoản, email, số đt...">
            <button type="submit" class="icon-search btn-search"></button>
            </form>
        </div>
        <div class="filter">
            <label for="option-sort">Sắp xếp theo</label>
            <select id="option-sort">
            <option>ID người dùng tăng dần</option>
            <option>ID người dùng giảm dần</option>
            <option>Tên tài khoản A-Z</option>
            <option>Tên tài khoản Z-A</option>
            </select>
        </div>
        <div>
            <button class="btn btn-info">Tạo tài khoản</button>
        </div>
        </div>

        <div>
        <table class="table table-hover table-condensed"> 
            <thead> 
            <tr> 
                <th style="width:10%" class="text-center">ID</th> 
                <th style="width:15%" class="text-center">Tên tài khoản</th>
                <th style="width:15%" class="text-center">Họ và tên</th> 
                <th style="width:10%" class="text-center">Số đt</th> 
                <th style="width:20%" class="text-center">Email</th> 
                <th style="width:20%" class="text-center">Địa chỉ</th>
                <th style="width:10%" class="text-center">Ngày tạo</th> 

            </tr> 
            </thead> 
            <tbody>
                @foreach ($listtaikhoan as $key => $item)
                <tr> 
                    <td data-th="ID"> #{{$item->id}} </td>
                    <td data-th="Username"> ---------- </td>
                    <td data-th="Name"> {{$item->hoten}} </td>
                    <td data-th="Subtotal" class="Tel"> {{$item->sodienthoai}} </td> 
                    <td class="actions" data-th="Email"> {{$item->email}} </td>
                    <td class="actions" data-th="Address"> {{$item->diachi}} </td>
                    <td class="actions" data-th="Datetime"> {{$item->ngaytao}} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
@endsection