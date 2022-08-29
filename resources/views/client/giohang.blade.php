@extends('client.layout-client')

@section('title')
    Giỏ hàng
@endsection


@section('main')
    <main>
        @php
            $imgbanner = 'assets/images/banner-1.jpg';
            $titlebanner = 'Giỏ hàng';
        @endphp
        @include('components.banner')

        <div class="list-products-home mb-20 mt-60">
            <div class="container">
                <div>
                    <table id="cart" class="table table-hover table-condensed"> 
                        <thead> 
                            <tr> 
                                <th style="width:15%">Ảnh sp</th> 
                                <th style="width:32%">Tên sản phẩm</th> 
                                <th style="width:18%">Phân loại</th> 
                                <th style="width:10%">Số lượng</th> 
                                <th style="width:20%" class="text-center">Thành tiền</th> 
                                <th style="width:5%">Xóa</th> 
                            </tr> 
                        </thead> 
                        <tbody>
                            <tr> 
                                <td data-th="Image"> 
                                    <div class="row"> 
                                        <div class="col-sm-2 hidden-xs">
                                            <img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/shopping_cart/images/090.jpg" alt="Sản phẩm 1" class="img-responsive" width="100">
                                        </div> 
                                    </div> 
                                </td>
                                <td data-th="Info">
                                    <div class="col-sm-10"> 
                                        <h4 class="nomargin">Sản phẩm 1</h4> 
                                        <p>Mô tả của sản phẩm 1</p> 
                                    </div> 
                                </td>
                                <td data-th="Categorize">
                                    <select>
                                        <option>Danh sách 01</option>
                                        <option>Danh sách 02</option>
                                        <option>Danh sách 03</option>
                                        <option>Danh sách 03</option>
                                    </select>
                                </td> 
                                <td data-th="Amount">
                                    <input class="form-control text-center" value="1" type="number">
                                </td> 
                                <td data-th="Subtotal" class="text-center">200.000 đ</td> 
                                <td class="actions" data-th="Delete">
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash-o"></i>
                                </button>
                                </td> 
                            </tr>
                            <tr> 
                                <td data-th="Image"> 
                                    <div class="row"> 
                                        <div class="col-sm-2 hidden-xs">
                                            <img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/shopping_cart/images/090.jpg" alt="Sản phẩm 1" class="img-responsive" width="100">
                                        </div> 
                                    </div> 
                                </td>
                                <td data-th="Info">
                                    <div class="col-sm-10"> 
                                        <h4 class="nomargin">Sản phẩm 1</h4> 
                                        <p>Mô tả của sản phẩm 1</p> 
                                    </div> 
                                </td>
                                <td data-th="Categorize">

                                </td> 
                                <td data-th="Amount">
                                    <input class="form-control text-center" value="1" type="number">
                                </td> 
                                <td data-th="Subtotal" class="text-center">200.000 đ</td> 
                                <td class="actions" data-th="Delete">
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash-o"></i>
                                </button>
                                </td> 
                            </tr>
                            <tr> 
                                <td data-th="Image"> 
                                    <div class="row"> 
                                        <div class="col-sm-2 hidden-xs">
                                            <img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/shopping_cart/images/090.jpg" alt="Sản phẩm 1" class="img-responsive" width="100">
                                        </div> 
                                    </div> 
                                </td>
                                <td data-th="Info">
                                    <div class="col-sm-10"> 
                                        <h4 class="nomargin">Sản phẩm 1</h4> 
                                        <p>Mô tả của sản phẩm 1</p> 
                                    </div> 
                                </td>
                                <td data-th="Categorize">

                                </td> 
                                <td data-th="Amount">
                                    <input class="form-control text-center" value="1" type="number">
                                </td> 
                                <td data-th="Subtotal" class="text-center">200.000 đ</td> 
                                <td class="actions" data-th="Delete">
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash-o"></i>
                                </button>
                                </td> 
                            </tr>
                        </tbody>
                        <tfoot> 
                            <tr class="visible-xs"> 
                                <td colspan="3" class="hidden-xs"> </td>
                                <td class="text-center">
                                    <strong>Tổng tiền:</strong>
                                </td>
                                <td class="text-center">
                                    <strong>200.000 đ</strong>
                                </td>
                            </tr>
                        </tfoot> 
                    </table>
                    <div class="option-cart">
                        <a href="index.html" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>

                        <a href="{{route('thanhtoan')}}" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
                    </div>
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
    <title>Giỏ hàng | Ẩm thực 3 miền, món ăn Việt Nam - Bắc, Trung, Nam | Món ngon</title>
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
                        <h1 class="title-banner">GIỎ HÀNG</h1>
                        <div class="hr-line line-white"></div>
                    </div>
                </div>
                <img src="images/banner-1.jpg" alt="Banner" />
            </div>
        </div>

        <div class="list-products-home mb-20 mt-60">
            <div class="container">
                <div>
                    <table id="cart" class="table table-hover table-condensed"> 
                        <thead> 
                            <tr> 
                                <th style="width:15%">Ảnh sp</th> 
                                <th style="width:32%">Tên sản phẩm</th> 
                                <th style="width:18%">Phân loại</th> 
                                <th style="width:10%">Số lượng</th> 
                                <th style="width:20%" class="text-center">Thành tiền</th> 
                                <th style="width:5%">Xóa</th> 
                            </tr> 
                        </thead> 
                        <tbody>
                            <tr> 
                                <td data-th="Image"> 
                                    <div class="row"> 
                                        <div class="col-sm-2 hidden-xs">
                                            <img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/shopping_cart/images/090.jpg" alt="Sản phẩm 1" class="img-responsive" width="100">
                                        </div> 
                                    </div> 
                                </td>
                                <td data-th="Info">
                                    <div class="col-sm-10"> 
                                        <h4 class="nomargin">Sản phẩm 1</h4> 
                                        <p>Mô tả của sản phẩm 1</p> 
                                    </div> 
                                </td>
                                <td data-th="Categorize">
                                    <select>
                                        <option>Danh sách 01</option>
                                        <option>Danh sách 02</option>
                                        <option>Danh sách 03</option>
                                        <option>Danh sách 03</option>
                                    </select>
                                </td> 
                                <td data-th="Amount">
                                    <input class="form-control text-center" value="1" type="number">
                                </td> 
                                <td data-th="Subtotal" class="text-center">200.000 đ</td> 
                                <td class="actions" data-th="Delete">
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash-o"></i>
                                </button>
                                </td> 
                            </tr>
                            <tr> 
                                <td data-th="Image"> 
                                    <div class="row"> 
                                        <div class="col-sm-2 hidden-xs">
                                            <img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/shopping_cart/images/090.jpg" alt="Sản phẩm 1" class="img-responsive" width="100">
                                        </div> 
                                    </div> 
                                </td>
                                <td data-th="Info">
                                    <div class="col-sm-10"> 
                                        <h4 class="nomargin">Sản phẩm 1</h4> 
                                        <p>Mô tả của sản phẩm 1</p> 
                                    </div> 
                                </td>
                                <td data-th="Categorize">

                                </td> 
                                <td data-th="Amount">
                                    <input class="form-control text-center" value="1" type="number">
                                </td> 
                                <td data-th="Subtotal" class="text-center">200.000 đ</td> 
                                <td class="actions" data-th="Delete">
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash-o"></i>
                                </button>
                                </td> 
                            </tr>
                            <tr> 
                                <td data-th="Image"> 
                                    <div class="row"> 
                                        <div class="col-sm-2 hidden-xs">
                                            <img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/shopping_cart/images/090.jpg" alt="Sản phẩm 1" class="img-responsive" width="100">
                                        </div> 
                                    </div> 
                                </td>
                                <td data-th="Info">
                                    <div class="col-sm-10"> 
                                        <h4 class="nomargin">Sản phẩm 1</h4> 
                                        <p>Mô tả của sản phẩm 1</p> 
                                    </div> 
                                </td>
                                <td data-th="Categorize">

                                </td> 
                                <td data-th="Amount">
                                    <input class="form-control text-center" value="1" type="number">
                                </td> 
                                <td data-th="Subtotal" class="text-center">200.000 đ</td> 
                                <td class="actions" data-th="Delete">
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash-o"></i>
                                </button>
                                </td> 
                            </tr>
                        </tbody>
                        <tfoot> 
                            <tr class="visible-xs"> 
                                <td colspan="3" class="hidden-xs"> </td>
                                <td class="text-center">
                                    <strong>Tổng tiền:</strong>
                                </td>
                                <td class="text-center">
                                    <strong>200.000 đ</strong>
                                </td>
                            </tr>
                        </tfoot> 
                    </table>
                    <div class="option-cart">
                        <a href="index.html" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>

                        <a href="thanhtoan.html" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
                    </div>
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