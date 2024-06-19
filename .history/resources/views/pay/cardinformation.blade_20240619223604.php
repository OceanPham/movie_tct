@extends('layouts.customer')

@section('main')
<nav class="nav-pay">
    <p class="p-pay"> <a class="a-pay" href="{{ route('movie.index') }}">Trang chủ</a> > <a class="a-pay" href="#">Lịch chiếu</a> > <a class="a-pay" href="#">Đặt vé Online</a> > <a class="a-pay" href="{{ route('rule.index') }}">Thanh toán</a> </p>
</nav>
<div class="paymentmethod_container container">
    <div class="row carinformation_row1">
        <a id="backButton" class="paymentmethod_icon_back cardinformation_icon_back col-md-3 d-flex align-items-center" href="{{ route('bank.index') }}">
            <img src="{{ asset('image/back.png') }}" alt="Back" class="mr-2">
            Quay lại
        </a>
        <div class="col-md-7"></div>
        <img class="cardinformation_logo_bank col-md-2" src="{{ asset($bank['image']) }}" alt="{{ $bank['name'] }}">
    </div>

    <div class="row information_card justify-content-center">
        <div class="column col-4 box_left">
            <div class="box_information_ticket">
                <h4 class="text-uppercase text-center">Thông tin đơn hàng</h4>
                <div class="line"></div>
                <p class="p1">Mã đơn hàng :</p>
                <p class="p2">DH01</p>
                <p class="p3">Số tiền thanh toán :</p>
                <p class="p4">295,000 VND</p>
                <p class="p5">Đơn vị chấp nhận thanh toán :</p>
                <p class="p6">Rạp chiếu phim TCT</p>
            </div>
        </div>

        <div class="column col-6 box_right">
            <h4 class="text-uppercase text-center">Thanh toán qua ngân hàng {{ $bank['name'] }}</h4>
            <div class="line"></div>
            <form id="paymentForm">
                <div class="form-group g1">
                    <label for="number_card" class="form-label">Số thẻ :</label>
                    <div class="input-group">
                        <input type="text" id="number_card" name="number_card" class="form-control" placeholder="1234 5678 9876 4321">
                        <span class="input-group-text"><i class="bi bi-exclamation-circle"></i></span>
                    </div>
                    <p class="form-message" id="number_card_error"></p>
                </div>
                <div class="form-group g2">
                    <label for="account_name" class="form-label">Tên chủ thẻ :</label>
                    <div class="input-group">
                        <input type="text" id="account_name" name="account_name" class="form-control" placeholder="NGUYEN VAN A">
                        <span class="input-group-text"><i class="bi bi-exclamation-circle"></i></span>
                    </div>
                    <p class="form-message" id="account_name_error"></p>
                </div>
                <div class="form-group g3">
                    <label for="month_year" class="form-label">Tháng / năm phát hành :</label>
                    <div class="input-group">
                        <input type="text" id="month_year" name="month_year" class="form-control" placeholder="12/2023">
                        <span class="input-group-text"><i class="bi bi-exclamation-circle"></i></span>
                    </div>
                    <p class="form-message" id="month_year_error"></p>
                </div>
                <div class="box_submit text-center">
                    <button type="submit">Thanh toán</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="overlay" id="overlay"></div>

<!-- Modal cho xác nhận thanh toán -->
<div class="modal  " id="modal">
    <div class="modal-content" id="Cuong-modal-content1">
        <div class="header-modal ">
            <h4 class="Cuong-h4">Xác nhận</h4>
            <i id="xBtn" class="fa-regular fa-circle-xmark"></i>
        </div>

        <div class="content d-flex align-items-center">
            <i class="fa-regular fa-circle-xmark" id="closeBackModal"></i>
            <i class="bi bi-question-circle-fill"></i>
            <p class="Cuong-p-xacnhan">Bạn xác nhận thanh toán đặt vé ?</p>
        </div>

        <div class="modal-buttons">
            <button id="confirmBtn">Xác nhận</button>
            <button id="cancelBtn">Hủy</button>
            <button id="closeBtn">Đóng</button>
        </div>
    </div>
</div>

<!-- Modal cho xác nhận hủy giao dịch -->
<div class="modal" id="backModal">
    <div class="modal-content" id="Cuong-modal-content2">
        <div class="header-modal">
            <h4 class="Cuong-h4">Xác nhận</h4>
            <i class="fa-regular fa-circle-xmark" id="closeBackModal"></i>
        </div>

        <div class="content d-flex align-items-center">
            <i class="bi bi-question-circle-fill"></i>
            <p class="Cuong-p-xacnhan">Bạn xác nhận hủy bỏ phiên giao dịch này ?</p>
        </div>

        <div class="modal-buttons">
            <button id="cancelBackBtn">Hủy</button>
            <button id="confirmBackBtn">Xác nhận</button>
            <button id="closeBackBtn">Đóng</button>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const form = document.getElementById('paymentForm');

        form.addEventListener('submit', (event) => {
            event.preventDefault(); // Ngăn không cho form submit tự động
            validateForm();
        });

        backButton.addEventListener('click', (event) => {
            event.preventDefault(); // Ngăn không cho link điều hướng tự động
            showOverlay();
            showBackModal();
        });

        function validateForm() {
            clearErrors();

            let isValid = true;

            // Kiểm tra trường Số thẻ
            const numberCard = document.getElementById('number_card').value.trim();
            if (numberCard === '') {
                showError('number_card', 'Vui lòng nhập đầy đủ thông tin');
                isValid = false;
            } else if (!/^[0-9]{1,20}$/.test(numberCard)) {
                showError('number_card', 'Số thẻ không hợp lệ');
                isValid = false;
            }

            // Kiểm tra trường Tên chủ thẻ
            const accountName = document.getElementById('account_name').value.trim();
            if (accountName === '') {
                showError('account_name', 'Vui lòng nhập đầy đủ thông tin');
                isValid = false;
            } else if (/[^a-zA-Z\u00C0-\u1EF9\s]/.test(accountName)) {
                showError('account_name', 'Tên chủ thẻ không được chứa ký tự số hoặc ký tự đặc biệt');
                isValid = false;
            } else if (!isValidAccountNameFormat(accountName)) {
                showError('account_name', 'Tên chủ thẻ phải gồm các từ viết hoa không dấu');
                isValid = false;
            }

            // Kiểm tra trường Tháng / năm phát hành
            const monthYear = document.getElementById('month_year').value.trim();
            if (monthYear === '') {
                showError('month_year', 'Vui lòng nhập đầy đủ thông tin');
                isValid = false;
            } else if (!isValidMonthYearFormat(monthYear)) {
                showError('month_year', 'Tháng / năm phát hành không đúng định dạng');
                isValid = false;
            } else if (isFutureMonthYear(monthYear)) {
                showError('month_year', 'Tháng / năm phát hành không được lớn hơn tháng / năm hiện tại');
                isValid = false;
            }

            // Nếu các điều kiện đều hợp lệ, submit form
            if (isValid) {
                showOverlay();
                showModal();
            }
        }
        //bật tắt mờ
        function showOverlay() {
            overlay.style.display = 'block';
        }

        function hideOverlay() {
            overlay.style.display = 'none';
        }
        //bật tắt hộp thoại xác nhận thanh toán
        function showModal() {
            modal.style.display = 'block';
        }

        function hideModal() {
            modal.style.display = 'none';
        }
        //bật tắt hộp thoại xác nhận hủy
        function showBackModal() {
            backModal.style.display = 'block';
        }

        function hideBackModal() {
            backModal.style.display = 'none';
        }

        // xử lý nút hộp thoại xác nhận thanh toán
        confirmBtn.addEventListener('click', () => {
            // Xử lý khi người dùng xác nhận
            window.location.href = 'success';
        });

        cancelBtn.addEventListener('click', () => {
            hideModal();
            hideOverlay();
        });

        closeBtn.addEventListener('click', () => {
            hideModal();
            hideOverlay();
        });
        xBtn.addEventListener('click', () => {
            hideModal();
            hideOverlay();
        });

        // xử lý nút hộp thoại hủy
        document.getElementById('confirmBackBtn').addEventListener('click', () => {
            // Xử lý khi người dùng xác nhận quay lại
            window.location.href = 'bank';
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

        function showError(inputId, errorMessage) {
            const errorElement = document.getElementById(`${inputId}_error`);
            errorElement.textContent = errorMessage;
            errorElement.style.display = 'block';

            // Thêm lớp 'error' cho phần tử form-group
            const formGroup = document.querySelector(`#${inputId}`).closest('.form-group');
            formGroup.classList.add('error');
        }

        function clearErrors() {
            const errorMessages = document.querySelectorAll('.form-message');
            errorMessages.forEach(error => {
                error.textContent = '';
                error.style.display = 'none';

                // Xóa lớp 'error' cho phần tử form-group
                const formGroup = error.closest('.form-group');
                formGroup.classList.remove('error');
            });
        }

        function isValidAccountNameFormat(accountName) {
            const regex = /^[A-ZÀẢÃÁẠĂẰẲẴẮẶÂẦẤẬẨẪĂÐÈÉẸÊỀẾỆỂỄÌÍỊỈỊÒÓỌỎỐỒỔỖỘƠỜỚỢỞỠÙÚỤỦỨỪỬỮỲÝỴỶỸÂĂĐÊÔƠƯ\s]+$/;
            return regex.test(accountName);
        }

        function isValidMonthYearFormat(monthYear) {
            const regex = /^(0[1-9]|1[0-2])\/[0-9]{4}$/;
            return regex.test(monthYear);
        }

        function isFutureMonthYear(monthYear) {
            const [month, year] = monthYear.split('/');
            const currentDate = new Date();
            const inputDate = new Date(parseInt(year), parseInt(month) - 1);

            return inputDate > currentDate;
        }
    });
</script>
@endsection