<!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" id="bootstrap-css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        {{-- button upload--}}
        {{-- <link rel="stylesheet" href="/lib/w3.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> --}}



        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>Has Project</title>
        {{-- impor CSS --}}
        <link  href="/css/has.css" rel="stylesheet" type="text/css">

        {{-- impor JS --}}
        <script type="text/javascript" src="/js/has.js"></script>




    </head>

    <body>
    <div class="container-fluid">
    <header>
            <div class="row">
                <div class="col-md-12 set-head" style="padding-right:0px; padding-left:0px;">
                    <img src="{{ url('storage/Images_inView/logo-01.png') }}" width="200" height="100">
                </div>
            </div>{{-- end row --}}

            <div>
            <nav class="navbar navbar-expand-lg set-font navbar-light bg-white">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse font-size" id="navbarTogglerDemo01">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost:8000/">หน้าแรก</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost:8000/search_hospital">ค้นหาโรงพยาบาล</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost:8000/search_disease">โรค หรือ อาการ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost:8000/articles_forhealth">บทความเพื่อสุขภาพ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost:8000/share_exper">แชร์ประสบการณ์</a>
                            </li>
                            </ul>
                            <a class="nav-link" href="http://localhost:8000/login">เข้าสู่ระบบ</a> <a style="color:#59abf4;"> | </a>
                            <a class="nav-link" href="http://localhost:8000/register">สมัครสมาชิก</a>
                    </div>
            </nav>
            </div>


    </header>

    @yield('content')

    <footer>
        @yield('footer')
        {{-- <div class="row"> --}}

            <div class="row">
                <div class="col-md-12 set-footer"  style="padding-right:0px; padding-left:0px;">
                    <img src="{{ url('storage/Images_inView/logo-01.png') }}" alt="Cinque Terre" width="200" height="100">
                </div>
            </div>

    </footer>
</div>
</body>



