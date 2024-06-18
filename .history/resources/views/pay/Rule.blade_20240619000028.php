@extends('layouts.customer')

@section('main')
<nav class="nav-pay">
    <p class="p-pay"> <a class="a-pay" href="{{ route('movie.index') }}">Trang chủ</a> > <a class="a-pay" href="#">Lịch chiếu</a> > <a class="a-pay" href="#">Đặt vé Online</a> > <a class="a-pay" href="{{ route('rule.index') }}">Thanh toán</a> </p>
</nav>
<div class="container">
    <div class="rule_box_card row justify-content-center">
        <div class="card col-md-7">
            <div class="card-body ">
                <div class="box-content">
                    <h4 class="card-title text-center">ĐIỀU KHOẢN THANH TOÁN</h4>

                    <div class="terms-content">
                        <h5>I. Quy định về thanh toán</h5>
                        <p>Quý khách hàng có thể lựa chọn các hình thức thanh toán sau để thanh toán cho giao dịch đặt vé trên website của rạp phim TCT:</p>
                        <ol>
                            <li>Thẻ thanh toán nội địa</li>
                            <li>Thanh toán VNPay</li>
                        </ol>

                        <h5>II. Chi tiết các hình thức thanh toán</h5>
                        <ol>
                            <li>Thẻ nội địa: Để thanh toán bằng thẻ ngân hàng nội địa, thẻ của khách hàng phải được đăng ký sử dụng tính năng thanh toán trực tuyến, hoặc ngân hàng điện tử của ngân hàng. Giao dịch phải được ghi nhận thành công từ thông báo cấp phép thành công do hệ thống cổng thanh toán trả về.</li>
                            <li>Thanh toán VNPAY : Quý khách phải đang sử dụng dịch vụ cổng thanh toán VNPAY được cung cấp bởi Công ty cổ phần giải pháp thanh toán Việt Nam (VNPAY).</li>
                        </ol>

                    <h5>III. Trường hợp giao dịch không thành công</h5>
                    <p>Giao dịch thanh toán không thành công có thể do nhiều nguyên nhân. Bạn tham khảo các nguyên nhân sau:</p>
                    <ul class="custom-list">
                        <li>Chưa đăng ký chức năng thanh toán trên Internet với ngân hàng</li>
                        <li>Thẻ không đủ hạn mức/ số dư để thanh toán. Một số ngân hàng có quy định cả hạn mức chi tiêu theo ngày cho thẻ.</li>
                        <li>Nhập sai thông tin thẻ.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> 
     <div class=" rule-box-btn-1 row justify-content-center ">
        <div class="rule-box-btn-2 col-md-7">
            <button class="rule-btn-1 col-md-6 " onclick="window.location.href = 'paymentmethod';" >Đồng ý & tiếp tục</button>
            
            <button class="rule-btn-2 col-md-6 " onclick="window.location.href = 'food';">Không đồng ý</button>
        </div>
    </div>
   </div>


  
</div>
@endsection
