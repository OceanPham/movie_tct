@extends('layouts.customer')



@section('main')

    @if(isset($movies_search))

            <div class="title_search mt-5 ms-5 fs-3">
                <p class="title_search">Kết quả tìm kiếm</p>
            </div>
            <div class="d-flex flex-wrap container">
                @foreach($movies_search as $movie)
                <div class="item me-5 ms-2 my-4 d-flex flex-column justify-content-center align-items-center">
                    <div class="img_movie mb-2">
                        <img src="{{ asset('image/' . $movie->img . '.png') }}" alt="{{ $movie->name }}" class="img-fluid img_m">
                    </div>
                    <div class="name_movie text-center fw-bold mb-2">
                        <p>{{ $movie->name }}</p>
                    </div>
                    <button class="btn_buy">
                        <img class="button_buy" src="{{ asset('image/btn_buy.png') }}" alt="{{ $movie->name }}">
                    </button>
                </div>
                @endforeach
            </div>

            <div class="title_search mt-5 ms-5 fs-3">
                <p class="title_search">Gợi ý dành cho bạn</p>
            </div>
            <div class="d-flex flex-wrap container">
                @foreach($movies_recommend as $movie)
                <div class="item me-5 ms-2 my-4 d-flex flex-column justify-content-center align-items-center">
                    <div class="img_movie mb-2">
                        <img src="{{ asset('image/' . $movie->img . '.png') }}" alt="{{ $movie->name }}" class="img-fluid img_m">
                    </div>
                    <div class="name_movie text-center fw-bold mb-2">
                        <p>{{ $movie->name }}</p>
                    </div>
                    <button class="btn_buy">
                        <img class="button_buy" src="{{ asset('image/btn_buy.png') }}" alt="{{ $movie->name }}">
                    </button>
                </div>
                @endforeach
            </div>

    @else


    
            <div class="title text-center mt-5 fs-1 fw-bold">
                <p class="title_1">Phim đang chiếu</p>
            </div>
            <div class="d-flex flex-wrap container">
                @foreach($movies as $movie)
                @if($movie->released==1)
                <div class="item me-5 ms-2 my-4 d-flex flex-column justify-content-center align-items-center">
                    <div class="img_movie mb-2">
                        <img src="{{ asset('image/' . $movie->img . '.png') }}" alt="{{ $movie->name }}" class="img-fluid img_m">
                    </div>
                    <div class="name_movie text-center fw-bold mb-2">
                        <p>{{ $movie->name }}</p>
                    </div>
                    <button class="btn_buy">
                        <img class="button_buy" src="{{ asset('image/btn_buy.png') }}" alt="{{ $movie->name }}">
                    </button>
                </div>
                @endif
                @endforeach
            </div>

            <div class="title text-center pt-5 fs-1 fw-bold border-top">
                <p class="title_1">Phim sắp chiếu</p>
            </div>
            <div class="d-flex flex-wrap container">
                @foreach($movies as $movie)
                @if($movie->released==0)
                <div class="item me-5 ms-2 my-4 d-flex flex-column justify-content-center align-items-center">
                    <div class="img_movie mb-2">
                        <img src="{{ asset('image/' . $movie->img . '.png') }}" alt="{{ $movie->name }}" class="img-fluid img_m">
                    </div>
                    <div class="name_movie text-center fw-bold mb-2">
                        <p>{{ $movie->name }}</p>
                    </div>
                    <button class="btn_buy">
                        <img class="button_buy" src="{{ asset('image/btn_buy.png') }}" alt="{{ $movie->name }}">
                        <!-- <div class="button-background">
                                            <div class="mua-ve fw-bold fs-3">/// MUA VÉ</div>
                                            <img class="frame-child9" alt="" src="./image/slat.png" />
                                            <img class="frame-child10" alt="" src="./image/slat.png" />
                                            <img class="frame-child11" alt="" src="./image/slat.png" />
                                        </div> -->


                    </button>

                </div>
                @endif
                @endforeach
            </div>

            <div class="title text-center pt-5 fs-1 fw-bold border-top">
                <p class="title_1">Suất chiếu đặc biệt</p>
            </div>
            <div class="d-flex flex-wrap container">
                @foreach($movies as $movie)
                @if($movie->released==2)
                <div class="item me-5 ms-2 my-4 d-flex flex-column justify-content-center align-items-center">
                    <div class="img_movie mb-2">
                        <img src="{{ asset('image/' . $movie->img . '.png') }}" alt="{{ $movie->name }}" class="img-fluid img_m">
                    </div>
                    <div class="name_movie text-center fw-bold mb-2">
                        <p>{{ $movie->name }}</p>
                    </div>
                    <button class="btn">
                        <img class="button_buy" src="{{ asset('image/btn_buy.png') }}" alt="{{ $movie->name }}">
                    </button>
                </div>
                @endif
                @endforeach
            </div>
    @endif
@endsection