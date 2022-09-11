<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <a href="/"><img class="logo" src="{{asset('assets/images/logo/favicon.png')}}" /></a>
            </div>
            <div class="col-lg-8  center-header">
                <ul class="navigation">
                    <li class="nav-item"><a href="{{route('trangchu')}}">Trang chủ</a></li>
                    <li class="nav-item">
                        <a href="{{route('monan')}}">Món ăn</a>
                        <ul class="dropdown_menu" class="shadow-sm p-3 mb-5 bg-body rounded">
                            @isset($listdanhmuc)
                                @foreach ($listdanhmuc as $key=>$item)
                                    <li> <a href="{{route('danhmuc', [$listdanhmuc->slug])}}">{{$item->tendanhmuc}}</a> </li>
                                @endforeach
                            @endisset
                            <li> <a href="">Món ăn 1</a> </li>
                            <li> <a href="">Món ăn 2</a> </li>
                            <li> <a href="">Món ăn 3</a> </li>
                            <li> <a href="">Món ăn 4</a> </li>
                            <li> <a href="">Món ăn 5</a> </li>
                            <li> <a href="">Món ăn 6</a> </li>
                            <li> <a href="">Món ăn 7</a> </li>
                            <li> <a href="">Món ăn 8</a> </li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="{{route('tintuc')}}">Tin tức</a></li>
                    <li class="nav-item"><a href="{{route('lienhe')}}">Liên hệ</a></li>

                    @if (session('loaitaikhoan') != null)
                        @if (session('loaitaikhoan') == 'client')
                            <li class="nav-item">
                                <a href="{{route('taikhoan.dangnhap')}}">Tài khoản</a>
                                <ul class="dropdown_menu" class="shadow-sm p-3 mb-5 bg-body rounded">
                                    <li> <a href="">QLTK</a> </li>
                                    <li> <a href="{{route('taikhoan.dangxuat')}}">ĐX</a> </li>
                                </ul>
                            </li>
                        @endif
                        @if (session('loaitaikhoan') == 'admin')
                            <li class="nav-item">
                                <a href="{{route('admin.tongquan.index')}}">Quản lý</a>
                                <ul class="dropdown_menu">
                                    <li> <a href="{{route('taikhoan.dangxuat')}}">ĐX</a> </li>
                                </ul>
                            </li>
                        @endif
                    @else
                        <li class="nav-item"><a href="{{route('taikhoan.dangnhap')}}">Đăng nhập</a></li>
                        <li class="nav-item"><a href="{{route('taikhoan.dangki')}}">Đăng kí</a></li>
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