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
@endsection
