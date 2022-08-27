@extends('client.layout-client')

@section('title')
    Trang chủ
@endsection


@section('main')
    <main>
        @php
            $title_listproducts = 'Món ăn nổi bật';
        @endphp

        @include('components.banner')

        <div class="intro-home">
            <div class="container">
                <div class="title-about">VỀ CHÚNG TÔI</div>
                <div class="intro-home-inner text-center">
                    <p>Ngày nay, dân tộc Việt vẫn luôn gìn giữ những đặc sắc văn hóa ẩm thực truyền thống mà ông cha ta để lại. Tuy nhiên, không phải vì thế mà nói nền ẩm thực của nước ta đã lỗi thời, lạc hậu. Kế thừa và phát huy truyền thống, người Việt lại tiếp tục sáng tạo và đón nhận những tinh hoa ẩm thực từ các nước để làm nên những món ăn độc đáo.</p>
                </div>
            </div>
        </div>

        @include('components.list_products')

        <div class="hr-line"></div>

        {{$type_list_blogs = 2;}}
        @include('components.list_blogs')

        <div class="review">
            <div class="container">
                <div class="title-review">Đánh giá</div>
                <div class="hr-line"></div>
                <div class="sub-title-review">What said about us</div>
                <div class="review-list">
                    <div class="swiper review-slider">
                        <div class="arrow-wrapper">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <ul class="list-star">
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                </ul>
                                <div class="content">"Sit reprehenderit elit commodo cupidatat cupidatat labore. Laboris ipsum exercitation do dolore sunt anim. Ad irure nostrud ea excepteur ullamco in quis enim occaecat dolore. Nisi in eu exercitation ad deserunt eu voluptate. Quis id nostrud officia anim occaecat culpa sit ipsum ex laborum sit occaecat incididunt deserunt. Id sunt ullamco et duis non nulla tempor id. Aute laboris velit irure reprehenderit tempor irure aliqua. Irure velit cupidatat non sit aliquip labore quis. Minim et amet do incididunt deserunt labore reprehenderit nostrud nulla sit laborum ut reprehenderit laboris."</div>
                                <div class="name">JHGJ KIL IUO</div>
                            </div>
                            <div class="swiper-slide">
                                <ul class="list-star">
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                </ul>
                                <div class="content">"Reprehenderit id esse aliquip sint amet sit deserunt fugiat qui duis ut minim. Sit aute nisi anim dolore officia veniam sit est elit. Ipsum eu incididunt adipisicing dolor elit ad cillum in eu non pariatur. Adipisicing consectetur aliquip dolore d Consectetur amet adipisicing laborum cillum proident incididunt adipisicing nostrud duis. Excepteur irure quis Lorem ullamco sint do commodo. Aliqua consectetur irure exercitation qui.eserunt et Lorem laborum quis. Velit consectetur qui proident occaecat velit commodo sit ex ut dolor laboris eiusmod. Commodo nostrud fugiat adipisicing ullamco aute quis u"llamco consequat cupidatat. Consectetur enim adipisicing incididunt veniam anim adipisicing tempor proident pariatur enim fugiat qui tempor adipisicing."</div>
                                <div class="name">CJG HKY SED</div>
                            </div>
                            <div class="swiper-slide">
                                <ul class="list-star">
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                </ul>
                                <div class="content">"Non nisi et magna tempor ea magna duis non quis eiusmod id Lorem. Aliquip minim veniam laboris enim ut irure sit labore ea eu esse dolore excepteur laborum. Ullamco voluptate aliqua ad id mollit irure Lorem pariatur adipisicing magna consequat. Nulla sit cillum incididunt duis aliquip sint nostrud. Non sunt veniam exercitation mollit et laborum ullamco aliquip incididunt aute esse. Magna nisi ad adipisicing eiusmod aute ipsum dolore ullamco exercitation adipisicing Lorem veniam. Nostrud culpa ut enim laboris fugiat qui laborum. Exercitation eiusmod sint labore laboris id occaecat enim excepteur cillum aliqua dolor eu dolore anim. Sunt sit deserunt in nulla amet minim labore consequat fugiat non. Labore irure deserunt ut non culpa cupidatat esse."</div>
                                <div class="name">KIIK JUU KIK</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{$type_list_blogs = 1;}}
        @include('components.list_blogs')
    </main>
@endsection






{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ẩm thực 3 miền, món ăn Việt Nam - Bắc, Trung, Nam | Trang chủ | Món ngon</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Latin:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">    

    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
    <link rel="icon" type="image/jpg" href="{{asset('assets/images/logo/favicon.png')}}">
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <a href="/"><img class="logo" src="{{asset('assets/images/logo/favicon.png')}}" /></a>
                </div>
                <div class="col-lg-8  center-header">
                    <ul class="navigation">
                        <li class="nav-item"><a href="/">Trang chủ</a></li>
                        <li class="nav-item"><a href="/sanpham">Món ăn</a></li>
                        <li class="nav-item"><a href="/tintuc">Tin tức</a></li>
                        <li class="nav-item"><a href="/lienhe">Liên hệ</a></li>

                        <li class="nav-item"><a href="login.html">Đăng nhập</a></li>
                        <li class="nav-item"><a href="register.html">Đăng kí</a></li>
                    </ul>
                    <div class="search-box">
                        <form class="search-inner" method="get" action="search.html">
                            <input class="form-control" name="keyword" value="" />
                            <button class="icon-search"></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2 right-header">
                    <div class="cart">
                        <div class="total-items">9</div>
                    </div>
                    <a class="a-cart" href="giohang.html">Giỏ hàng</a>                
                </div>
            </div>
        </div>
    </header>


    <main>
        <div class="home-slider">
            <div class="swiper home-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{asset('assets/images/slide-1.jpg')}}" >
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('assets/images/slide-2.jpg')}}" >
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('assets/images/slide-3.jpg')}}" >
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>

        <div class="intro-home">
            <div class="container">
                <div class="title-about">VỀ CHÚNG TÔI</div>
                <div class="intro-home-inner text-center">
                    <p>Ngày nay, dân tộc Việt vẫn luôn gìn giữ những đặc sắc văn hóa ẩm thực truyền thống mà ông cha ta để lại. Tuy nhiên, không phải vì thế mà nói nền ẩm thực của nước ta đã lỗi thời, lạc hậu. Kế thừa và phát huy truyền thống, người Việt lại tiếp tục sáng tạo và đón nhận những tinh hoa ẩm thực từ các nước để làm nên những món ăn độc đáo.</p>
                </div>
            </div>
        </div>

        <div class="list-products-home">
            <div class="container">
                <div class="title-category">Danh sách sản phẩm</div>
                <div class="list-products">
                    <div class="row">
                        <div class="col-4">
                            <div class="item-product">
                                <a href="/detail-blog.html">
                                    <div class="img-wrapper">
                                        <img src="{{asset('assets/images/products/hinh-1.jpg')}}" alt="Product" />
                                    </div>
                                </a>
                                <div class="info-product">
                                    <a href="/detail-blog.html"><div class="name">Gỏi cuốn</div></a>
                                    <div class="price">7.000 VNĐ</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="item-product">
                                <a href="/detail-blog.html">
                                    <div class="img-wrapper">
                                        <img src="{{asset('assets/images/products/hinh-2.jpg')}}" alt="Product" />
                                    </div>
                                </a>
                                <div class="info-product">
                                    <a href="/detail-blog.html"><div class="name">Bánh tráng trộn</div></a>
                                    <div class="price">25.000 VNĐ</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="item-product">
                                <a href="/detail-blog.html">
                                    <div class="img-wrapper">
                                        <img src="{{asset('assets/images/products/hinh-3.jpg')}}" alt="Product" />
                                    </div>
                                </a>
                                <div class="info-product">
                                    <a href="/detail-blog.html"><div class="name">Bún đậu mắm tôm</div></a>
                                    <div class="price">70.000 VNĐ</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="item-product">
                                <a href="/detail-blog.html">
                                    <div class="img-wrapper">
                                        <img src="{{asset('assets/images/products/hinh-4.jpg')}}" alt="Product" />
                                    </div>
                                </a>
                                <div class="info-product">
                                    <a href="/detail-blog.html"><div class="name">Bánh mì</div></a>
                                    <div class="price">20.000 VNĐ</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="item-product">
                                <a href="/detail-blog.html">
                                    <div class="img-wrapper">
                                        <img src="{{asset('assets/images/products/hinh-5.jpg')}}" alt="Product" />
                                    </div>
                                </a>
                                <div class="info-product">
                                    <a href="/detail-blog.html"><div class="name">Bánh bột lọc</div></a>
                                    <div class="price">5.000 VNĐ</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="item-product">
                                <a href="/detail-blog.html">
                                    <div class="img-wrapper">
                                        <img src="{{asset('assets/images/products/hinh-6.jpg')}}" alt="Product" />
                                    </div>
                                </a>
                                <div class="info-product">
                                    <a href="/detail-blog.html"><div class="name">Sushi/Sashimi</div></a>
                                    <div class="price">7.000 VNĐ</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hr-line"></div>

        <div class="list-blogs-home">
            <div class="container">
                <div class="title-category">Tin tức</div>
                <div class="list-blogs-2">
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

        <div class="review">
            <div class="container">
                <div class="title-review">Đánh giá</div>
                <div class="hr-line"></div>
                <div class="sub-title-review">What said about us</div>
                <div class="review-list">
                    <div class="swiper review-slider">
                        <div class="arrow-wrapper">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <ul class="list-star">
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                </ul>
                                <div class="content">"Sit reprehenderit elit commodo cupidatat cupidatat labore. Laboris ipsum exercitation do dolore sunt anim. Ad irure nostrud ea excepteur ullamco in quis enim occaecat dolore. Nisi in eu exercitation ad deserunt eu voluptate. Quis id nostrud officia anim occaecat culpa sit ipsum ex laborum sit occaecat incididunt deserunt. Id sunt ullamco et duis non nulla tempor id. Aute laboris velit irure reprehenderit tempor irure aliqua. Irure velit cupidatat non sit aliquip labore quis. Minim et amet do incididunt deserunt labore reprehenderit nostrud nulla sit laborum ut reprehenderit laboris."</div>
                                <div class="name">Jack</div>
                            </div>
                            <div class="swiper-slide">
                                <ul class="list-star">
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                </ul>
                                <div class="content">"Reprehenderit id esse aliquip sint amet sit deserunt fugiat qui duis ut minim. Sit aute nisi anim dolore officia veniam sit est elit. Ipsum eu incididunt adipisicing dolor elit ad cillum in eu non pariatur. Adipisicing consectetur aliquip dolore d Consectetur amet adipisicing laborum cillum proident incididunt adipisicing nostrud duis. Excepteur irure quis Lorem ullamco sint do commodo. Aliqua consectetur irure exercitation qui.eserunt et Lorem laborum quis. Velit consectetur qui proident occaecat velit commodo sit ex ut dolor laboris eiusmod. Commodo nostrud fugiat adipisicing ullamco aute quis u"llamco consequat cupidatat. Consectetur enim adipisicing incididunt veniam anim adipisicing tempor proident pariatur enim fugiat qui tempor adipisicing."</div>
                                <div class="name">Alex</div>
                            </div>
                            <div class="swiper-slide">
                                <ul class="list-star">
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                    <li><i class="icon-star-full"></i></li>
                                </ul>
                                <div class="content">"Non nisi et magna tempor ea magna duis non quis eiusmod id Lorem. Aliquip minim veniam laboris enim ut irure sit labore ea eu esse dolore excepteur laborum. Ullamco voluptate aliqua ad id mollit irure Lorem pariatur adipisicing magna consequat. Nulla sit cillum incididunt duis aliquip sint nostrud. Non sunt veniam exercitation mollit et laborum ullamco aliquip incididunt aute esse. Magna nisi ad adipisicing eiusmod aute ipsum dolore ullamco exercitation adipisicing Lorem veniam. Nostrud culpa ut enim laboris fugiat qui laborum. Exercitation eiusmod sint labore laboris id occaecat enim excepteur cillum aliqua dolor eu dolore anim. Sunt sit deserunt in nulla amet minim labore consequat fugiat non. Labore irure deserunt ut non culpa cupidatat esse."</div>
                                <div class="name">Tony</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="list-blogs-home">
            <div class="container">
                <div class="title-category">Tin tức</div>
                <div class="list-blogs">
                    <div class="row">
                        <div class="col-4">
                            <div class="item-blog">
                                <a href="/detail-blog.html">
                                    <div class="img-wrapper">
                                        <img src="{{asset('assets/images/blogs/hinh-1.jpg')}}" alt="Blog" />
                                    </div>
                                </a>
                                <div class="name">Bánh mì Việt Nam, đối thủ đáng gờm của bánh burger Mỹ</div>
                                <div class="desc">
                                    <p>Đơn giản, tương đối hài hòa, rẻ tiền, và hơn hết là ngon. "Bánh mì" của Việt Nam đang là "đối thủ đáng gờm" với gã khổng lồ "burger" của Mỹ</p>
                                </div>
                                <div>
                                    <a class="cta-primary" href="/detail-blog.html">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="item-blog">
                                <a href="/detail-blog.html">
                                    <div class="img-wrapper">
                                        <img src="{{asset('assets/images/blogs/mi-soba.png')}}" alt="Blog" />
                                    </div>
                                </a>
                                <div class="name">Những món ăn năm mới sẽ mang đến may mắn</div>
                                <div class="desc">
                                    <p>Trong dịp năm mới, người dân khắp nơi trên thế giới thường chọn thưởng thức những món ăn truyền thống độc đáo của đất nước mình. Điều thú vị là dù từ nguyên liệu nào, phong cách ẩm thực nào, các món ăn này đều có cùng ý nghĩa, là biểu tượng của sự an vui và may mắn.</p>
                                </div>
                                <div>
                                    <a class="cta-primary" href="/detail-blog.html">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="item-blog">
                                <a href="/detail-blog.html">
                                    <div class="img-wrapper">
                                        <img src="{{asset('assets/images/blogs/hinh-3.jpg')}}" alt="Blog" />
                                    </div>
                                </a>
                                <div class="name">6 món ăn "vàng" cho hệ miễn dịch nếu bạn ghét trái cây</div>
                                <div class="desc">
                                    <p>Nếu ghét trái cây, bạn vẫn có thể bổ sung các chất cần thiết để chăm sóc hệ miễn dịch qua các món ăn mặn thông thường.</p>
                                </div>
                                <div>
                                    <a class="cta-primary" href="/detail-blog.html">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="item-blog">
                                <a href="/detail-blog.html">
                                    <div class="img-wrapper">
                                        <img src="{{asset('assets/images/blogs/hinh-4.jpg')}}" alt="Blog" />
                                    </div>
                                </a>
                                <div class="name">Gợi ý 5 món ăn cho bữa sáng bổ dưỡng tự làm tại nhà</div>
                                <div class="desc">
                                    <p>Bữa ăn sáng là bữa ăn quan trọng nhất trong ngày, cung cấp năng lượng cho cả ngày làm việc. Để đảm bảo vấn đề vệ sinh và sức khỏe, nếu có thể, bạn nên dành chút thời gian trước giờ đi làm để tự nấu bữa sáng tại nhà.</p>
                                </div>
                                <div>
                                    <a class="cta-primary" href="/detail-blog.html">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="item-blog">
                                <a href="/detail-blog.html">
                                    <div class="img-wrapper">
                                        <img src="{{asset('assets/images/blogs/hinh-5.jpg')}}" alt="Blog" />
                                    </div>
                                </a>
                                <div class="name">Ma trận “món nhà làm” dành cho tết</div>
                                <div class="desc">
                                    <p>Lạp xưởng tươi, mứt các loại, củ kiệu, dưa món… là những món ăn ngày tết phổ biến được rao bán trên mạng với tên gọi chung “món nhà làm”. Các món ăn này được nhiều người ưa chuộng nhờ đáp ứng nhu cầu tiện lợi và tiết kiệm thời gian nấu ăn ngày tết.</p>
                                </div>
                                <div>
                                    <a class="cta-primary" href="/detail-blog.html">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="item-blog">
                                <a href="/detail-blog.html">
                                    <div class="img-wrapper">
                                        <img src="{{asset('assets/images/blogs/hinh-6.jpg')}}" alt="Blog" />
                                    </div>
                                </a>
                                <div class="name">Sự tinh tế trong ẩm thực Nhật Bản</div>
                                <div class="desc">
                                    <p>Ẩm thực Nhật hút hồn khách ở sự trưng bày tinh tế, bắt mắt. Những người đã từng tiếp xúc với ẩm thực của đất nước này đều thừa nhận về hình thức món ăn Nhật xứng đáng dẫn đầu thế giới ẩm thực.</p>
                                </div>
                                <div>
                                    <a class="cta-primary" href="/detail-blog.html">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-left">
                    <img class="logo" src="{{asset('assets/images/logo/favicon.png')}}" />
                    <span class="copry-right">&copy; 2021 Delicious Food. All right reserved</span>
                </div>
                <div class="col-md-8 footer-right">
                    <ul class="nav-footer">
                        <li>
                            <a href="/">Trang chủ</a>
                        </li>
                        <li>
                            <a href="/products.html">Món ăn</a>
                        </li>
                        <li>
                            <a href="/blogs.html">Tin tức</a>
                        </li>
                        <li>
                            <a href="/contact.html">Liên hệ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html> --}}