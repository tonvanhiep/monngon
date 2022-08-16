@extends('admin.layout_admin')



@section('title')
    Quản lý bài viết
@endsection



@section('content')
    <div class="right-sidebar">
        <h3 class="title-category mb-40">QUẢN LÝ TIN TỨC</h3>

        <div class="options">
        <div>
            <label for="option-filter">Bộ lọc</label>
            <select id="option-filter">
            <option>Tất cả tin tức</option>
            </select>
        </div>
        <div>
            <form>
            <input type="search" placeholder="Tìm kiếm bài viết">
            <button type="submit" class="icon-search btn-search"></button>
            </form>
        </div>
        <div class="filter">
            <label for="option-sort">Sắp xếp theo</label>
            <select id="option-sort">
            <option>Tin tức mới nhất</option>
            <option>Tin tức cũ nhất</option>
            </select>
        </div>
        <div>
            <button class="btn btn-info">Thêm tin tức mới</button>
        </div>
        </div>

    </div>
    </div>
@endsection