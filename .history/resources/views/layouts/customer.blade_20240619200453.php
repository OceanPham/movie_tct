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
    <title>TCT Cinema - Biểu đồ chỗ ngồi và thông tin phim</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Aclonica:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Alfa Slab One:wght@400&display=swap" />
    <link href="{{ asset('asset/css/layout.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/css/main.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/css/rule.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/css/paymentmethod.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/css/cardinformation.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/css/bank.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/css/global.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/css/dialog.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/css/media-screen.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/css/user-index.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('asset/css/seatOrder.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/food.css') }}">
    <link href="{{ asset('asset/css/vnpay.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/css/success.css') }}" rel="stylesheet" />
    @yield('link')
</head>


<body>
    <header>
        <div class="logo d-flex">
            <div class="img">
                <a href="{{route('movie.index')}}"><img class="logo-icon" alt="" src="./image/logo.png" /> </a>
            </div>
            <div class="descript d-flex flex-column justify-content-center align-items-center text-center">
                <div class="cinema">
                    <h1 class="tct-cinema">TCT Cinema</h1>
                </div>
                <div class="ni-tm-nhn">Nơi tầm nhìn không giới hạn</div>
            </div>

            <div class="d-flex nav-bar justify-content-center align-items-center text-center">
                <a class="nav-link" href="#">LICH CHIẾU<span class="sr-only">(current)</span></a>
                <a class="nav-link" href="">TIN TỨC</a>
                <a class="nav-link" href="">GIÁ VÉ<span class="sr-only">(current)</span></a>
            </div>


            <div class="s130">
                <form action="{{route('movie.index')}}" method="GET">
                    <div class="inner-form">
                        <div class="input-field first-wrap">
                            <input value="{{ isset($name_search) ? $name_search : '' }}" name="movie_search" id="search" type="text" placeholder="Tên phim" />
                        </div>
                        <div class="input-field second-wrap">
                            <button class="btn-search" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="admin ms-5">
                <img class="profile-icon" loading="lazy" alt="" src="./image/avt.png" />
                <div class="image-2"></div>
            </div>
        </div>
    </header>

    @yield('banner')

    @yield('main')


    <footer class="footer">
        <div class="footer_infor d-flex justify-content-between">
            <div class="chm-sc-khch-hng-parent">
                <h4 class="chm-sc-khch text-white">CHĂM SÓC KHÁCH HÀNG</h4>
                <div class="infor cham_soc_kh">
                    <p class="">Địa Chỉ: Tòa nhà 175 Tây Sơn, Đống Đa, Hà Nội</p>
                    <p class="">Hotline: 19002099</p>
                    <p class="">Email: cskh@tctcinema.vn</p>
                </div>
            </div>
            <div class="iu-khon-parent mx-4">
                <h4 class="iu-khon text-white">ĐIỀU KHOẢN</h4>
                <div class="infor">
                    <p class="dmca">DMCA</p>
                    <p class="privacy">Privacy</p>
                    <p class="term-of-service">Term of Service</p>
                </div>
            </div>
            <div class="kt-ni-vi-chng-ti-parent">
                <h4 class="text-white">KẾT NỐI VỚI CHÚNG TÔI</h4>
                <img class="image-contact-icon" loading="lazy" alt="" src="{{ asset('image/contact.png') }}" />
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('asset/js/app.js') }}"></script>
    <script>
        var myCarousel = document.getElementById('carouselExample');
        var carousel = new bootstrap.Carousel(myCarousel);
        setInterval(function() {
            carousel.next();
        }, 4000);

        document.addEventListener('DOMContentLoaded', (event) => {
            var btnCancel = document.getElementById('btn_cancel');
            var iconCancel = document.getElementById('vectorIcon');
            var overlay = document.getElementById('overlay');
            var notification = document.getElementById('notification');

            function hideDialog() {
                notification.classList.add('hidden');
                overlay.classList.add('hidden-overlay');
            }

            function showDialog() {
                notification.classList.remove('hidden');
                overlay.classList.remove('hidden-overlay');
            }

            btnCancel.addEventListener('click', function() {
                hideDialog();
            });

            iconCancel.addEventListener('click', function() {
                hideDialog();
            });

            showDialog();
        });
    </script>
</body>

</html>