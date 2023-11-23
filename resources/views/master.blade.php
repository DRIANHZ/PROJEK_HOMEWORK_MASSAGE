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
        font-family: 'Nunito Sans', sans-serif;

    }

    .icon-web {
        border: 1px 1px 1px 0px solid white;
        border-radius: 15px;
    }

    nav {
        position: fixed;
        z-index: 3;
        top: 0;
        background-color: #0b0b0b;
        width: 100%;

    }

    #navId {
        padding: 0px 8%;
    }

    .filter {
        margin-top: 3px;
        border-radius: 25px;
        background: rgba(231, 24, 24, 0.25);
        box-shadow: 0 0px 0px 0 rgb(237, 82, 82);
        backdrop-filter: blur(3px);
        -webkit-backdrop-filter: blur(4px);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.18);
        transition: 0.3s ease-in;


    }
    .filter a{
        color: #fffbfb;
    }

    @media(max-width:345px){
        #navId {
            padding: 0px 0%;
        }
    }
</style>

<body style="background: #0b0b0b">

    <nav>


        <ul class="nav nav-tabs" id="navId" role="tablist">
            <li class="nav-item icon-web">
                <a href="/home" class=" icon-web" style="background: #0b0b0b;" data-bs-toggle="" aria-current="page">
                    <svg style="color: #ed5252" class="mt-1" xmlns="http://www.w3.org/2000/svg" width="30"
                        height="30" fill="currentColor" class="bi bi-backpack-fill" viewBox="0 0 16 16">
                        <path d="M5 13v-3h4v.5a.5.5 0 0 0 1 0V10h1v3z" />
                        <path
                            d="M6 2v.341C3.67 3.165 2 5.388 2 8v5.5A2.5 2.5 0 0 0 4.5 16h7a2.5 2.5 0 0 0 2.5-2.5V8a6.002 6.002 0 0 0-4-5.659V2a2 2 0 1 0-4 0m2-1a1 1 0 0 1 1 1v.083a6.04 6.04 0 0 0-2 0V2a1 1 0 0 1 1-1m0 3a4 4 0 0 1 3.96 3.43.5.5 0 1 1-.99.14 3 3 0 0 0-5.94 0 .5.5 0 1 1-.99-.14A4 4 0 0 1 8 4M4.5 9h7a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5" />
                    </svg>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown" data-bs-toggle="dropdown" href="#" role="button"
                    aria-haspopup="true" aria-expanded="false"><svg style="color: #ed5252"
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-book-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
                    </svg><span style="margin-left: 10px; color:#ed5252;font-weight: bold; ">filter</span></a>
                <div class="dropdown-menu filter" style="width:500px">
                    @foreach ($mapel as $m)
                        <a class="dropdown-item w-100" href="/home/{{ $m->id_mapel }}">{{ $m->nama_mapel }}</a>

                    @endforeach
                </div>
            </li>
            <li class="nav-item" role="presentation">
                <a href="/home/Newtask" style="color: #ed5252" class="nav-link"><svg style="color: #ed5252"
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-bookmark-check-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5m8.854-9.646a.5.5 0 0 0-.708-.708L7.5 7.793 6.354 6.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3" />
                    </svg><span style="margin-left: 10px; font-weight: bold; ">new task</span></a>

            </li>
        </ul>
    </nav>



    <main>
        @yield('content')
    </main>

    <!-- (Optional) - Place this js code after initializing bootstrap.min.js or bootstrap.bundle.min.js -->
    <script>
        var triggerEl = document.querySelector('#navId a')
        bootstrap.Tab.getInstance(triggerEl).show() // Select tab by name
    </script>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
