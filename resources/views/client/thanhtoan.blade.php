<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thanh toán | Ẩm thực 3 miền, món ăn Việt Nam - Bắc, Trung, Nam | Món ngon</title>
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
                    <h1 class="title-banner">Thanh toán</h1>
                    <div class="hr-line line-white"></div>
                    <div class="desc">
                        Vui lòng kiểm tra lại thông tin Khách hàng, thông tin Giỏ hàng trước khi Đặt hàng.
                    </div>
                </div>
            </div>
            <img src="images/banner-1.jpg" alt="Banner" />
            </div>
        </div>

        <div class="list-products-home mb-40">

            <div class="container mt-4">
                <form class="needs-validation" name="frmthanhtoan" method="post" action="#">
                    <input type="hidden" name="kh_tendangnhap" value="dnpcuong">

                    <div class="row">
                        <div class="col-md-4 order-md-2 mb-4">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-muted">Giỏ hàng</span>
                                <span class="badge badge-secondary badge-pill">2</span>
                            </h4>
                            <ul class="list-group mb-3">
                                <input type="hidden" name="sanphamgiohang[1][sp_ma]" value="2">
                                <input type="hidden" name="sanphamgiohang[1][gia]" value="11800000.00">
                                <input type="hidden" name="sanphamgiohang[1][soluong]" value="2">

                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Bánh tráng trộn 1</h6>
                                        <small class="text-muted">Phần nhỏ</small>
                                    </div>
                                    <span class="text-muted">15000</span>
                                </li>
                                <input type="hidden" name="sanphamgiohang[2][sp_ma]" value="4">
                                <input type="hidden" name="sanphamgiohang[2][gia]" value="14990000.00">
                                <input type="hidden" name="sanphamgiohang[2][soluong]" value="8">

                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Bún đậu mắm tôm (x3)</h6>
                                        <small class="text-muted">Phần tá lả(bún, nem chua, dồi, sụn,...)</small>
                                    </div>
                                    <span class="text-muted">165000</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <div>
                                        <span">Phí giao hàng</span>
                                        <br>
                                        <small class="text-muted">(Tạm tính)</small>
                                    </div>
                                    <span>30000</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <strong>Tổng thành tiền</strong>
                                    <strong>210000</strong>
                                </li>
                            </ul>


                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Mã khuyến mãi">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary">Xác nhận</button>
                                </div>
                            </div>

                        </div>


                        <div class="col-md-8 order-md-1">
                            <h4 class="mb-3">Thông tin khách hàng</h4>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="kh_ten">Họ và tên *</label>
                                    <input type="text" class="form-control" name="kh_ten" id="kh_ten" required>
                                </div>
                                <!-- <div class="col-md-12">
                                    <label for="kh_gioitinh">Giới tính</label>
                                    <input type="text" class="form-control" name="kh_gioitinh" id="kh_gioitinh" value="" readonly="">
                                </div> -->
                                <div class="col-md-12">
                                    <label for="kh_diachi">Địa chỉ giao hàng *</label>
                                    <input type="text" class="form-control" name="kh_diachi" id="kh_diachi" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="kh_dienthoai">Số điện thoại *</label>
                                    <input type="tel" class="form-control" name="kh_dienthoai" id="kh_dienthoai" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="kh_email">Email *</label>
                                    <input type="email" class="form-control" name="kh_email" id="kh_email" required>
                                </div>
                                <!-- <div class="col-md-12">
                                    <label for="kh_ngaysinh">Ngày sinh</label>
                                    <input type="date" class="form-control" name="kh_ngaysinh" id="kh_ngaysinh" value="" readonly="">
                                </div> -->
                                <div class="col-md-12">
                                    <label for="kh_ghichu">Ghi chú</label>
                                    <textarea class="form-control" name="kh_ghichu" id="kh_ghichu"></textarea>
                                </div>
                            </div>

                            <h4 class="mb-3">Hình thức thanh toán</h4>

                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="httt-1" name="httt_ma" type="radio" class="custom-control-input" required=""
                                        value="1">
                                    <label class="custom-control-label" for="httt-1">Thanh toán bằng tiền mặt</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="httt-2" name="httt_ma" type="radio" class="custom-control-input" required=""
                                        value="2">
                                    <label class="custom-control-label" for="httt-2">Chuyển khoản ngân hàng</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="httt-3" name="httt_ma" type="radio" class="custom-control-input" required=""
                                        value="3">
                                    <label class="custom-control-label" for="httt-3">Thanh toán qua MoMo</label>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnDatHang">Đặt hàng</button>
                        </div>
                    </div>
                </form>

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
