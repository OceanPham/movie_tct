@extends('layouts.customer')

@section('main')
<nav class="nav-pay">
    <p class="p-pay"> <a class="a-pay" href="{{ route('movie.index') }}">Trang chủ</a> > <a class="a-pay" href="#">Lịch chiếu</a> > <a class="a-pay" href="#">Đặt vé Online</a> > <a class="a-pay" href="{{ route('rule.index') }}">Thanh toán</a> </p>
</nav>
<div class="paymentmethod_container container">
    <div class="row vnpay_row1">
        <a id="backButton" class="paymentmethod_icon_back cardinformation_icon_back col-md-3 d-flex align-items-center" href="{{ route('paymentmethod.index') }}">
            <img src="{{ asset('image/back.png') }}" alt="Back" class="mr-2">
            Quay lại
        </a>
        <div class="col-md-7"></div> 
    </div>

    <div class="wrapper">
        <img src="{{ asset('image/congtt.jpg') }}" alt="CongTT" class="top-image">
        <div class="line-separator"></div>
        <div class="row information_cardd justify-content-center">
            <div class="column col-4 box_left">
                <div class="box_information_ticket">
                    <h4 class="text-uppercase text-center">Thông tin đơn hàng</h4>
                    <div class="line"></div>
                    <p class="p1">Mã đơn hàng :</p>
                    <p class="p2">DH01</p>
                    <p class="p3">Số tiền thanh toán :</p>
                    <p class="p4">340,000 VND</p>
                    <p class="p5">Đơn vị chấp nhận thanh toán :</p>
                    <p class="p6">Rạp chiếu phim TCT</p>
                </div>
            </div>
            <div class="column col-4 box_right d-flex flex-column align-items-center justify-content-center">
                <h4 class="text-center mb-4">Quét mã qua ứng dụng ngân hàng / ví điện tử</h4>
                <img src="{{ asset('image/qr-code.png') }}" alt="QR Code">
            </div>         
        </div>
    </div>
</div>
@endsection
