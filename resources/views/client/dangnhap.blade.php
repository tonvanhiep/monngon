<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập | Ẩm thực 3 miền, món ăn Việt Nam - Bắc, Trung, Nam | Món ngon</title>
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
    <script src="{{asset('assets/js/md5.js')}}"></script>
    <link rel="icon" type="image/jpg" href="{{asset('assets/images/logo/favicon.png')}}">
</head>
<body>
    <main>
        <div class="login-wrapper">
            <div class="login-inner">
                <div class="title-login">Đăng nhập</div>
                <p class="text-red h4 text-center"></p>
                <form method="post" action="" id="form-login">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input id="email" class="form-control" type="email" name="email" required value="" />
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu *</label>
                        <input id="password" type="password" class="form-control" name="password" required value="" />
                    </div>
                    <div class="form-group text-center pt-3">
                        <button class="btn btn-outline-primary btn-block" type="submit" name="login">Đăng nhập</button>
                    </div>

                    @php
                        if(session('message')) {
                            echo "<div class=\"alert alert-success text-center\" id=\"alert-cart-sucess\">
                                    <strong>".session('message')."</strong>
                                </div>";
                        }
                    @endphp
                    
                    <div class="text-center">
                        Bạn chưa có tài khoản? <a class="text-center" href="{{route('taikhoan.dangki')}}">Đăng kí</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script>
        let pass = document.getElementById('password');
        document.getElementById('form-login').onsubmit = function() {
            pass.value = md5(pass.value);
        }
    </script>
</body>
</html>