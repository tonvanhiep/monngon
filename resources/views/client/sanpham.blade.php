@extends('client.layout-client')

@section('title')
    Tất cả món ăn
@endsection


@section('main')
    <main>
        @php
            $imgbanner = 'assets/images/banner-1.jpg';
            $titlebanner = 'Danh sách sản phẩm';
            $subtitlebanner = 'Nhắc đến Ẩm thực Việt, rất nhiều Đầu bếp nổi tiếng phải trầm trồ vì sự đa dạng, phong phú, nhiều màu sắc. Món ăn Việt Nam với sự hòa quyện giữa lịch sử, văn hóa cùng nét tinh tế, tài tình của người dân Việt đã chinh phục vị giác hàng triệu thực khách trong và ngoài nước, trở thành niềm tự hào của người Việt.';
        @endphp



        @include('components.banner')

        @include('components.list_products')

        @include('components.pagination')
    </main>
@endsection