@extends('layouts.customer')

@section('banner')
<div class="">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1500"> <!-- Set interval to 1500ms (1.5 seconds) -->
            <div class="carousel-inner carousel-container">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col col-padding">
                            <img src="{{ asset('image/slide1.png') }}" class="d-block" alt="Slide 1">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col col-padding">
                            <img src="{{ asset('image/slide2.png') }}" class="d-block" alt="Slide 2">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col col-padding">
                            <img src="{{ asset('image/slide3.png') }}" class="d-block" alt="Slide 3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <button class="carousel-control-prev" type="button" data-target="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button> -->
    </div>
</div>
@endsection

@section('main')
<h4>Phim đang chiếu</h4>
<div class="d-flex flex-wrap container">
    @foreach($movies as $movie)

    <div class="item jus">
        <div class="img_movie">
            <img src="{{ asset('image/' . $movie->img . '.png') }}" alt="{{ $movie->name }}" style="max-width: 100px;" class="img-fluid">
        </div>
        <div class="name_movie">
            <p>{{$movie->name}}</p>
        </div>
        <button class="btn btn-success">Mua vé</button>
    </div>
    @endforeach
</div>
@endsection