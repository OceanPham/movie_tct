<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showtime</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/ticketlayout.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            background-image: url(image/tc.png);
        }
    </style>
</head>

<body>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header mb-1">
                <h5 class="modal-title">LỊCH CHIẾU – Doraemon: Nobita và Bản Giao Hưởng Địa Cầu</h5>
                <a href="{{route('movie.index')}}">
                    <button type="button" style="padding-top: -15px; margin-right: -5px" class="fs-4" data-bs-dismiss="modal" onclick="window.location.href = '';" id="closeModal-thuong">
                        <i class="fa-regular fa-circle-xmark" id="closeBackModal"></i>
                    </button>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </a>
            </div>
            <span class="horizontal-line"></span>
            <div class="modal-body">
                <div class="scrolling-wrapper d-flex flex-nowrap">
                    <div class="date-btn current">
                        <button style="height: 50%" class="btn date-btn active current">03/06</button>
                        <p style="color: #ff4891" class="mt-1 text-center">Thứ 2</p>
                    </div>
                    <div class="date-btn">
                        <button style="height: 50%" class="btn date-btn active">04/06</button>
                        <p style="color: #ABAAAA" class="mt-1 text-center">Thứ 3</p>
                    </div>
                    <div class="date-btn">
                        <button style="height: 50%" class="btn date-btn active">05/06</button>
                        <p style="color: #ABAAAA" class="mt-1 text-center">Thứ 4</p>
                    </div>
                    <div class="date-btn">
                        <button style="height: 50%" class="btn date-btn active">06/06</button>
                        <p style="color: #ABAAAA" class="mt-1 text-center">Thứ 5</p>
                    </div>
                    <div class="date-btn">
                        <button style="height: 50%" class="btn date-btn active">07/06</button>
                        <p style="color: #ABAAAA" class="mt-1 text-center">Thứ 6</p>
                    </div>
                    <div class="date-btn">
                        <button style="height: 50%" class="btn date-btn active">08/06</button>
                        <p style="color: #ABAAAA" class="mt-1 text-center">Thứ 7</p>
                    </div>
                    <div class="date-btn">
                        <button style="height: 50%" class="btn date-btn active">09/06</button>
                        <p style="color: #ABAAAA" class="mt-1 text-center">Chủ nhật</p>
                    </div>
                    <div class="date-btn">
                        <button style="height: 50%" class="btn date-btn active">10/06</button>
                        <p style="color: #ABAAAA" class="mt-1 text-center">Thứ 2</p>
                    </div>
                    <div class="date-btn">
                        <button style="height: 50%" class="btn date-btn active">11/06</button>
                        <p style="color: #ABAAAA" class="mt-1 text-center">Thứ 3</p>
                    </div>
                    <div class="date-btn">
                        <button style="height: 50%" class="btn date-btn active">12/06</button>
                        <p style="color: #ABAAAA" class="mt-1 text-center">Thứ 4</p>
                    </div>
                    <div class="date-btn">
                        <button style="height: 50%" class="btn date-btn active">13/06</button>
                        <p style="color: #ABAAAA" class="mt-1 text-center">Thứ 5</p>
                    </div>
                </div>
                <span class="horizontal-line"></span>
                <div class="mt-4 d-flex flex-wrap">
                    <div class="time-btn">
                        <button style="padding: 5px 40px" class="btn time-btn active" onclick="window.location.href = 'seat';">08:30</button>
                        <p style="color: #ABAAAA" class="empty mt-1 text-center">90/92</p>
                    </div>
                    <div class="time-btn">
                        <button style="padding: 5px 40px" class="btn time-btn active" onclick="window.location.href = 'seat';">10:20</button>
                        <p style="color: #ABAAAA" class="mt-1 text-center">90/92</p>
                    </div>
                    <div class="time-btn">
                        <button style="padding: 5px 40px" class="btn time-btn active" onclick="window.location.href = 'seat';">11:30</button>
                        <p style="color: #ABAAAA" class="mt-1 text-center">90/92</p>
                    </div>
                    <div class="time-btn">
                        <button style="padding: 5px 40px" class="btn time-btn active" onclick="window.location.href = 'seat';">13:00</button>
                        <p style="color: #ABAAAA" class="mt-1 text-center">90/92</p>
                    </div>
                    <div class="time-btn">
                        <button style="padding: 5px 40px" class="btn time-btn active" onclick="window.location.href = 'seat';">14:05</button>
                        <p style="color: #ABAAAA" class="mt-1 text-center">90/92</p>
                    </div>
                    <div class="time-btn">
                        <button style="padding: 5px 40px" class="btn time-btn active" onclick="window.location.href = 'seat';">16:40</button>
                        <p style="color: #ABAAAA" class="mt-1 text-center">90/92</p>
                    </div>
                    <div class="time-btn">
                        <button style="padding: 5px 40px" class="btn time-btn active" onclick="window.location.href = 'seat';">18:50</button>
                        <p style="color: #ABAAAA" class="mt-1 text-center">90/92</p>
                    </div>
                    <div class="time-btn">
                        <button style="padding: 5px 40px" class="btn time-btn active" onclick="window.location.href = 'seat';">20:35</button>
                        <p style="color: #ABAAAA" class="mt-1 text-center">90/92</p>
                    </div>
                    <div class="time-btn">
                        <button style="padding: 5px 40px" class="btn time-btn active" onclick="window.location.href = 'seat';">21:50</button>
                        <p style="color: #ABAAAA" class="mt-1 text-center">90/92</p>
                    </div>
                    <div class="time-btn">
                        <button style="padding: 5px 40px" class="btn time-btn active" onclick="window.location.href = 'seat';">22:10</button>
                        <p style="color: #ABAAAA" class="mt-1 text-center">90/92</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>