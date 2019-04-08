
@extends('v_master')
@section('content')

<div class="container-fluid padding" >
{{-- head ค้นหาโรงพยาบาล --}}
    <div class="row" style="background-color:#0080ff; padding-top:10px">
        <div class="col-sm-12">
            <label><h4>ค้นหาข้อมูลที่ต้องการ</h4></label>
        </div>
    </div>

{{-- ค้นหาข้อมูลที่ต้องการ --}}
    <div class="row" style="background-image:url('storage/Images_inView/โรงพยาบาล/7957.jpg');  background-size: cover; width: 100vw; height: 50vh;  ">
        <div class="col-sm-12 content-c ">
            <div class="content-c"  style="padding-top:100px; padding-bottom:50px;" width="200" height="200" >
            <label class="set-font1">กรุณากรอกสิ่งที่ต้องการค้นหา</label>
                <div id="custom-search-input" align="center">
                    <div class="input-group col-md-8 ">
                        <input type="text" class="search-query form-control" style= "font-size:20px; height: 50px;" placeholder="เช่น โรงพยาบาลชลบุรี โรงพยาบาลระยอง เป็นต้น"/>
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button" style= "height: 50px;">     
                                    <span class="fa fa-search"></span>
                                </button>
                            </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{-- โรงพยาบาลใกล้เคียง --}}
c        <div class="row">
            <div class="col-sm-10" style=" padding-left: 2%;">
                <h4>โรงพยาบาลใกล้เคียง</h4>
            </div>
            <div class="col-sm-2 " style="text-align:right">
                <span>+ดูทั้งหมด</span>
            </div>
        </div>
    </div>
    
        <!-- Page Card -->
        <div class="row">
            <!-- Team Member 1 -->
            @foreach ($hospitals as $hospital) 
            <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow">
                    <img src="{{ url('storage/Images_inView/โรงพยาบาล/รพชลบุรี.jpg') }}" class="card-img-top" width="100" height="200">
                <div class="card-body text-center">
                    <h5 class="card-title mb-0">{{$hospital->hos_name}}</h5>
                    <h5>{{$hospital->hos_address}}</h5>
                    <h5>{{$hospital->hos_phone}}</h5>
                </div>
            </div>
            </div>
            @endforeach       
         </div>
        <!-- /.row -->
        {{-- </div> --}}

{{-- ค้นหาโรงพยาบาลจากจังหวัด --}}
        <!-- ค้นหาโรงพยาบาลใกล้เคียง -->
        {{-- <div class="row" style="margin-top:20px; margin-bottom:20px; margin-left:5\40px" >
            <div class="col-md-10">
                <h4 class="text-left  mb-3" style="margin-left:16px;margin-top:20px; display: inline;">ค้นหาโรงพยาบาลใกล้เคียง</h1>
            </div>
        </div> --}}

            <div class="section" style=" padding-top: 3%;">
                    <div class="row">
                        <div class="col-sm-10" style=" padding-left: 2%;">
                            <h4>ค้นหาโรงพยาบาลใกล้เคียง</h4>
                        </div>
                    </div>
                </div>
    
             <div class="hover01" style="margin-top:50px"> 
                <div class="row">
                        {{-- row 1 --}}
                        <div class="col-sm-3">
                            <div style="margin-left:70px; margin-bottom:10px; width:10rem" align="center">
                                <figure>
                                    <img class="card-img-top" src="{{ url('storage/Images_inView/โรงพยาบาล/จันทบุรี.PNG') }}" alt="First slide">
                                <figure>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div style="margin-left:70px; margin-bottom:10px; width:10rem" align="center">
                                <figure>
                                    <img class="card-img-top" src="{{ url('storage/Images_inView/โรงพยาบาล/ฉะเชิงเทรา.PNG') }}" alt="First slide">
                                <figure>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div style="margin-left:70px; margin-bottom:10px; width:10rem" align="center">
                                <figure>
                                    <img class="card-img-top" src="{{ url('storage/Images_inView/โรงพยาบาล/ฉะเชิงเทรา.PNG') }}" alt="First slide">
                                <figure>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div style="margin-left:70px; margin-bottom:10px; width:10rem" align="center">
                                <figure>
                                    <img class="card-img-top" src="{{ url('storage/Images_inView/โรงพยาบาล/ฉะเชิงเทรา.PNG') }}" alt="First slide">
                                <figure>
                            </div>
                        </div>
            </div>
        </div>

        <div class="hover01" style="margin-top:50px"> 
                <div class="row">
                        {{-- row 1 --}}
                        <div class="col-sm-4">
                            <div style="margin-left:70px; margin-bottom:10px; width:10rem" align="center">
                                <figure>
                                    <img class="card-img-top" src="{{ url('storage/Images_inView/โรงพยาบาล/จันทบุรี.PNG') }}" alt="First slide">
                                <figure>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div style="margin-left:70px; margin-bottom:10px; width:10rem" align="center">
                                <figure>
                                    <img class="card-img-top" src="{{ url('storage/Images_inView/โรงพยาบาล/ฉะเชิงเทรา.PNG') }}" alt="First slide">
                                <figure>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div style="margin-left:70px; margin-bottom:10px; width:10rem" align="center">
                                <figure>
                                    <img class="card-img-top" src="{{ url('storage/Images_inView/โรงพยาบาล/ฉะเชิงเทรา.PNG') }}" alt="First slide">
                                <figure>
                            </div>
                        </div>
            </div>
        </div>


<!-- แสดงโรงพยาบาลในจังหวัด -->
        <div class="row" style="padding-top:50px">
                <div class="col-md-12" align="left" style="background-color:#0059b3;">
                    <div class="row">
                        <br>
                        <h4 class="text-left Fontt mb-3" style="margin-left:50px;margin-top:30px; display: inline; color:#ffffff">แสดงโรงพยาบาลภายในจังหวัด
                            "ชลบุรี"</h4>
                    </div>
    
                    <div class="row">
                        <div class="col-md-12" style="margin-top:10px; margin-bottom:10px">
                            <div>
                                <div class="product-img" style="margin-left:30px">
                                    <img src="{{ url('storage/Images_inView/โรงพยาบาล/รพม.บูรพา.jpg') }}" height="130" width="150">
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
                                    <img src="{{ url('storage/Images_inView/โรงพยาบาล/รพชลบุรี.jpg') }}" height="130" width="150">
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
                                    <img src="{{ url('storage/Images_inView/โรงพยาบาล/รพสมิติเวชศรีราชา.jpg') }}" height="130" width="150">
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
                                    <img src="{{ url('storage/Images_inView/โรงพยาบาล/รพม.บูรพา.jpg') }}" height="130" width="150">
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
                                    <img src="{{ url('storage/Images_inView/โรงพยาบาล/รพชลบุรี.jpg') }}" height="130" width="150">
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
                                    <img src="{{ url('storage/Images_inView/โรงพยาบาล/รพสมิติเวชศรีราชา.jpg') }}" height="130" width="150">
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
        <!-- End  แสดงโรงพยาบาลในจังหวัด-->
</div> <!-- End -->
@endsection
@section('footer')