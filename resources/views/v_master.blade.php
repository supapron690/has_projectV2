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


        



        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
        
        <title>Has Project</title>
        {{-- impor CSS --}}
        <link  href="/css/has.css" rel="stylesheet" type="text/css">
        <script src="/js/has.js"></script>


            <div class="row">
                <div class="col-md-12 set-head">
                    <img src="{{ url('storage/Images_inView/logo-01.png') }}" alt="Cinque Terre" width="200" height="100">
                </div>
            </div>{{-- end row --}}
            <div>
                <nav class="navbar navbar-expand-lg set-font navbar-light bg-white">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
        
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <h4 class="nav-link" href="#">หน้าแรก</h4>
                            </li>
                            <li class="nav-item">
                                <h4 class="nav-link" href="#">ค้นหาโรงพยาบาล</h4>
                            </li>
                            <li class="nav-item">
                                <h4 class="nav-link" href="#">โรค หรือ อาการ</h4>
                            </li>
                            <li class="nav-item">
                                <h4 class="nav-link" href="#">บทความเพื่อสุขภาพ</h4>
                            </li>
                            <li class="nav-item">
                                <h4 class="nav-link" href="#">แชร์ประสบการณ์</h4>
                            </li>
                            </ul>
                            <h4 class="nav-link" href="#">เข้าสู่ระบบ</h4> <a style="color:blue;"> | </a> 
                            <h4 class="nav-link" href="#">สมัครสมาชิก</h4>
                        </div>
                    </nav>
                </div>

    </head>
       
    <body>@yield('content')</body>

    <footer>
        @yield('footer')
        {{-- <div class="row"> --}}
                <div class="col-md-12" align="left" style="background-color:#D3D3D3;">
                    <img src="{{ url('storage/Images_inView/logo-01.png') }}" alt="Cinque Terre" width="200" height="100">
                </div>
            </div>
    </footer>
{{-- </html> --}}