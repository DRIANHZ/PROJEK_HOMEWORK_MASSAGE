@extends('master')

{{--
@section('content')
<table class="border">
    @foreach ($pr as $pr)
    <tr>
        <td>{{$pr->id_pr}}</td>
        <td>{{$pr->id_mapel}}</td>
        <td>{{$pr->id_guru}}</td>
        <td>{{$pr->title}}</td>
        <td>{{$pr->content}}</td>
        <td>{{$pr->massage}}</td>
        <td>{{$pr->uploded_time}}</td>
    </tr>
    @endforeach
</table>

@endsection --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <title>homeworkrpl📚</title>
    <style>
        *{
            font-family: 'Nunito Sans', sans-serif;
        }

        p{
            color: white
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card-img-top {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            max-height: 400px;
            object-fit: cover;
        }

        .card-body {
            padding: 15px;
        }

        .user-profile {
            border-radius: 50%;
            max-width: 40px;
            margin-right: 10px;
        }

        .username {
            font-weight: bold;
        }

        .likes {
            color: #8e8e8e;
        }

        .caption {
            margin-top: 10px;
        }

        .comment {
            margin-top: 5px;
        }

        button{
            color: white
        }
    </style>
</head>

<body>

    @section('content')
        <div class="container">
            <div class="card" style="background-color: #19191f">
                <div class="card-body">
                    <p class="caption" style="font-weight: bold;"><h1 style="color: white">reminder tugas Rekayasa Perangkat Lunak 1📚</h1></p>
                    <p class="caption">selamat datang kamuuu..🎉😎 kamu murid rpl1?🤔 kalau kamu murid rpl 1 jangan lupa kerjakan tugas tugas📝📘 di bawah ini ya! juga jangan menunda nunda saat mengerjakan tugas👨‍💻 semakin cepat kita menyelesaikan tugas
                        semakin banyak waktu kita untuk mengeksplor dunia🌎 dan juga tentunya bisa nyantai nyantai dan rebahan happy homework📚 okeyyy..........🤗
                    </p>
                    <br>
                    <br>
                    <p class="caption border" style="font-style: italic;">gapapa kalau kamu ga pinter yang penting udah kerjain tugas kamu termasuk orang sukses karena disiplin👩‍🏫</p>
                    </div>
                </div>
            </div>
        </div>
        @foreach ($pr as $pr)
            <div class="container">
                <div class="card" style="background-color: #19191f; border-radius:30px;">
                    <div class="card-body">
                        <p class="caption" style="font-weight: bold;">{{ $pr->title }}</p>
                        <p class="caption">{{ $pr->content }}</p>
                        <p class="caption border" style="font-style: italic;">{{ $pr->massage }}</p>
                        <div class="comments">
                            <p class="comment"><span class="username">Guru:</span>{{ $pr->nama_guru }}</p>
                            <p class="comment"><span class="username">mapel:</span>{{ $pr->nama_mapel }}</p>
                            <div class="d-flex justify-content-between" >
                                <p class="likes">{{ $pr->uploded_time }}</p>
                                <a name="" id="" class="btn" href="/hapus/{{$pr->id_pr}}"
                                    role="button" style="border-radius: 40px; background:#ed5252; color:aliceblue">delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endsection
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
