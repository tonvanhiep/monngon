@extends('client.layout-client')

@section('title')
    Tin tức
@endsection


@section('main')
    <main>
        @php
            $imgbanner = 'assets/images/banner-1.jpg';
            $titlebanner = 'Tin tức';
        @endphp
        @include('components.banner')

        <div class="list-products-home mb-20 mt-60">
            <div class="container">
                <div class="list-blogs-2 not-order">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="item-blog row">
                                <div class="col-md-6">
                                    <div class="img-wrapper">
                                        <img src="{{asset('assets/images/blogs/hinh-1.jpg')}}" alt="Blog" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="name">Bánh mì Việt Nam, đối thủ đáng gờm của bánh burger Mỹ</div>
                                    <div class="desc">
                                        <p>Đơn giản, tương đối hài hòa, rẻ tiền, và hơn hết là ngon. "Bánh mì" của Việt Nam đang là "đối thủ đáng gờm" với gã khổng lồ "burger" của Mỹ</p>
                                    </div>
                                    <div class="cta-wrapper">
                                      <a class="cta-primary" href="/detail-blog.html">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="item-blog row">
                              <div class="col-md-6">
                                <div class="img-wrapper">
                                    <img src="{{asset('assets/images/blogs/mi-soba.png')}}" alt="Blog" />
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="name">Những món ăn năm mới sẽ mang đến may mắn</div>
                                <div class="desc">
                                    <p>Trong dịp năm mới, người dân khắp nơi trên thế giới thường chọn thưởng thức những món ăn truyền thống độc đáo của đất nước mình. Điều thú vị là dù từ nguyên liệu nào, phong cách ẩm thực nào, các món ăn này đều có cùng ý nghĩa, là biểu tượng của sự an vui và may mắn.</p>
                                </div>
                                <div class="cta-wrapper">
                                  <a class="cta-primary" href="/detail-blog.html">Xem thêm</a>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="item-blog row">
                              <div class="col-md-6">
                                <div class="img-wrapper">
                                    <img src="{{asset('assets/images/blogs/hinh-3.jpg')}}" alt="Blog" />
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="name">6 món ăn "vàng" cho hệ miễn dịch nếu bạn ghét trái cây</div>
                                <div class="desc">
                                    <p>Nếu ghét trái cây, bạn vẫn có thể bổ sung các chất cần thiết để chăm sóc hệ miễn dịch qua các món ăn mặn thông thường.</p>
                                </div>
                                <div class="cta-wrapper">
                                  <a class="cta-primary" href="/detail-blog.html">Xem thêm</a>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        @include('components.pagination')
    </main>
@endsection