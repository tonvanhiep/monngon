@extends('client.layout-client')

@section('title')
    Giỏ hàng
@endsection


@section('css')
  <style>
    .is-form {
      overflow:hidden;
      position:relative;
      background-color:#f9f9f9;
      height:2.2rem;
      width:1.9rem;
      padding:0;
      text-shadow:1px 1px 1px #fff;
      border:1px solid #ddd;
    }
    .is-form:focus,.input-text:focus {
      outline:none;
    }
    .is-form.minus {
      border-radius:4px 0 0 4px;
    }
    .is-form.plus {
      border-radius:0 4px 4px 0;
    }
    .input-qty {
      background-color:#fff;
      height:2.2rem;
      text-align:center;
      font-size:1rem;
      display:inline-block;
      vertical-align:top;
      margin:0;
      border-top:1px solid #ddd;
      border-bottom:1px solid #ddd;
      border-left:0;
      border-right:0;
      padding:0;
    }
    .input-qty::-webkit-outer-spin-button,.input-qty::-webkit-inner-spin-button {
      -webkit-appearance:none;
      margin:0;
    }

    .item > h2{
      display: inline;
    }
    .item {
      margin-top: 30px;
    }
    .item > p {
      display: inline;
      margin-right: 30px;
      vertical-align: bottom;
    }

    .inp-sl{
      width: 35px;
    }
    .inp-gm, .inp-tg {
        width: 25px;
    }
  </style>
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
                        <tbody id="ht-gio-hang"></tbody>
                        <tfoot> 
                            <tr class="visible-xs"> 
                                <td colspan="3" class="hidden-xs"> </td>
                                <td class="text-center">
                                    <strong>Tổng tiền:</strong>
                                </td>
                                <td class="text-center">
                                    <strong id="tong-tien">0 đ</strong>
                                </td>
                            </tr>
                        </tfoot> 
                    </table>
                    <div class="option-cart">
                        <a href="{{route('trangchu')}}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>

                        <a href="{{route('thanhtoan')}}" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection



@section('js')
    <script src="{{asset('assets/js/giohang.js')}}"></script>
@endsection