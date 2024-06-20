@extends('layouts.customer')

@section('main')
<nav class="nav-pay">
    <p class="p-pay"> 
        <a class="a-pay" href="{{ route('movie.index') }}">Trang chủ</a> > 
        <a class="a-pay" href="#">Lịch chiếu</a> > 
        <a class="a-pay" href="#">Đặt vé Online</a> > 
        <a class="a-pay" href="#">Thanh toán</a>
    </p>
</nav>

<div class="paymentmethod_container container">
    <div class="row link">
        <a class="paymentmethod_icon_back col-md-3 d-flex align-items-center" href="{{ route('paymentmethod.index') }}">
            <img src="{{ asset('image/back.png') }}" alt="Back" class="mr-2">
            Quay lại
        </a>
    </div>
    <div class="bank_box_card row justify-content-center">
        <div class="card col-md-8">
            <div class="card-body ">
                <h4 class="card-title text-center">NGÂN HÀNG THANH TOÁN</h4>
            </div>
        </div>
    </div> 
    <div class="bank_box_card row justify-content-center">
        <div class="card col-md-8 card_bank">
            <div class="card-body ">
                <div class="box_bank">
                    <div class="search-bank col-md-12 input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                        <input id="bankSearchInput" type="text" class="form-control" placeholder="Tìm kiếm ngân hàng" aria-label="Tìm kiếm ngân hàng" aria-describedby="basic-addon1" onkeyup="filterBanks()">
                    </div>

                    <div id="bankContainer" class="bank-container">
                        @foreach($banks as $bank)
                            <div class="bank" data-name="{{ $bank['name'] }}">
                                <a href="{{ route('pay.cardinformation', ['name' => $bank['name'], 'image' => $bank['image']]) }}">
                                    <img src="{{ asset($bank['image']) }}" alt="{{ $bank['name'] }}">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
@endsection

@section('scripts')
<script>
    function filterBanks() {
        var input, filter, bankContainer, banks, bank, i, txtValue;
        input = document.getElementById('bankSearchInput');
        filter = input.value.toUpperCase();
        bankContainer = document.getElementById('bankContainer');
        banks = bankContainer.getElementsByClassName('bank');

        for (i = 0; i < banks.length; i++) {
            bank = banks[i];
            txtValue = bank.getAttribute('data-name');
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                bank.style.display = "";
            } else {
                bank.style.display = "none";
            }
        }
    }
</script>
@endsection
