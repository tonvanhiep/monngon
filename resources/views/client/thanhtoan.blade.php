@extends('client.layout-client')

@section('title')
    Thanh toán
@endsection

@section('main')
    <main>
        @php
            $titlebanner = 'Thanh toán';
            $subtitlebanner = 'Vui lòng kiểm tra lại thông tin Khách hàng, thông tin Giỏ hàng trước khi Đặt hàng.';
        @endphp
        @include('components.banner')

        <div class="list-products-home mb-40">
            <div class="container mt-4">
                <form class="needs-validation" name="frmthanhtoan" method="post" action="" id="form-info">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 order-md-2 mb-4">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-muted">Giỏ hàng</span>
                                <span class="badge badge-secondary badge-pill" id="so-sp">0</span>
                            </h4>
                            <ul class="list-group mb-3" id="ct-dh">

                                <li class="list-group-item d-flex justify-content-between">
                                    <div>
                                        
                                        <span>Phí giao hàng</span>
                                        <br>
                                        <small class="text-muted">(Tạm tính)</small>
                                    </div>
                                    <span id="phi-ship">30000</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <strong>Tổng thành tiền</strong>
                                    <span id="thanh-tien">1</span>
                                </li>
                            </ul>


                            <div class="input-group">
                                <input type="text" class="form-control" name="ma_khuyen_mai" placeholder="Mã khuyến mãi" id="ma-khuyen-mai">
                                <div class="input-group-append">
                                    <button onclick="ktrakhuyenmai()" class="btn btn-secondary">Xác nhận</button>
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
                                <div class="col-md-12">
                                    <label for="kh_ghichu">Ghi chú</label>
                                    <textarea class="form-control" name="kh_ghichu" id="kh_ghichu"></textarea>
                                </div>
                            </div>

                            <h4 class="mb-3">Hình thức thanh toán</h4>

                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="httt-1" name="httt" type="radio" class="custom-control-input" checked required=""
                                        value="1">
                                    <label class="custom-control-label" for="httt-1">Thanh toán bằng tiền mặt</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="httt-2" name="httt" type="radio" class="custom-control-input" required=""
                                        value="2">
                                    <label class="custom-control-label" for="httt-2">Chuyển khoản ngân hàng</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="httt-3" name="httt" type="radio" class="custom-control-input" required=""
                                        value="3">
                                    <label class="custom-control-label" for="httt-3">Thanh toán qua MoMo</label>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <button class="btn btn-success btn-lg btn-block" type="submit">Đặt hàng</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>

    </main>
@endsection



@section('js')


    <script>
        let ctdh = document.getElementById('ct-dh');
        let phi_ship = document.getElementById('phi-ship');
        let thanh_tien = document.getElementById('thanh-tien');
        let so_sp_gh = document.getElementById('so-sp');
        let arr_giohang = new Array();
        let ht = '';
        let _phi_ship = parseInt(phi_ship.textContent);
        let _thanh_tien = 0;

        function ktrakhuyenmai() {
            alert("ktra");  
        }
        function hienthidonmua() {
            let tong = 0;
            for (let index = 0; index < arr_giohang.length; index++) {
                ht +=   '<li class="list-group-item d-flex justify-content-between lh-condensed">' +
                            '<div>' +
                                '<h6 class="my-0">'+ arr_giohang[index][2] +' (x'+ arr_giohang[index][5] +')</h6>' +
                                '<small class="text-muted">'+ arr_giohang[index][4] +'</small>' +
                            '</div>' +
                            '<span class="text-muted">'+ arr_giohang[index][7] +'</span>' +
                        '</li>';
                tong += arr_giohang[index][7];
            }
            ctdh.innerHTML = ht + ctdh.innerHTML;
            _thanh_tien = (parseInt(_phi_ship) + tong);
            document.getElementById("thanh-tien").innerHTML = _thanh_tien.toString() + '';
        }
        function luuvaocookie() {
            // "ct_donhang={sp_id}.{sp_tc}.{sp_sl}.{sp_gia}.{sp_tongtien}/..."
            let chitiet = '';
            for (let i = 0; i < arr_giohang.length; i++) {
                chitiet += arr_giohang[i][0].toString() + '.' + arr_giohang[i][3] + '.' + arr_giohang[i][5] + '.' + arr_giohang[i][6] + '.' + arr_giohang[i][7] + '/';
            }
            document.cookie = "ct_donhang=" + chitiet;
            document.cookie = "phi_ship=" + _phi_ship.toString();
            document.cookie = "tong_tien=" + _thanh_tien.toString();
        }

        window.onload = function khoitao() {
            if(localStorage.giohang == null) {
                localStorage.setItem('giohang', JSON.stringify(arr_giohang));
            }
            else arr_giohang = JSON.parse(localStorage.getItem('giohang'));
            so_sp_gh.textContent = arr_giohang.length;
            hienthidonmua();
        }

        document.getElementById('form-info').onsubmit = function() {
            //luu chi tiet gio hang vao cookie
            luuvaocookie();
        }
    </script>
@endsection