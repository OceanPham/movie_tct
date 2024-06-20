@extends('layouts.customer')

@section('main')
<div class="seating-chart">
    <nav class="nav-ticket">
        <p class="p-ticket"> <a class="a-ticket" href="{{ route('movie.index') }}">Trang chủ</a> > <a class="a-ticket" href="{{ route('showtime') }}">Lịch chiếu</a> > <a class="a-ticket" href="#">Đặt vé Online</a> </p>
    </nav>
    <div class="monitor">
        <div class="span-monitor"></div>
        <p class="p-monitor">MÀN HÌNH</p>
    </div>
    <div class="seating-rows">
        <div class="row">
            <div class="seat available">A1</div>
            <div class="seat available">A2</div>
            <div class="seat available">A3</div>
            <div class="seat available">A4</div>
            <div class="seat available">A5</div>
            <div class="seat available">A6</div>
            <div class="seat available">A7</div>
            <div class="seat available">A8</div>
            <div class="seat available">A9</div>
            <div class="seat available">A10</div>
            <div class="seat available">A11</div>
            <div class="seat available">A12</div>
            <div class="seat available">A13</div>
        </div>
        <div class="row">
            <div class="seat available">B1</div>
            <div class="seat available">B2</div>
            <div class="seat available">B3</div>
            <div class="seat available">B4</div>
            <div class="seat available">B5</div>
            <div class="seat available">B6</div>
            <div class="seat available">B7</div>
            <div class="seat available">B8</div>
            <div class="seat available">B9</div>
            <div class="seat available">B10</div>
            <div class="seat available">B11</div>
            <div class="seat available">B12</div>
            <div class="seat available">B13</div>
        </div>
        <div class="row">
            <div class="seat available">C1</div>
            <div class="seat available">C2</div>
            <div class="seat available">C3</div>
            <div class="seat available">C4</div>
            <div class="seat available">C5</div>
            <div class="seat available">C6</div>
            <div class="seat available">C7</div>
            <div class="seat available">C8</div>
            <div class="seat available">C9</div>
            <div class="seat available">C10</div>
            <div class="seat available">C11</div>
            <div class="seat available">C12</div>
            <div class="seat available">C13</div>
        </div>
        <div class="row">
            <div class="seat available">D1</div>
            <div class="seat available">D2</div>
            <div class="seat available">D3</div>
            <div class="seat available">D4</div>
            <div class="seat available">D5</div>
            <div class="seat available">D6</div>
            <div class="seat available selected" id="selectedSeat">D7</div>
            <div class="seat available">D8</div>
            <div class="seat available">D9</div>
            <div class="seat available">D10</div>
            <div class="seat available">D11</div>
            <div class="seat available">D12</div>
            <div class="seat available">D13</div>
        </div>
        <div class="row">
            <div class="seat available">E1</div>
            <div class="seat available">E2</div>
            <div class="seat available">E3</div>
            <div class="seat available">E4</div>
            <div class="seat available">E5</div>
            <div class="seat available">E6</div>
            <div class="seat available">E7</div>
            <div class="seat available">E8</div>
            <div class="seat available">E9</div>
            <div class="seat available">E10</div>
            <div class="seat available">E11</div>
            <div class="seat available">E12</div>
            <div class="seat available">E13</div>
        </div>
        <div class="row">
            <div class="seat available">F1</div>
            <div class="seat available">F2</div>
            <div class="seat available">F3</div>
            <div class="seat available">F4</div>
            <div class="seat available">F5</div>
            <div class="seat available">F6</div>
            <div class="seat available">F7</div>
            <div class="seat available">F8</div>
            <div class="seat available">F9</div>
            <div class="seat available">F10</div>
            <div class="seat available">F11</div>
            <div class="seat available">F12</div>
            <div class="seat available">F13</div>
        </div>
        <div class="row">
            <div class="seat available">G1</div>
            <div class="seat done-seat"></div>
            <div class="seat done-seat"></div>
            <div class="seat done-seat"></div>
            <div class="seat available">G5</div>
            <div class="seat available">G6</div>
            <div class="seat available">G7</div>
            <div class="seat available">G8</div>
            <div class="seat available">G9</div>
            <div class="seat available">G10</div>
            <div class="seat available">G11</div>
            <div class="seat available">G12</div>
            <div class="seat available">G13</div>
        </div>
        <div class="row">
            <div class="seat available">H1</div>
            <div class="seat available">H2</div>
            <div class="seat available">H3</div>
            <div class="seat available">H4</div>
            <div class="seat available">H5</div>
            <div class="seat available">H6</div>
            <div class="seat available">H7</div>
            <div class="seat available">H8</div>
            <div class="seat available">H9</div>
            <div class="seat available">H10</div>
            <div class="seat available">H11</div>
            <div class="seat available">H12</div>
            <div class="seat available">H13</div>
        </div>
        <!-- Các hàng chỗ ngồi bổ sung -->
    </div>
    <div class="explane-seat">
        <div style="display: flex;">
            <div class="a-seat"></div>
            <p style="margin: auto 0; margin-left: 10px;">Ghế bạn chọn</p>
        </div>
        <div style="display: flex;">
            <div class="b-seat"></div>
            <p style="margin: auto 0; margin-left: 10px;">Ghế rỗng</p>
        </div>
        <div style="display: flex;">
            <div class="c-seat"></div>
            <p style="margin: auto 0; margin-left: 10px;">Ghế đã đặt</p>
        </div>
    </div>
    <div class="movie-info">
        <div style="display: flex;">
            <div class="circle-button" id="backButton">
                <button class="arrow-left"></button>
            </div>
            <img src="image/doraemon.png" alt="Ảnh bìa phim Doraemon">
            <div class="movie-details">
                <h3>Doraemon: Nobita và Bản Giao Hưởng Địa Cầu</h3>
                <p class="showtime">18:30 - 20:25 - Thứ 2, 03/06 - Phòng chiếu Cinema 6</p>
                <div class="d-flex price">
                    <p>Tạm tính: </p>
                    <p id="p-price" style="margin-left: 5px; font-weight: 700;"> 0đ </p>
                </div>
            </div>
        </div>
        <div id="circleButtonContainer" class="circle-button" style="display: none;" onclick="window.location.href = 'food';">
            <div class="arrow-right"></div>
        </div>
    </div>
</div>

<div class="overlay" id="overlay"></div>
<!-- Modal cho xác nhận hủy giao dịch -->
<div class="modal" id="backModal">
    <div class="modal-content" id="Cuong-modal-content2">
        <div class="header-modal">
            <h4 class="Cuong-h4">Xác nhận</h4>
            <i class="fa-regular fa-circle-xmark" id="closeBackModal"></i>
        </div>
        
        <div class="content d-flex align-items-center">
            <i class="bi bi-question-circle-fill"></i>
            <!-- <i class="fa-solid fa-circle-question"></i> -->

            <p class="Cuong-p-xacnhan">Bạn xác nhận hủy phiên đặt vé ?</p>
        </div>
        
        <div class="modal-buttons">
            <button id="cancelBackBtn">Hủy</button>
            <button id="confirmBackBtn">Xác nhận</button>
            <button id="closeBackBtn">Đóng</button>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const seat = document.getElementById('selectedSeat'); // Lấy phần tử seat bằng ID
        var checkD7 = false;
        seat.addEventListener('click', function() {
            checkD7 = !checkD7;
            if (checkD7) {
                document.getElementById("selectedSeat").style.backgroundColor = '#E53282';  // Toggle lớp 'clicked' khi click vào phần tử
                document.getElementById("selectedSeat").style.color = '#fff';  // Toggle lớp 'clicked' khi click vào phần tử
                circleButtonContainer.style.display = 'flex'; // Hiển thị nút mũi tên phải
                document.getElementById("p-price").textContent = '45,000đ';
            } else {
                document.getElementById("selectedSeat").style.backgroundColor = '#E6E5E5';  // Toggle lớp 'clicked' khi click vào phần tử
                document.getElementById("selectedSeat").style.color = '#343434';  // Toggle lớp 'clicked' khi click vào phần tử
                circleButtonContainer.style.display = 'none'; // Ẩn nút mũi tên phải
                document.getElementById("p-price").textContent = '0đ';
            }
        });
    });

    // Gọi hàm kiểm tra khi trang được tải
</script>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const backButton = document.getElementById('backButton'); // Lấy phần tử nút quay lại đúng

        backButton.addEventListener('click', (event) => {
            event.preventDefault(); // Ngăn chặn hành vi mặc định của liên kết
            showOverlay();
            showBackModal();
        });

        //bật tắt mờ
        function showOverlay() {
            overlay.style.display = 'block';
        }

        function hideOverlay() {
            overlay.style.display = 'none';
        }

        //bật tắt hộp thoại xác nhận hủy
        function showBackModal() {
            backModal.style.display = 'block';
        }

        function hideBackModal() {
            backModal.style.display = 'none';
        }


        // xử lý nút hộp thoại hủy
        document.getElementById('confirmBackBtn').addEventListener('click', () => {
            // Xử lý khi người dùng xác nhận quay lại
            window.location.href = 'showtime';
        });

        document.getElementById('cancelBackBtn').addEventListener('click', () => {
            hideBackModal();
            hideOverlay();
        });

        document.getElementById('closeBackBtn').addEventListener('click', () => {
            hideBackModal();
            hideOverlay();
        });

        document.getElementById('closeBackModal').addEventListener('click', () => {
            hideBackModal();
            hideOverlay();
        });
    });
</script>
@endsection


