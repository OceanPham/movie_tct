@extends('layouts.customer')

@section('banner')
    <div class="content">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
            </ol>
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
                            <img src="{{ asset('image/slide1.png') }}" class="d-block h-300" alt="Slide 1">
                        </div>
                        <div class="col col-padding">
                            <img src="{{ asset('image/slide1.png') }}" class="d-block" alt="Slide 2">
                        </div>
                        <div class="col col-padding">
                            <img src="{{ asset('image/slide1.png') }}" class="d-block" alt="Slide 3">
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#myCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#myCarousel" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </div>
@endsection

@section('main')
<div class="col-12 col-md-6 gap-3 d-flex flex-column ">
    <h4>Phim đang chiếu</h4>
    <table class="table border">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên phim</th>
                <th scope="col">Img</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movies as $movie)
            <tr>
                <td>
                    <img src="{{ asset('image/' . $movie->img . '.png') }}" alt="{{ $movie->name }}" style="max-width: 100px;" class="img-fluid">
                </td>
                <td>
                <td>{{$movie->name}}</td>
                <td>{{$movie->img}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection