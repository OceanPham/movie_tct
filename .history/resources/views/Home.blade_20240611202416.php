v
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
                    <!-- <th scope="row"><img style="width: 200px; height: 300px;" alt="" src="{{ asset('public/image/mong_vuot.png') }}"></th> -->
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
