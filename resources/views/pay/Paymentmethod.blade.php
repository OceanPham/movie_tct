@extends('layouts.customer')

@section('main')
<nav class="nav-pay">
    <p class="p-pay"> <a class="a-pay" href="{{ route('movie.index') }}">Trang chủ</a> > <a class="a-pay" href="#">Lịch chiếu</a> > <a class="a-pay" href="#">Đặt vé Online</a> > <a class="a-pay" href="#">Thanh toán</a> </p>
</nav>
<div class="paymentmethod_container container">
    <div class="row">
    <a class="paymentmethod_icon_back col-md-3 d-flex align-items-center" href="{{ route('rule.index') }}">
        <img src="{{ asset('image/back.png') }}" alt="Back" class="mr-2">
        Quay lại
    </a>
    </div>
    
</div>

    
    <div class="paymentmethod_box_card row justify-content-center">
        <div class="card col-md-5">
            <h5 class="row justify-content-center" >CHỌN HÌNH THỨC THANH TOÁN</h5>
                <div class="paymentmethod-box-content row justify-content-center">
                    <button class="col-md-7 d-flex align-items-center "  onclick="window.location.href = 'bank';">
                        <img class="paymentmethod_img_atm" src="{{ asset('image/ATM.png') }}" alt=""> Thẻ nội địa
                    </button>
                    <button class="col-md-7 d-flex align-items-center" onclick="window.location.href = 'vnpay';">
                        <img class="paymentmethod_img_vnpay" src="{{ asset('image/VNPAY.png') }}" alt=""> VNPAY
                    </button>
                </div>
        </div>
    </div> 
     
   </div>

</div>
@endsection
