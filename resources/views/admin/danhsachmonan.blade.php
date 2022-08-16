@extends('admin.layout_admin')



@section('title')
    Tổng quan website
@endsection



@section('content')
    <div class="right-sidebar">
        <h3 class="title-category mb-40">DANH SÁCH MÓN ĂN</h3>

        <div class="options">
        <div>
            <label for="option-filter">Bộ lọc</label>
            <select id="option-filter">
            <option>Tất cả món ăn</option>
            </select>
        </div>
        <div>
            <form>
            <input type="search" placeholder="Tìm kiếm tên món ăn...">
            <button type="submit" class="icon-search btn-search"></button>
            </form>
        </div>
        <div class="filter">
            <label for="option-sort">Sắp xếp theo</label>
            <select id="option-sort">
            <option>Món ăn mới nhất</option>
            <option>Món ăn cũ nhất</option>
            <option>Giá tiền tăng dần</option>
            <option>Giá tiền giảm dần</option>
            </select>
        </div>
        <div>
            <button class="btn btn-info">Thêm món mới</button>
        </div>
        </div>

    </div>
@endsection