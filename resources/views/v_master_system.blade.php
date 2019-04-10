<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
        <meta charset="utf-8">
        {{-- import --}}
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- CSS -->
        <link  href="/css/has_system.css" rel="stylesheet" type="text/css">

        {{-- head nev --}}
        
</head>

<body>
        <ul>
            <li><a class="active" href="http://localhost:8000/hospital"><h3>โรงพยาบาลใกล้เคียง</h3></a></li>
            <li><a href="http://localhost:8000/health"><h3>บทความเพื่อสุขภาพ</h3></a></li>
            <li><a href="http://localhost:8000/share_system"><h3>แชร์ประสบการณ์</h3></a></li>
            <li><a href="#about"><h3>ข้อมูลผู้ใช้งาน</h3></a></li>
        </ul>

        @yield('content')
</body>

   
{{-- </html> --}}