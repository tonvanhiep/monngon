@extends('admin.layout_admin')

@section('title')
    Chi tiết đơn hàng #2355
@endsection

@section('content')
    <div class="right-sidebar order-detail">
        <h3 class="title-category mb-40" style="display: inline;">CHI TIẾT ĐƠN HÀNG #2355</h3>
        <button style="display: inline;" class="icon-pencil"></button>
        <div>
            <table class="table table-hover table-condensed">
                <tr>
                    <td style="width:50%">Tình trạng: <h5>Chờ xác nhận</h5></td>
                    <td style="width:50%">Ngày đặt: <h5>10:36:55 29/02/2022</h5></td>
                </tr>
                <tr>
                    <td>Người đặt: <h5>Tôn Văn Hiệp</h5></td>
                    <td>Số điện thoại: <h5><a href="tel:0363038485">036.303.8485</a></h5></td>
                </tr>
                <tr>
                    <td>Địa chỉ: <h5>125A, DHJEX, DFJEDN, TP.FJFJ</h5></td>
                    <td>Email: <h5><a href="mailto:tonvanhiepdragon@gmail.com">tonvanhiepdragon@gmail.com</a></h5></td>
                </tr>
                <tr>
                    <td colspan="2">Ghi chú đơn hàng: <h5>Giao hàng sớm; gọi trước khi giao 10p</h5></td>
                </tr>
            </table>
            <hr>
            <div class="info-cart">
                <h4>Thông tin đặt hàng</h4>
                <table class="table table-hover table-condensed"> 
                    <thead> 
                        <tr> 
                            <th style="width:10%" class="text-center">ID</th> 
                            <th style="width:20%" class="text-center">Tên món ăn</th>
                            <th style="width:15%" class="text-center">Phân loại</th> 
                            <th style="width:10%" class="text-center">Đơn giá</th> 
                            <th style="width:10%" class="text-center">Số lượng</th> 
                            <th style="width:12%" class="text-center">Thành tiền</th> 
                            <th style="width:17%" class="text-center">Ghi chú</th> 
                            <th style="width:5%"></th> 
                        </tr> 
                    </thead> 
                    <tbody>
                        <tr> 
                            <td>#423</td>
                            <td>Bún đậu mắm tôm</td>
                            <td>Combo hai người</td>
                            <td class="text-right">60.000</td>
                            <td class="text-center">3</td>
                            <td class="text-right">180.000</td>
                            <td>-</td>
                            <td></td>
                        </tr> 
                        <tr> 
                            <td>#231</td>
                            <td>Bánh tráng trộn</td>
                            <td>Phần lớn</td>
                            <td class="text-right">35.000</td>
                            <td class="text-center">2</td>
                            <td class="text-right">70.000</td>
                            <td>-</td>
                            <td></td>
                        </tr> 
                        <tr> 
                            <td>#290</td>
                            <td>Gỏi cuốn</td>
                            <td>-</td>
                            <td class="text-right">8.000</td>
                            <td class="text-center">5</td>
                            <td class="text-right">40.000</td>
                            <td>-</td>
                            <td></td>
                        </tr> 
                        <tr> 
                            <td>#022</td>
                            <td>Trà tắc</td>
                            <td>Size L</td>
                            <td class="text-right">30.000</td>
                            <td class="text-center">5</td>
                            <td class="text-right">150.000</td>
                            <td>-</td>
                            <td></td>
                        </tr> 
                    </tbody>
                    <tfoot  class="text-right">
                        <tr>
                            <th colspan="3"></th>
                            <th colspan="2">Tổng tiền hàng: </th>
                            <th>440.000</th>
                        </tr>
                        <tr>
                            <th colspan="3"></th>
                            <th colspan="2">Phí vận chuyển: </th>
                            <th>30.000</th>
                        </tr>
                        <tr>
                            <th colspan="3"></th>
                            <th colspan="2">Tổng tiền: </th>
                            <th>470.000</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection


{{--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết đơn hàng #2355</title>
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/dashboard.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Latin:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="ckeditor/ckeditor.js"></script>
    <script src="../js/script.js"></script>
    <link rel="icon" type="image/jpg" href="../images/logo/favicon.png">
</head>
<body>
    <div class="container-fluid dashboard">
        <div class="d-flex align-items-start">
            <div class="col-md-2 div-menu">
                <ul class="left-sidebar">
                    <li>
                        <a href="tong-quan.html">Tổng quan</a>
                    </li>
                    <li>
                        <a href="quan-ly-don-hang.html">Quản lý đơn hàng</a>
                    </li>
                    <li>
                        <a href="quan-ly-tin-tuc.html">Quản lý bài viết</a>
                    </li>
                    <li>
                        <a href="quan-ly-tai-khoan.html">Quản lý tài khoản</a>
                    </li>
                    <li>
                        <a href="quan-ly-danh-muc.html">Quản lý danh mục</a>
                    </li>
                    <li>
                        <a href="quan-ly-lien-he.html">Quản lý liên hệ</a>
                    </li>
                    <li>
                        <a href="danh-sach-mon-an.html">Danh sách món ăn</a>
                    </li>
                </ul>
                <ul class="left-sidebar">
                    <li>
                        <a href="../index.html">Trở về trang chủ</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <div class="right-sidebar order-detail">
                    <h3 class="title-category mb-40" style="display: inline;">CHI TIẾT ĐƠN HÀNG #2355</h3>
                    <button style="display: inline;" class="icon-pencil"></button>
                    <div>
                        <table class="table table-hover table-condensed">
                            <tr>
                                <td style="width:50%">Tình trạng: <h5>Chờ xác nhận</h5></td>
                                <td style="width:50%">Ngày đặt: <h5>10:36:55 29/02/2022</h5></td>
                            </tr>
                            <tr>
                                <td>Người đặt: <h5>Tôn Văn Hiệp</h5></td>
                                <td>Số điện thoại: <h5><a href="tel:0363038485">036.303.8485</a></h5></td>
                            </tr>
                            <tr>
                                <td>Địa chỉ: <h5>125A, DHJEX, DFJEDN, TP.FJFJ</h5></td>
                                <td>Email: <h5><a href="mailto:tonvanhiepdragon@gmail.com">tonvanhiepdragon@gmail.com</a></h5></td>
                            </tr>
                            <tr>
                                <td colspan="2">Ghi chú đơn hàng: <h5>Giao hàng sớm; gọi trước khi giao 10p</h5></td>
                            </tr>
                        </table>
                        <hr>
                        <div class="info-cart">
                            <h4>Thông tin đặt hàng</h4>
                            <table class="table table-hover table-condensed"> 
                                <thead> 
                                    <tr> 
                                        <th style="width:10%" class="text-center">ID</th> 
                                        <th style="width:20%" class="text-center">Tên món ăn</th>
                                        <th style="width:15%" class="text-center">Phân loại</th> 
                                        <th style="width:10%" class="text-center">Đơn giá</th> 
                                        <th style="width:10%" class="text-center">Số lượng</th> 
                                        <th style="width:12%" class="text-center">Thành tiền</th> 
                                        <th style="width:17%" class="text-center">Ghi chú</th> 
                                        <th style="width:5%"></th> 
                                    </tr> 
                                </thead> 
                                <tbody>
                                    <tr> 
                                        <td>#423</td>
                                        <td>Bún đậu mắm tôm</td>
                                        <td>Combo hai người</td>
                                        <td class="text-right">60.000</td>
                                        <td class="text-center">3</td>
                                        <td class="text-right">180.000</td>
                                        <td>-</td>
                                        <td></td>
                                    </tr> 
                                    <tr> 
                                        <td>#231</td>
                                        <td>Bánh tráng trộn</td>
                                        <td>Phần lớn</td>
                                        <td class="text-right">35.000</td>
                                        <td class="text-center">2</td>
                                        <td class="text-right">70.000</td>
                                        <td>-</td>
                                        <td></td>
                                    </tr> 
                                    <tr> 
                                        <td>#290</td>
                                        <td>Gỏi cuốn</td>
                                        <td>-</td>
                                        <td class="text-right">8.000</td>
                                        <td class="text-center">5</td>
                                        <td class="text-right">40.000</td>
                                        <td>-</td>
                                        <td></td>
                                    </tr> 
                                    <tr> 
                                        <td>#022</td>
                                        <td>Trà tắc</td>
                                        <td>Size L</td>
                                        <td class="text-right">30.000</td>
                                        <td class="text-center">5</td>
                                        <td class="text-right">150.000</td>
                                        <td>-</td>
                                        <td></td>
                                    </tr> 
                                </tbody>
                                <tfoot  class="text-right">
                                    <tr>
                                        <th colspan="3"></th>
                                        <th colspan="2">Tổng tiền hàng: </th>
                                        <th>440.000</th>
                                    </tr>
                                    <tr>
                                        <th colspan="3"></th>
                                        <th colspan="2">Phí vận chuyển: </th>
                                        <th>30.000</th>
                                    </tr>
                                    <tr>
                                        <th colspan="3"></th>
                                        <th colspan="2">Tổng tiền: </th>
                                        <th>470.000</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        CKEDITOR.replace('content');
    </script>
</body>
</html>    
--}}