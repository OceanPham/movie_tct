@extends('layouts.customer')

@section('main')
<nav class="nav-pay">
    <p class="p-pay"> <a class="a-pay" href="{{ route('movie.index') }}">Trang chủ</a> > <a class="a-pay" href="#">Lịch chiếu</a> > <a class="a-pay" href="#">Đặt vé Online</a> > <a class="a-pay" href="{{ route('rule.index') }}">Thanh toán</a> </p>
</nav>
<div class="paymentmethod_container container">
    <div class="my-5 w-50 m-auto d-flex flex-column gap-4">
        <div class="text-center">
            <div class="">
            <img src="{{ asset('image/a.jpg') }}" alt="QR Code" class="tick">                
            </div>
            <h4 class="">Thanh toán thành công!</h4>
            <p class="thank">Cảm ơn bạn đã tin tưởng và lựa chọn dịch vụ của chúng tôi!</p>
        </div>
        <div class="border border-1 rounded wrap">
    <div class="row px-4">
        <div class="col-6 border-end py-3">
            <div class="py-2">
                <div class="d-flex flex-column gap-2"> <!-- Sử dụng gap-2 để tạo khoảng cách giữa các phần tử -->
                    <div class="row mb-3"> <!-- Added mb-3 class -->
                        <div class="col-4 custom-col-4">
                            <div class="font-bold">Tên phim</div>
                        </div>
                        <div class="col-8 custom-col-8">
                            <div class="font-bold">Doraemon: Nobita và Bản Giao Hưởng Địa Cầu</div>
                        </div>
                    </div>
                    <div class="row mb-3"> <!-- Added mb-3 class -->
                        <div class="col-4 custom-col-4">
                            <div class="font-bold">Thời gian</div>
                        </div>
                        <div class="col-8 custom-col-8">
                            <div class="font-bold">18:20 ~ 20:25</div>
                        </div>
                    </div>
                    <div class="row mb-3"> <!-- Added mb-3 class -->
                        <div class="col-4 custom-col-4">
                            <div class="font-bold">Ngày chiếu</div>
                        </div>
                        <div class="col-8 custom-col-8 font-bold">
                            Thứ 2, 03/06/2024
                        </div>
                    </div>
                    <div class="row mb-3"> <!-- Added mb-3 class -->
                        <div class="col-4 custom-col-4">
                            <div class="font-bold">Phòng chiếu</div>
                        </div>
                        <div class="col-8 custom-col-8">
                            <div class="font-bold">Phòng chiếu Cinema 6</div>
                        </div>
                    </div>
                    <div class="row mb-3"> <!-- Added mb-3 class -->
                        <div class="col-4 custom-col-4">
                            <div class="font-bold">Tên rạp</div>
                        </div>
                        <div class="col-8 custom-col-8">
                            <div class="font-bold">Rạp chiếu phim TCT</div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="py-2">
                <div class="row mb-3"> <!-- Added mb-3 class -->
                    <div class="col-4 custom-col-4">
                        <div class="font-bold">Ghế:</div>
                        <div class="font-bold" style ="color: black;">D7, D8</div>
                    </div>
                    <div class="col-8 custom-col-8 text-end">
                        <div class="font-bold">90,000đ</div>
                    </div>
                </div>
                <div class="row mb-3"> <!-- Added mb-3 class -->
                    <div class="col-4 custom-col-4">
                        <div class="font-bold">Bắp - Nước:</div>
                        <div class="font-bold" style ="color: black;">1x Combo lẻ</div>
                    </div>
                    <div class="col-8 custom-col-8 text-end">
                        <div class="font-bold">250,000đ</div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row mb-3"> <!-- Added mb-3 class -->
                <div class="col-4 custom-col-4">
                    <div class="font-bold">Thành tiền:</div>
                </div>
                <div class="col-8 custom-col-8 text-end">
                    <div class="font-bold">340,000đ</div>
                </div>
            </div>
        </div>
        <div class="col-6 d-flex flex-column align-items-center justify-content-center gap-2">
            <img src="{{ asset('image/qr.jpeg') }}" alt="QR Code" width="200">
            <div class="w-75 text-center">Mã QR được sử dụng để quét mã vé tại rạp</div>
        </div>
    </div>
</div>


    </div>
    <div class="d-flex justify-content-center quaylai">
    <button class="rounded-3 border-0" style="background-color: #E53282; padding: 20px !important; border-radius: 20px !important;">
        <a href="/" class="text-white" style="text-decoration: none; font-weight: bold !important;">Quay lại trang chủ</a>
    </button>
</div>

    </div>

@endsection
