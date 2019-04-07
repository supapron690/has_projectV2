@extends('v_master')
@section('content')

<body>
<div class="container-fluid padding" >
    <div class="row">
    <div class="col-md-12 set-fonts" style="background-color:#acd5f4;">
        <p style="padding-left:40px;padding-top:20px;"><b>ค้นหาโรงพยาบาล</b></p>
    </div>
    </div>

    <div class="row">
    <div class="text-image" style="width:100%;height:50%;">
            <img src="{{ url('storage/Images_inView\โรงพยาบาล\7957.jpg') }}"
                style="width:100%;height:50%;" class="img-fluid" alt="Responsive image">
            <div class="centered-articleForDisease">
                <span style="color:#00004d; text-shadow: 2px 1px gray;">
                    <h1>กรุณากรอกสิ่งที่ต้องการค้นหา</h1>
                </span>
                <form action="#">
                    <input id="icon-forHelath" type="text" class="form-control form-control-lg Fontt" name="info"
                        placeholder="เช่น โรงพยาบาลชลบุรี โรงพยาบาลระยอง เป็นต้น">
                </form>
            </div>
        </div>
    </div>




</div> <!--End-->
</body>




------------------------------<br><br>

{{--  --}}
{{--  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" align="center" style="background-color:#D3D3D3;">
                <img src="Images_inView/logo-01.png" alt="Cinque Terre" width="200" height="100">
            </div>
        </div>

        <div class="row">
            <div class="col-md-12  Fontt" style="background-color:skyblue;padding:0px;">
                <p style="padding-left:40px;padding-top:20px;"><b>ค้นหาโรงพยาบาล</b></p>
            </div>

            <div class="text-image" style="width:100%;height:50%;">
                <img src="Images_inView/โรงพยาบาล/7957.jpg" style="width:100%;height:50%;">
                <div class="centered-articleForDisease"><span class="Fontt" style="color:#00004d; text-shadow: 2px 1px gray;"
                        33>
                        <h1>กรุณากรอกสิ่งที่ต้องการค้นหา</h1>
                    </span>
                    <form action="#">
                        <input id="icon-forHelath" type="text" class="form-control form-control-lg Fontt" name="info"
                            placeholder="เช่น โรงพยาบาลชลบุรี โรงพยาบาลระยอง เป็นต้น">
                    </form>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top:16px;margin-bottom:15px;">
            <div class="col-md-10">
                <h1 class="text-left Fontt mb-3" style="margin-left:16px; margin-top:20px; display: inline;">โรงพยาบาลใกล้เคียง</h1>
            </div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" style="background-color:blue;" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" style="background-color:blue;"></li>
            </ol>

            <div class="carousel-inner" style="margin-left:16px;padding-right:17px;">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="Images_inView/โรงพยาบาล/รพม.บูรพา.jpg" alt="First slide"
                                    height="200">
                                <div class="card-body Fontt ">
                                    <b style="font-size: 13px;">โรงพยาบาลมหาวิทยาลัยบูรพา</b>
                                    <p style="font-size: 10px">
                                        <b>ที่อยู่ :</b>
                                        169 ถนนลงหาดบางแสน ตำบลแสนสุข อำเภอเมือง จังหวัดชลบุรี 20131<br>
                                        <b>เบอร์โทรศัพท์ :</b>
                                        0-3839-4850-3, 0-3839-0324
                                    </p>
                                    <p style="font-size: 15px; color:teal; text-align:right"> ระยะทาง 0.9 กิโลเมตร</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="Images_inView/โรงพยาบาล/รพชลบุรี.jpg" alt="First slide"
                                    height="200">
                                <div class="card-body Fontt ">
                                    <b style="font-size: 13px;">โรงพยาบาลชลบุรี</b>
                                    <p style="font-size: 10px">
                                        <b>ที่อยู่ :</b>
                                        69 หมู่2 ถนนสุขุมวิท ตำบลบ้านสวน อำเภอเมือง จังหวัดชลบุรี 20000<br>
                                        <b>เบอร์โทรศัพท์ :</b>
                                        0-3893-1000
                                    </p>
                                    <p style="font-size: 15px; color:teal; text-align:right"> ระยะทาง 11.5 กิโลเมตร</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="Images_inView/โรงพยาบาล/รพสมิติเวชศรีราชา.jpg" alt="First slide"
                                    height="200">
                                <div class="card-body Fontt ">
                                    <b style="font-size: 13px;">โรงพยาบาลสมิติเวช ศรีราชา</b>
                                    <p style="font-size: 10px">
                                        <b>ที่อยู่ :</b>
                                        8 ซอยแหลมเตุ ถนนเจิมจอมพล อำเภอศรีราชา จังหวัดชลบุรี 20110<br>
                                        <b>เบอร์โทรศัพท์ :</b>
                                        0-3832-0300
                                    </p>
                                    <p style="font-size: 15px; color:teal; text-align:right"> ระยะทาง 13.9 กิโลเมตร</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="Images_inView/โรงพยาบาล/รพสมเด็จศรีราชา.jpg" alt="First slide"
                                    height="200">
                                <div class="card-body Fontt ">
                                    <b style="font-size: 13px;">โรงพยาบาลสมเด็จพระบรมราชเทวี ศรีราชา</b>
                                    <p style="font-size: 10px">
                                        <b>ที่อยู่ :</b>
                                        290 ถนนเจิมจอมพล อำเภอศรีราชา จังหวัดชลบุรี 20110<br>
                                        <b>เบอร์โทรศัพท์ :</b>
                                        0-3832-0200
                                    </p>
                                    <p style="font-size: 15px; color:teal; text-align:right"> ระยะทาง 15.9 กิโลเมตร</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="Images_inView/โรงพยาบาล/รพม.บูรพา.jpg" alt="First slide"
                                    height="200">
                                <div class="card-body Fontt ">
                                    <b style="font-size: 13px;">โรงพยาบาลมหาวิทยาลัยบูรพา</b>
                                    <p style="font-size: 10px">
                                        <b>ที่อยู่ :</b>
                                        169 ถนนลงหาดบางแสน ตำบลแสนสุข อำเภอเมือง จังหวัดชลบุรี 20131<br>
                                        <b>เบอร์โทรศัพท์ :</b>
                                        0-3839-4850-3, 0-3839-0324
                                    </p>
                                    <p style="font-size: 15px; color:teal; text-align:right"> ระยะทาง 0.9 กิโลเมตร</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="Images_inView/โรงพยาบาล/รพชลบุรี.jpg" alt="First slide"
                                    height="200">
                                <div class="card-body Fontt ">
                                    <b style="font-size: 13px;">โรงพยาบาลชลบุรี</b>
                                    <p style="font-size: 10px">
                                        <b>ที่อยู่ :</b>
                                        69 หมู่2 ถนนสุขุมวิท ตำบลบ้านสวน อำเภอเมือง จังหวัดชลบุรี 20000<br>
                                        <b>เบอร์โทรศัพท์ :</b>
                                        0-3893-1000
                                    </p>
                                    <p style="font-size: 15px; color:teal; text-align:right"> ระยะทาง 11.5 กิโลเมตร</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="Images_inView/โรงพยาบาล/รพสมิติเวชศรีราชา.jpg" alt="First slide"
                                    height="200">
                                <div class="card-body Fontt ">
                                    <b style="font-size: 13px;">โรงพยาบาลสมิติเวช ศรีราชา</b>
                                    <p style="font-size: 10px">
                                        <b>ที่อยู่ :</b>
                                        8 ซอยแหลมเตุ ถนนเจิมจอมพล อำเภอศรีราชา จังหวัดชลบุรี 20110<br>
                                        <b>เบอร์โทรศัพท์ :</b>
                                        0-3832-0300
                                    </p>
                                    <p style="font-size: 15px; color:teal; text-align:right"> ระยะทาง 13.9 กิโลเมตร</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="Images_inView/โรงพยาบาล/รพสมเด็จศรีราชา.jpg" alt="First slide"
                                    height="200">
                                <div class="card-body Fontt ">
                                    <b style="font-size: 13px;">โรงพยาบาลสมเด็จพระบรมราชเทวี ศรีราชา</b>
                                    <p style="font-size: 10px">
                                        <b>ที่อยู่ :</b>
                                        290 ถนนเจิมจอมพล อำเภอศรีราชา จังหวัดชลบุรี 20110<br>
                                        <b>เบอร์โทรศัพท์ :</b>
                                        0-3832-0200
                                    </p>
                                    <p style="font-size: 15px; color:teal; text-align:right"> ระยะทาง 15.9 กิโลเมตร</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- ค้นหาโรงพยาบาลใกล้เคียง -->
        <div class="row" style="margin-top:20px; margin-bottom:20px; margin-left:5\40px">
            <div class="col-md-10">
                <h1 class="text-left Fontt mb-3" style="margin-left:16px;margin-top:20px; display: inline;">ค้นหาโรงพยาบาลใกล้เคียง</h1>
            </div>
        </div>

        <div class="hover01" style="margin-top:50px">
            <div class="row">
                <div style="margin-left:70px; margin-bottom:10px; width:10rem">
                    <figure>
                        <img class="card-img-top" src="Images_inView/โรงพยาบาล/จันทบุรี.PNG" alt="First slide">
                        <figure>
                </div>
                <div style="width:10rem; margin-left:15px">
                    <figure>
                        <img class="card-img-top" src="Images_inView/โรงพยาบาล/ฉะเชิงเทรา.PNG" alt="First slide">
                        <figure>
                </div>
                <div style="width:10rem; margin-left:15px">
                    <figure>
                        <img class="card-img-top" src="Images_inView/โรงพยาบาล/ชลบุรี.PNG" alt="First slide">
                        <figure>
                </div>
                <div style="width:10rem; margin-left:15px">
                    <figure>
                        <img class="card-img-top" src="Images_inView/โรงพยาบาล/ตราด.PNG" alt="First slide">
                        <figure>
                </div>
                <div style="width:10rem; margin-left:15px">
                    <figure>
                        <img class="card-img-top" src="Images_inView/โรงพยาบาล/ปราจีนบุรี.PNG" alt="First slide">
                        <figure>
                </div>
                <div style="width:10rem; margin-left:15px">
                    <figure>
                        <img class="card-img-top" src="Images_inView/โรงพยาบาล/ระยอง.PNG" alt="First slide">
                        <figure>
                </div>
                <div style="width:10rem; margin-left:15px">
                    <figure>
                        <img class="card-img-top" src="Images_inView/โรงพยาบาล/สระแก้ว.PNG" alt="First slide">
                        <figure>
                </div>
            </div>
        </div>

        <!-- แสดงโรงพยาบาลในจังหวัด -->
        <div class="row" style="padding-top:50px">
            <div class="col-md-12" align="left" style="background-color:#0059b3;">
                <div class="row">
                    <br>
                    <h1 class="text-left Fontt mb-3" style="margin-left:50px;margin-top:30px; display: inline; color:#ffffff">แสดงโรงพยาบาลภายในจังหวัด
                        "ชลบุรี"</h1>
                </div>

                <div class="row">
                    <div class="col-md-12" style="margin-top:10px; margin-bottom:10px">
                        <div>
                            <div class="product-img" style="margin-left:30px">
                                <img src="Images_inView/โรงพยาบาล/รพม.บูรพา.jpg" height="130" width="150">
                            </div>
                            <div class="product-info Fontt">
                                <p style="font-size: 16px">โรงพยาบาลมหาวิทยาลัยบูรพา</p>
                                <p style="font-size: 12px; text-indent:20px;">ที่อยู่ : 169 ถนนลงหาดบางแสน ตำบลแสนสุข
                                    อำเภอเมือง จังหวัดชลบุรี 20131<br>เบอร์โทรศัพท์ : 0-3839-4850-3, 0-3839-0324</p>
                                <p style="font-size: 15px; color:#00a3cc; "> ระยะทาง 0.9 กิโลเมตร</p>
                            </div>
                        </div>
                        <div>
                            <div class="product-img" style="margin-left:30px">
                                <img src="Images_inView/โรงพยาบาล/รพชลบุรี.jpg" height="130" width="150">
                            </div>
                            <div class="product-info Fontt">
                                <p style="font-size: 16px">โรงพยาบาลชลบุรี</p>
                                <p style="font-size: 12px; text-indent:20px;">ที่อยู่ : 69 หมู่2 ถนนสุขุมวิท
                                    ตำบลบ้านสวน
                                    อำเภอเมือง จังหวัดชลบุรี 20000<br>เบอร์โทรศัพท์ : 0-3893-1000</p>
                                <p style="font-size: 15px; color:#00a3cc; "> ระยะทาง 11.5 กิโลเมตร</p>
                            </div>
                        </div>
                        <div>
                            <div class="product-img" style="margin-left:30px">
                                <img src="Images_inView/โรงพยาบาล/รพสมิติเวชศรีราชา.jpg" height="130" width="150">
                            </div>
                            <div class="product-info Fontt">
                                <p style="font-size: 16px">โรงพยาบาลสมิติเวช ศรีราชา</p>
                                <p style="font-size: 12px; text-indent:20px;">ที่อยู่ : 8 ซอยแหลมเตุ ถนนเจิมจอมพล
                                    อำเภอศรีราชา จังหวัดชลบุรี 20110<br>เบอร์โทรศัพท์ : 0-3832-0300</p>
                                <p style="font-size: 15px; color:#00a3cc; "> ระยะทาง 13.9 กิโลเมตร</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12" style="margin-top:10px; margin-bottom:10px">
                        <div>
                            <div class="product-img" style="margin-left:30px">
                                <img src="Images_inView/โรงพยาบาล/รพม.บูรพา.jpg" height="130" width="150">
                            </div>
                            <div class="product-info Fontt">
                                <p style="font-size: 16px">โรงพยาบาลมหาวิทยาลัยบูรพา</p>
                                <p style="font-size: 12px; text-indent:20px;">ที่อยู่ : 169 ถนนลงหาดบางแสน ตำบลแสนสุข
                                    อำเภอเมือง จังหวัดชลบุรี 20131<br>เบอร์โทรศัพท์ : 0-3839-4850-3, 0-3839-0324</p>
                                <p style="font-size: 15px; color:#00a3cc; "> ระยะทาง 0.9 กิโลเมตร</p>
                            </div>
                        </div>
                        <div>
                            <div class="product-img" style="margin-left:30px">
                                <img src="Images_inView/โรงพยาบาล/รพชลบุรี.jpg" height="130" width="150">
                            </div>
                            <div class="product-info Fontt">
                                <p style="font-size: 16px">โรงพยาบาลชลบุรี</p>
                                <p style="font-size: 12px; text-indent:20px;">ที่อยู่ : 69 หมู่2 ถนนสุขุมวิท
                                    ตำบลบ้านสวน
                                    อำเภอเมือง จังหวัดชลบุรี 20000<br>เบอร์โทรศัพท์ : 0-3893-1000</p>
                                <p style="font-size: 15px; color:#00a3cc; "> ระยะทาง 11.5 กิโลเมตร</p>
                            </div>
                        </div>
                        <div>
                            <div class="product-img" style="margin-left:30px">
                                <img src="Images_inView/โรงพยาบาล/รพสมิติเวชศรีราชา.jpg" height="130" width="150">
                            </div>
                            <div class="product-info Fontt">
                                <p style="font-size: 16px">โรงพยาบาลสมิติเวช ศรีราชา</p>
                                <p style="font-size: 12px; text-indent:20px;">ที่อยู่ : 8 ซอยแหลมเตุ ถนนเจิมจอมพล
                                    อำเภอศรีราชา จังหวัดชลบุรี 20110<br>เบอร์โทรศัพท์ : 0-3832-0300</p>
                                <p style="font-size: 15px; color:#00a3cc; "> ระยะทาง 13.9 กิโลเมตร</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12" style="margin-top:10px; margin-bottom:10px">
                        <div>
                            <div class="product-img" style="margin-left:30px">
                                <img src="Images_inView/โรงพยาบาล/รพม.บูรพา.jpg" height="130" width="150">
                            </div>
                            <div class="product-info Fontt">
                                <p style="font-size: 16px">โรงพยาบาลมหาวิทยาลัยบูรพา</p>
                                <p style="font-size: 12px; text-indent:20px;">ที่อยู่ : 169 ถนนลงหาดบางแสน ตำบลแสนสุข
                                    อำเภอเมือง จังหวัดชลบุรี 20131<br>เบอร์โทรศัพท์ : 0-3839-4850-3, 0-3839-0324</p>
                                <p style="font-size: 15px; color:#00a3cc; "> ระยะทาง 0.9 กิโลเมตร</p>
                            </div>
                        </div>
                        <div>
                            <div class="product-img" style="margin-left:30px">
                                <img src="Images_inView/โรงพยาบาล/รพชลบุรี.jpg" height="130" width="150">
                            </div>
                            <div class="product-info Fontt">
                                <p style="font-size: 16px">โรงพยาบาลชลบุรี</p>
                                <p style="font-size: 12px; text-indent:20px;">ที่อยู่ : 69 หมู่2 ถนนสุขุมวิท
                                    ตำบลบ้านสวน
                                    อำเภอเมือง จังหวัดชลบุรี 20000<br>เบอร์โทรศัพท์ : 0-3893-1000</p>
                                <p style="font-size: 15px; color:#00a3cc; "> ระยะทาง 11.5 กิโลเมตร</p>
                            </div>
                        </div>
                        <div>
                            <div class="product-img" style="margin-left:30px">
                                <img src="Images_inView/โรงพยาบาล/รพสมิติเวชศรีราชา.jpg" height="130" width="150">
                            </div>
                            <div class="product-info Fontt">
                                <p style="font-size: 16px">โรงพยาบาลสมิติเวช ศรีราชา</p>
                                <p style="font-size: 12px; text-indent:20px;">ที่อยู่ : 8 ซอยแหลมเตุ ถนนเจิมจอมพล
                                    อำเภอศรีราชา จังหวัดชลบุรี 20110<br>เบอร์โทรศัพท์ : 0-3832-0300</p>
                                <p style="font-size: 15px; color:#00a3cc; "> ระยะทาง 13.9 กิโลเมตร</p>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>

        <div class="row">
            <div class="col-md-12" align="left" style="background-color:#D3D3D3;">
                <img src="Images_inView/logo-01.png" alt="Cinque Terre" width="200" height="100">
            </div>
        </div>




</body>  --}}

</html>
{{--  --}}





@endsection
@section('footer')
