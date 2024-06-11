<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, maximum-scale=1.0, initial-scale=1.0, shrink-to-fit=no, user-scalable=no" />

    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=no" />
    <base href="" />
    <meta name="google-site-verification" content="" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Aclonica:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Alfa Slab One:wght@400&display=swap" />
    <link href="{{ asset('asset/css/layout.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/css/media-screen.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/css/user-index.css') }}" rel="stylesheet" />
    @yield('link')
</head>

<body>
    <div class="container-fluid padding0">
        <!-- BEGIN: Header -->
        <header>
            <div class="logo d-flex">
                <div class="img">
                    <img class="logo-icon" alt="" src="./image/logo.png" />
                </div>
                <div class="descript d-flex flex-column justify-content-center align-items-center text-center">
                    <div class="cinema">
                        <h1 class="tct-cinema">TCT Cinema</h1>
                    </div>
                    <div class="ni-tm-nhn">Nơi tầm nhìn không giới hạn</div>
                </div>

                <div class="" style="width: 300px;">
                    <ul class="navbar-nav d-flex justify-content-between">
                        <li class="nav-item">
                            span
                            <a class="nav-link" href="#">LICH CHIẾU<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">TIN TỨC</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">GIÁ VÉ<span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>


                <div class="search-bar-wrapper">
                    <div class="search-bar">
                        <div class="tm-kim">
                            <div class="search-box"></div>
                            <input class="tn-phim1 tm-kim-child" placeholder="Tên phim" type="text" />
                            <div class="search-icon-box"></div>
                            <img class="search-icon" alt="" src="./image/search_icon.png" />
                        </div>

                    </div>
                </div>
                <div class="admin">
                    <img class="profile-icon" loading="lazy" alt="" src="./image/avt.png" />

                    <div class="image-2"></div>
                </div>
            </div>
            @yield('banner')
        </header>
        <!-- END: Header -->

        <div>
            @yield('main')
        </div>

        <footer>
            <footer>
                <div class="footer-container row">
                    <div class="col-6">
                        <div class="address">
                            <span> Rạp phim A cinema</span><br>
                            <span> Đại diện: Cù Việt Dũng</span><br>
                            <span> Địa chỉ: Tòa A45, 175 Tây Sơn, Đống Đa, Hà Nội</span><br>
                            <span> Số điện thoại: 0848686868</span><br>
                            <span> Email: CVZ@gmail.com</span><br>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="customer-care">
                            <strong> Chăm sóc khách hàng</strong><br>
                            <span> Hotline: 0848686868</span><br>
                            <span> Giờ làm việc: 08:00 - 23:59</span><br>
                            <span> (Tất cả các ngày trong tuần kể cả ngày Lễ Tết)</span><br>
                            <span> Email hỗ trợ: hoidap@GC.vn</span><br>
                        </div>
                    </div>
                </div>
            </footer>

        </footer>
        <!-- END: Footer -->


    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @yield('js')
</body>

</html>