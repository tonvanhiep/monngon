<!DOCTYPE html>
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
    
                            <li class="nav-item"><a href="giaohang.html">Giao hàng</a></li>
                            <li class="nav-item"><a href="login.html">Đăng nhập</a></li>
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
                <h1 class="title-banner">Từ khóa tìm kiếm: </h1>
                <div class="hr-line line-white"></div>
                <div class="desc">
                    "Bún bò Huế"
                </div>
                </div>
            </div>
            <img src="images/banner-1.jpg" alt="Banner" />
            </div>
        </div>
        <div class="list-products-home mb-40">
            <div class="container">
                <div class="title-category">Kết quả tìm kiếm</div>
                <div class="list-products">
                    <div class="row">
                        <div class="col-4">
                            <div class="item-product">
                                <a href="">
                                    <div class="img-wrapper">
                                        <img src="'.$item['url_image'].'" alt="Product" />
                                    </div>
                                </a>
                                <div class="info-product">
                                    <a href=""><div class="name">tonvanhiep</div></a>
                                    <div class="price">600000 VNĐ</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="pagination-section">
                <div class="container">
                    <ul class="pagination">
                        <li class="page-item active">
                            <a href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a href="#">4</a>
                        </li>
                        <li class="page-item">
                            <a href="#">5</a>
                        </li>
                    </ul>
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
</html>
