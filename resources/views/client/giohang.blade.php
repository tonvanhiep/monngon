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
