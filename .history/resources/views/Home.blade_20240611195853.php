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
                                    <th scope="col">Thời lượng (phút)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($phimDangChieus as $key => $phim)
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$phim->TenPhim}}</td>
                                    <td>{{$phim->NgayCongChieu}}</td>
                                    <td>{{$phim->ThoiLuong}}</td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
</body>

</html>