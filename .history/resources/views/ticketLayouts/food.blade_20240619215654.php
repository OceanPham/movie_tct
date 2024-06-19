@extends('layouts.customer')

@section('main')
<div class="seating-chart">
    <nav class="nav-ticket">
        <p class="p-ticket"> <a class="a-ticket" href="{{ route('movie.index') }}">Trang chủ</a> > <a class="a-ticket" href="#">Lịch chiếu</a> > <a class="a-ticket" href="#">Đặt vé Online</a> </p>
    </nav>
    <div class="food-div">
        <div class="food-combo">
            <img class="img-combo" src="image/family-combo.png">
            <div class="food-details">
                <p class="combo-title">COMBO GIA ĐÌNH</p>
                <p class="food-name">02 bắp ngọt lớn + <br>04 pepsi nhỏ + <br>01 khoai lắc phomai</p>
                <p class="combo-price">Giá: <b>250.000 VND</b></p>
                <div class="combo-count">
                    <div class="count combo-decrease" id="combo-decrease-current">-</div>
                    <div class="count-number" id="count-number-current">0</div>
                    <div class="count combo-increase" id="combo-increase-current">+</div>
                </div>
            </div>
        </div>
        <div class="food-combo">
            <img class="img-combo" src="image/mega-combo.png">
            <div class="food-details">
                <p class="combo-title">COMBO MEGA</p>
                <p class="food-name">01 bắp ngọt lớn + <br>02 pepsi nhỏ </p>
                <p class="combo-price">Giá: <b>250.000 VND</b></p>
                <div class="combo-count">
                    <div class="count combo-decrease">-</div>
                    <div class="count-number">0</div>
                    <div class="count combo-increase">+</div>
                </div>
            </div>
        </div>
        <div class="food-combo">
            <div class="img-combo">
                <img src="image/single-combo.png">
            </div>
            <div class="food-details">
                <p class="combo-title">COMBO LẺ</p>
                <p class="food-name">01 bắp ngọt lớn + <br>01 pepsi nhỏ </p>
                <p class="combo-price">Giá: <b>250.000 VND</b></p>
                <div class="combo-count">
                    <div class="count combo-decrease">-</div>
                    <div class="count-number">0</div>
                    <div class="count combo-increase">+</div>
                </div>
            </div>
        </div>
        <div class="food-combo">
            <img class="img-combo" src="image/sweet-combo.png">
            <div class="food-details">
                <p class="combo-title">COMBO BỎNG NGỌT</p>
                <p class="food-name">02 bắp ngọt lớn + <br>04 pepsi nhỏ + <br>01 khoai lắc phomai</p>
                <p class="combo-price">Giá: <b>250.000 VND</b></p>
                <div class="combo-count">
                    <div class="count combo-decrease">-</div>
                    <div class="count-number">0</div>
                    <div class="count combo-increase">+</div>
                </div>
            </div>
        </div>
    </div>
    <div class="movie-info">
        <div style="display: flex;">
            <div class="circle-button" onclick="window.location.href = 'seat';">
                <div class="arrow-left"></div>
            </div>
            <img src="image/doraemon.png" alt="Ảnh bìa phim Doraemon">
            <div class="movie-details">
                <h3>Doraemon: Nobita và Bản Giao Hưởng Địa Cầu</h3>
                <p class="showtime">18:30 - 20:25 - Thứ 2, 03/06 - Phòng chiếu Cinema 6</p>
                <div class="d-flex price">
                    <p>Tạm tính: </p>
                    <p id="p-price" style="margin-left: 5px; font-weight: 700;"> 45.000đ </p>
                </div>
            </div>
        </div>
        <div class="circle-button" id="confirmButton">
            <div class="arrow-right"></div>
        </div>
    </div>
</div>
<div class="overlay" id="overlay"></div>
<!-- Modal cho xác nhận vé trước thanh toán-->
<div class="modal" id="confirmModal">
    <div class="modal-content" id="modal-content-confirmTicket">
        <div id="header-modal-confirmTicket">
            <h4>Doraemon: Nobita và bản giao hưởng địa cầu</h4>
            <!-- <i class="fa-regular fa-circle-xmark" id="closeBackModal"></i> -->
            <button type="button" style="margin-top: -30px; " class="fs-4" data-bs-dismiss="modal" onclick="window.location.href = 'food';" id="closeModal-thuong">
            <i  class="fa-regular fa-circle-xmark" id="closeBackModal"></i>
            </button>
        </div>
        <div class="span-modal"></div>
        <div class="information">
            <div class="information-grid">
                <div>
                    <p class="infor-title-thuong">THỜI GIAN</p>
                    <p class="infor-auth">18:20 ~ 20:25</p>
                </div>
                <div>
                    <p class="infor-title-thuong">NGÀY CHIẾU</p>
                    <p class="infor-auth">Thứ 2, 03/06/2024</p>
                </div>
                <div>
                    <p class="infor-title-thuong">RẠP</p>
                    <p class="infor-auth">Rạp chiếu phim TCT</p>
                </div>
                <div>
                    <p class="infor-title-thuong">PHÒNG CHIẾU</p>
                    <p class="infor-auth">Phòng chiếu Cinema 6</p>
                </div>
            </div>
            <div class="infor-seat">
                <p class="infor-title-thuong">GHẾ</p>
            </div>
            <div class="inforr infor-seat">
                <p class="infor-auth">D7</p>
                <p class="infor-auth">45,000đ</p>
            </div>
            <div class="infor-combo">
                <p class="infor-title-thuong">COMBO</p>
            </div>
            <div class="inforr infor-combo">
                <p class="infor-auth">1x Combo Gia Đình</p>
                <p class="infor-auth">250,000đ</p>
            </div>

        <div class="span-modal"></div>
            <div class="infor-price">
                <div class="inforr infor-temp">
                    <p class="infor-auth">Tạm tính</p>
                    <p class="infor-auth">295,000đ</p>
                </div>
                <div class="inforr infor-pay">
                    <p class="infor-auth">Thành tiền</p>
                    <p class="infor-auth">295,000đ</p>
                </div>
            </div>
        </div>
        <button type="button" id="btn_toPay">Tiến hành thanh toán</button>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btnIn = document.getElementById('combo-increase-current'); 
        const btnDe = document.getElementById('combo-decrease-current'); 
        var i = 0;
        var price = 45;
        btnIn.addEventListener('click', function() {
            i++;
            price += 250;
            document.getElementById("combo-decrease-current").style.borderColor = '#D64284';  // Toggle lớp 'clicked' khi click vào phần tử
            document.getElementById("combo-decrease-current").style.color = '#D64284';  // Toggle lớp 'clicked' khi click vào phần tử
            document.getElementById("count-number-current").textContent = i;
            document.getElementById("p-price").textContent = price + '.000đ';
        });
        btnDe.addEventListener('click', function() {
            if(i>1){
                i--;
                price -= 250;
                document.getElementById("count-number-current").textContent = i;
                document.getElementById("p-price").textContent = price + '.000đ';
            }
            else if(i==1){
                i--;
                price -= 250;
                document.getElementById("combo-decrease-current").style.color = '#E7E5E5';  // Toggle lớp 'clicked' khi click vào phần tử
                document.getElementById("combo-decrease-current").style.borderColor = '#E7E5E5';  // Toggle lớp 'clicked' khi click vào phần tử
                document.getElementById("count-number-current").textContent = i;
                document.getElementById("p-price").textContent = price + '.000đ';
            }
        });
    });

    // Gọi hàm kiểm tra khi trang được tải
</script>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const confirmButton = document.getElementById('confirmButton'); 
        confirmButton.addEventListener('click', (event) => {
            event.preventDefault(); // Ngăn chặn hành vi mặc định của liên kết
            showOverlay();
            showConfirmModal();
        });

        //bật tắt mờ
        function showOverlay() {
            overlay.style.display = 'block';
        }

        function hideOverlay() {
            overlay.style.display = 'none';
        }

        //bật tắt hộp thoại xác nhận hủy
        function showConfirmModal() {
            confirmModal.style.display = 'block';
        }

        function hideConfirmModal() {
            confirmModal.style.display = 'none';
        }


        // xử lý nút hộp thoại hủy
        document.getElementById('btn_toPay').addEventListener('click', () => {
            // Xử lý khi người dùng xác nhận quay lại
            window.location.href = 'rule';
        });

        document.getElementById('closeModal').addEventListener('click', () => {
            hideConfirmModal();
            hideOverlay();
        });
    });
</script>
@endsection
