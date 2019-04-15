<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

            
        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="style.css">
            
        <!-- Font Awesome JS -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
        <link  href="/css/has_system.css" rel="stylesheet" type="text/css">
</head>

<body>
        @section('sidebar')
        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        
        <div class="wrapper">
                <!-- Sidebar -->
                <nav id="sidebar">
                        <div class="sidebar-header">
                                <h3>Bootstrap Sidebar</h3>
                        </div>
                    
                        <ul class="list-unstyled components">
                                <li class="active">
                                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">โรงพยาบาลใกล้เคียง</a>
                                    <ul class="collapse list-unstyled" id="homeSubmenu">
                                        <li>
                                            <a href="http://localhost:8000/hospital">ข้อมูลทั้งหมด</a>
                                        </li>
                                        <li>
                                            <a href="http://localhost:8000/hospital/form_hospital">เพิ่มข้อมูลใหม่</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                        <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">โรคหรืออาการ</a>
                                        <ul class="collapse list-unstyled" id="pageSubmenu1">
                                        <li>
                                            <a href="http://localhost:8000/diseases">ข้อมูลทั้งหมด</a>
                                        </li>
                                        <li>
                                            <a href="http://localhost:8000/diseases/form_diseases/">เพิ่มข้อมูลใหม่</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                        <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">บทความเพื่อสุขภาพ</a>
                                        <ul class="collapse list-unstyled" id="pageSubmenu2">
                                        <li>
                                                <a href="http://localhost:8000/health">ข้อมูลทั้งหมด</a>
                                        </li>
                                        <li>
                                                <a href="http://localhost:8000/health/form_health">เพิ่มข้อมูลใหม่</a>
                                        </li>
                                        </ul>
                                </li>
                                <li>
                                        <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">แชร์ประสบการณ์</a>
                                        <ul class="collapse list-unstyled" id="pageSubmenu3">
                                        <li>
                                                <a href="http://localhost:8000/share_system">ข้อมูลทั้งหมด</a>
                                        </li>
                                        </ul>
                                </li>
                                <li>
                                        <a href="#">ข้อมูลผู้ใช้งาน</a>
                                </li>
                            </ul>
                        </nav>
                    
      
                <div id="page-content-wrapper">
                        <nav class="navbar navbar-expand-lg border-bottom">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <div>
                                <label>ชื่อผู้ใช้งาน : Admin</label>
                        </div>
                                    </ul>
                        </div>
                        </nav>
                @show
                 
                        <div class="container-fluid">
                                @yield('content')
                        </div>
                </div>
        
        
        {{-- <ul>
            <li><a class="active" href="http://localhost:8000/hospital"><h3>โรงพยาบาลใกล้เคียง</h3></a></li>
            <li><a href="http://localhost:8000/health"><h3>บทความเพื่อสุขภาพ</h3></a></li>
            <li><a href="http://localhost:8000/share_system"><h3>แชร์ประสบการณ์</h3></a></li>
            <li><a href="http://localhost:8000/share_system"><h3>โรคหรืออาการ</h3></a></li>
            <li><a href="#about"><h3>ข้อมูลผู้ใช้งาน</h3></a></li>
        </ul>

        @yield('content') --}}
</body>

   
{{-- </html> --}}