
<!doctype html>
<html lang="en">

<head>
  <title>homeworkrpl📚</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<style>
    *{
        color: white;
        border-radius: 10px;
        font-family: 'Nunito Sans', sans-serif;
    }

    body{
        background-color: #0b0b0b;
    }

    input[type='text']{
        background: #19191f;
        border-radius:25px;
        color: white
    }
    input[type='text']:focus{
        background: #22222e;
        color: white
    }

    .up{
        background: #19191f;
        border-radius:25px;
        color: white
    }

    .up:focus{
        background: #22222e;
        color: white
    }

    select{
        border-radius: 25px;
        background:#22222e;
        width: 50%;
        height: 60px;
        padding-left: 30px
    }

    option{
        color: #0b0b0b;
        border-radius: 25px;
        background-color: #ed5252
    }

    option:active{

    }

    @media(max-width:360px){
        select{
            padding: 10px;
        }

    }
    @media(max-width:770px) AND (min-width:566px){
        select{
            padding: 0;
        }
    }
</style>
<body>
      <form action="/home/AddTask" method="post">
        {{ csrf_field() }}
        <div class="container">
            <div class="row">
                <div class="form-group">
                    <input type="text" class="form-control m-1" id="exampleFormControlInput1" placeholder="add title..." name="title">
                  </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <textarea class="form-control m-1 up" id="exampleFormControlTextarea1" rows="3" placeholder="addtask" name="content"></textarea>
                  </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-12">
                    <textarea class="form-control m-1 up" id="exampleFormControlTextarea1" rows="3" placeholder="add massage.." name="massage"></textarea>
                </div>
                <div class="col-sm-6 col">
                    <div class="form-group d-flex">
                        <select name="id_mapel" id="" class="select m-1">
                            @foreach($mapel as $mapel)
                            <option value="{{$mapel->id_mapel}}">{{$mapel->nama_mapel}}</option>
                            @endforeach
                        </select>
                        <select name="id_guru" id="" class="select m-1">
                            @foreach($guru as $guru)
                            <option value="{{$guru->id_guru}}">{{$guru->nama_guru}}</option>
                            @endforeach
                        </select>
                        </div>
                        <button name="uplod" id="" class="btn w-100" style="background: #ed5252; border-radius:25px;" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-app-indicator" viewBox="0 0 16 16">
                            <path d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1z"/>
                            <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                          </svg></button>
                </div>

            </div>
          </div>
      </form>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>

