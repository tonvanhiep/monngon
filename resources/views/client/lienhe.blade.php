@extends('client.layout-client')

@section('title')
    Liên hệ
@endsection


@section('main')
    <main>
        @php
            $titlebanner = 'Liên hệ';
        @endphp
        @include('components.banner')

        <div class="container">
            <div class="contact-us row pt-40 pb-40">
                <div class="col-md-5">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <input id="email" class="form-control" name="email" required value="" />
                        </div>
                        <div class="form-group">
                            <label for="phone">Số điện thoại</label>
                            <input id="phone" class="form-control" name="phone" value="" />
                        </div>
                        <div class="form-group">
                            <label for="content">Nội dung</label>
                            <textarea class="form-control" name="content" rows="4"></textarea>
                        </div>
                        <div class="form-group text-right">
                            <button class="btn btn-info" type="submit" name="sendContact">Gửi</button>
                        </div>
                        <p class="text-danger text-center"></p>
                    </form>
                </div>

                <div class="col-md-7">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.231586283822!2d106.80145550032064!3d10.869982551427999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x71c692e83c4544fc!2zS2hvYSBDw7RuZyBuZ2jhu4cgUGjhuqduIG3hu4Ft!5e0!3m2!1svi!2s!4v1638107946378!5m2!1svi!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>

    </main>
@endsection






{{-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ẩm thực 3 miền, món ăn Việt Nam - Bắc, Trung, Nam | Trang chủ | Món ngon</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/icomoon.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anek+Latin:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">    
    
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
        <script src="js/script.js"></script>
        <link rel="icon" type="image/jpg" href="images/logo/favicon.png">
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <a href="/"><img class="logo" src="images/logo/favicon.png" /></a>
                    </div>
                    <div class="col-lg-8  center-header">
                        <ul class="navigation">
                            <li class="nav-item"><a href="/">Trang chủ</a></li>
                            <li class="nav-item"><a href="/products.html">Món ăn</a></li>
                            <li class="nav-item"><a href="/blogs.html">Tin tức</a></li>
                            <li class="nav-item"><a href="/contact.html">Liên hệ</a></li>
    
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
        <div class="single-banner">
            <div class="banner-wrapper">
                <div class="container">
                    <div class="content-banner">
                        <h1 class="title-banner">hiệp tôn</h1>
                        <div class="hr-line line-white"></div>
                        <div class="desc">
                            tôn hiệp
                        </div>
                    </div>
                </div>
              <img src="images/banner-1.jpg" alt="Banner" />
            </div>
        </div>

        <div class="container">
            <div class="contact-us row pt-40 pb-40">
                <div class="col-md-5">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <input id="email" class="form-control" name="email" required value="" />
                        </div>
                        <div class="form-group">
                            <label for="phone">Số điện thoại</label>
                            <input id="phone" class="form-control" name="phone" value="" />
                        </div>
                        <div class="form-group">
                            <label for="content">Nội dung</label>
                            <textarea class="form-control" name="content" rows="4"></textarea>
                        </div>
                        <div class="form-group text-right">
                            <button class="btn btn-info" type="submit" name="sendContact">Gửi</button>
                        </div>
                        <p class="text-danger text-center">-------------</p>
                    </form>
                </div>

                <div class="col-md-7">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.231586283822!2d106.80145550032064!3d10.869982551427999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x71c692e83c4544fc!2zS2hvYSBDw7RuZyBuZ2jhu4cgUGjhuqduIG3hu4Ft!5e0!3m2!1svi!2s!4v1638107946378!5m2!1svi!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>


    </main>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-left">
                    <img class="logo" src="images/logo/favicon.png" />
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