@extends('v_master')
@section('content')
<div class="container-fluid padding" style="padding-left: 0px;">

{{-- head แชร์ประสบการณ์ --}}
<div class="row" style="background-color:#add5f8; padding-top:20px; padding-left:20px">
<div class="col-sm-12 set-font">
    <label><b><p>แชร์ประสบการณ์</p></b></label>
</div>
</div>

{{-- ขั้นตอนที่ 1 --}}
<div class="row bg_header view overlay zoom" style="background-image:url('storage/Images_inView/OBFCYE0.jpg'); height: calc(100vh - 120px); width:auto;" >
<div class="col-sm-12 content-c ">
    <div class="container">
    <div class="content-c">
        <p class="set-font1" style="text-align:left; padding-top:2%; padding-bottom:2%;">ขั้นตอนที่ 1 : เลือกหมวดหมู่ที่ต้องการแชร์ประสบการณ์</p>
        <div class="row" >
            <div class="col-md-1" style="padding-left:12%;"></div>
            <div  class="col-xl-3 col-md-3 mb-4 hover-zoomin">
                <img id"m1" onclick="myFunction_1()"
                src="{{ url('storage/Images_inView/ปุ่ม-1.png') }}"class="img-fluid"
                style="padding-top:10px; padding-bottom:5%;" width="300" height="300" >
            </div>
            <div class="col-xl-3 col-md-3 mb-4 hover-zoomin">
                <img id="m2" onclick="myFunction_2()"
                src="{{ url('storage/Images_inView/ปุ่ม-2.png') }}"class="img-fluid"
                style="padding-top:10px; padding-bottom:5%;" width="300" height="300" >
            </div>
            <div class="col-xl-3 col-md-3 mb-4 hover-zoomin">
                <img id="m3" onclick="myFunction_3()"
                src="{{ url('storage/Images_inView/ปุ่ม-3.png') }}"class="img-fluid "
                style="padding-top:10px; padding-bottom:5%;" width="300" height="300" >
            </div>
        </div>
    </div>
    </div>
</div>
</div> {{-- bg --}}

{{-- ขั้นตอนที่ 2 --}}
{{-- <div class="container-fluid padding" > --}}
<div class="row"  style="padding-top:3%;">
    <div class="col-md-1"></div>
    <div class="col-md-10" >

    <div class="firma-card row">
    <div class="col-md-12" style="padding-left: 0px; padding-right: 0px;">
        <div>
            <h4 class="font-size5 head-step2">
                ขั้นตอนที่ 2 : ใส่รายละเอียดของเรื่องที่ต้องการแชร์ประสบการณ์ <span style="color:yellow">( หมวดหมู่ : <span id="group"></span> )</span></h4>
            <ul class="yacht-info__list space-2 padding">
            <form>
                <div class="custom-search-input row">
                <div class="col-md-1"></div>
                    <div class="input-group col-md-2 padding" >
                        <span>ชื่อเรื่อง</span>
                        <span style="color:red;">*</span>
                    </div>
                    <div class="input-group col-md-8">
                        <input type="text" placeholder="ใส่ชื่อเรื่องสำหรับแชร์ประสบการณ์" class="form-control"  >
                    </div>
                </div>

                <div class="custom-search-input row">
                <div class="col-md-1"></div>
                    <div class="input-group col-md-2 padding" >
                        <span>รายละเอียด</span>
                        <span style="color:red;">*</span>
                    </div>
                    <div class="input-group col-md-8 md-form">
                        <textarea type="text" placeholder="ใส่รายละเอียดสำหรับเนื้อหาแชร์ประสบการณ์"class=" md-textarea form-control" style=" height: 300px;"></textarea>
                    </div>
                </div>

                <div class="custom-search-input row">
                    <div class="col-md-1"></div>
                    <div class="input-group col-md-2 padding" >
                        <span>อัปโหลดรูปภาพหน้าปก</span>
                        <span style="color:red;">*</span>
                    </div>
                    <div class="col-md-6" style="padding-left: 0px;">
                    <div class="form-group">
                        <div class="input-group" style="padding-left:3%">
                            {{-- <span class="input-group-btn"> --}}
                            <span class="btn btn-default btn-file "
                                style="; height:40px; width:80px; color:back; background-color:#e1e1e1">เลือก
                                <input type="file" id="imgInp">
                            </span>
                            {{-- </span> --}}
                            <input type="text" class="form-control" readonly disabled>
                        </div>
                            <img id='img-upload'/>
                    </div>
                    </div>
                </div>

                <div class="custom-search-input row">
                <div class="input-group col-md-12 padding font-size3 " style="padding-left:47%; padding-bottom:3%;">
                    <button type="button" class="btn font-size"
                        style="height:40px; width:150px; color:white; background-color:#8bc34a" >บันทึก
                    </button>
                </div>
                </div>
            </form>
            </ul>
        </div>
    </div>
    </div>

    </div> {{-- end col-md-10 --}}


    <div class="col-md-2"></div>
</div>
{{-- </div> --}}



</div>
@endsection
@section('footer')
