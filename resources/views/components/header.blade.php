<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <a href="/"><img class="logo" src="{{asset('assets/images/logo/favicon.png')}}" /></a>
            </div>
            <div class="col-lg-8  center-header">
                <ul class="navigation">
                    <li class="nav-item"><a href="{{route('trangchu')}}">Trang chủ</a></li>
                    <li class="nav-item"><a href="{{route('monan')}}">Món ăn</a></li>
                    <li class="nav-item"><a href="{{route('tintuc')}}">Tin tức</a></li>
                    <li class="nav-item"><a href="{{route('lienhe')}}">Liên hệ</a></li>

                    @if (session('loaitaikhoan') != null)
                        @if (session('loaitaikhoan') == 'client')
                            <li class="nav-item">
                                <a href="{{route('dangnhap')}}">Tài khoản</a>
                                <ul class="dropdown_menu">
                                    <li> <a href="">QLTK</a> </li>
                                    <li> <a href="{{route('dangxuat')}}">ĐX</a> </li>
                                </ul>
                            </li>
                        @endif
                        @if (session('loaitaikhoan') == 'admin')
                            <li class="nav-item">
                                <a href="{{route('admin.tongquan.index')}}">Quản lý</a>
                                <ul class="dropdown_menu">
                                    <li> <a href="{{route('dangxuat')}}">ĐX</a> </li>
                                </ul>
                            </li>
                        @endif
                    @else
                        <li class="nav-item"><a href="{{route('dangnhap')}}">Đăng nhập</a></li>
                        <li class="nav-item"><a href="{{route('dangki')}}">Đăng kí</a></li>
                    @endif
                </ul>
                <div class="search-box">
                    <form class="search-inner" method="get" action="{{route('timkiem')}}">
                        <input class="form-control" name="keyword" value="" />
                        <button class="icon-search"></button>
                    </form>
                </div>
            </div>
            <div class="col-lg-2 right-header">
                <div class="cart">
                    <div class="total-items">9</div>
                </div>
                <a class="a-cart" href="{{route('giohang')}}">Giỏ hàng</a>                
            </div>
        </div>
    </div>
</header>