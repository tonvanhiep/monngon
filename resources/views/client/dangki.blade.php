<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí tài khoản | Ẩm thực 3 miền, món ăn Việt Nam - Bắc, Trung, Nam | Món ngon</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Latin:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">    

    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
    <link rel="icon" type="image/jpg" href="{{asset('assets/images/logo/favicon.png')}}">
</head>
<body>
    <main>
        <div class="login-wrapper">
            <div class="login-inner">
                <div class="title-login">Đăng kí tài khoản</div>
                <p class="text-red h4 text-center"></p>
                <form method="post" action="">
                    <div class="form-group">
                        <label for="username">Tên đăng nhập *</label>
                        <input id="username" class="form-control" name="username" required value="" />
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu *</label>
                        <input id="password" type="password" class="form-control" name="password" required value="" />
                    </div>
                    <div class="form-group">
                        <label for="re-password">Nhập lại mật khẩu *</label>
                        <input id="re-password" type="password" class="form-control" name="password" required value="" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input id="email" class="form-control" type="email" name="email" required value="" />
                    </div>
                    <div class="form-group">
                        <label for="phone">Số điện thoại *</label>
                        <input id="phone" class="form-control" name="phone" required value="" />
                    </div>
                    <div class="form-group text-center pt-3">
                        <button class="btn btn-outline-primary btn-block" type="submit" name="login">Đăng kí tài khoản</button>
                    </div>
                    <div class="text-center">
                        <a class="text-center" href="{{route('dangnhap')}}">Đăng nhập</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>