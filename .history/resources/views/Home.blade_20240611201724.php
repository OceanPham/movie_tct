<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ocean</h1>
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
                    <th scope="row"><img style="width: 200px; height: 300px;" alt="" src="{{ asset('public/image/mong_vuot.png') }}"></th>
                    <td><img src="{{ asset('public/image/mong_vuot.png') }}" alt="{{ $phim->TenPhim }}" style="max-width: 100px;" class="img-fluid"></td>
                    <td>
                    <td>{{$movie->name}}</td>
                    <td>{{$movie->img}}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</body>

</html>