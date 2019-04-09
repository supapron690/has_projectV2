
@extends('v_master')
@section('content')

<div class="container-fluid padding" style="padding-left: 0px;">
{{-- head ค้นหาโรงพยาบาล --}}
<div class="row" style="background-color:#add5f8; padding-top:20px; padding-left:20px">
    <div class="col-sm-12 set-font">
        <label><b><p>ค้นหาข้อมูลที่ต้องการ</p></b></label>
    </div>
</div>

{{-- ค้นหาข้อมูลที่ต้องการ --}}
<div class="row" style="background-image:url('storage/Images_inView/โรงพยาบาล/7957.jpg');
    background-size: cover; height: 70vh;" >
<div class="col-sm-12 content-c ">
    <div class="content-c" style="padding-top:10%; padding-bottom:10%;" width="200" height="200" >
     <label class="set-font1">กรุณากรอกสิ่งที่ต้องการค้นหา</label>
        <form>
            <div class="custom-search-input row" >
            <div class="input-group col-md-12" style="padding-left:30%;" >
                <input type="text" class="search-query form-control col-md-7"
                style= "font-size:20px; height: 50px;"
                placeholder="เช่น โรงพยาบาลชลบุรี โรงพยาบาลระยอง เป็นต้น">
                    <button class="btn btn-danger" type="button" style= "height: 50px;">
                        <span class="fa fa-search"></span>
                    </button>
            </div>
            </div>
        </form>
    </div>
</div>
</div>


<!--โรงพยาบาลใกล้เคียง-->
<div class="section" style=" padding-top: 3%;">
<div class="row" >
    <div class="col-sm-10" style=" padding-left: 9%;">
        <h5>โรงพยาบาลใกล้เคียง</h5>
    </div>
</div>
</div>

<!-- Page Card -->
<div class="container">
<div class="row">
    <!-- Team Member 1 -->
    <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-0 shadow">
        <img src="{{ url('storage/Images_inView/โรงพยาบาล/รพม.บูรพา.jpg') }}" class="card-img-top" width="100" height="200">
        <div class="card-body text-left font-size3">
            <p class="card-title mb-0">โรคหัวใจ (Heart Disease)</p>
            <div class="card-text text-black-50"></div>
            <div class="card-text text-black-50">คือ โรคต่าง ๆ ที่ส่งผลกระทบต่อการทำงานของหัวใจ โดยโรคหัวใจสามารถแบ่งย่อยได้เป็นหลายกลุ่มโรค</div>
        </div>
    </div>
    </div>
    <!-- Team Member 2 -->
    <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-0 shadow">
        <img src="{{ url('storage/Images_inView/โรงพยาบาล/รพชลบุรี.jpg') }}" class="card-img-top" width="100" height="200">
        <div class="card-body text-left font-size3">
            <p class="card-title mb-0">โรคหัวใจ (Heart Disease)</p>
            <div class="card-text text-black-50"></div>
            <div class="card-text text-black-50">คือ โรคต่าง ๆ ที่ส่งผลกระทบต่อการทำงานของหัวใจ โดยโรคหัวใจสามารถแบ่งย่อยได้เป็นหลายกลุ่มโรค</div>
        </div>
    </div>
    </div>
    <!-- Team Member 3 -->
    <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-0 shadow">
        <img src="{{ url('storage/Images_inView/โรงพยาบาล/รพสมเด็จศรีราชา.jpg') }}" class="card-img-top" width="100" height="200">
        <div class="card-body text-left font-size3">
            <p class="card-title mb-0">โรคหัวใจ (Heart Disease)</p>
            <div class="card-text text-black-50"></div>
            <div class="card-text text-black-50">คือ โรคต่าง ๆ ที่ส่งผลกระทบต่อการทำงานของหัวใจ โดยโรคหัวใจสามารถแบ่งย่อยได้เป็นหลายกลุ่มโรค</div>
        </div>
    </div>
    </div>
    <!-- Team Member 4 -->
    <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-0 shadow">
        <img src="{{ url('storage/Images_inView/โรงพยาบาล/รพสมิติเวชศรีราชา.jpg') }}" class="card-img-top" width="100" height="200">
        <div class="card-body text-left font-size3">
            <p class="card-title mb-0">โรคหัวใจ (Heart Disease)</p>
            <div class="card-text text-black-50"></div>
            <div class="card-text text-black-50">คือ โรคต่าง ๆ ที่ส่งผลกระทบต่อการทำงานของหัวใจ โดยโรคหัวใจสามารถแบ่งย่อยได้เป็นหลายกลุ่มโรค</div>
        </div>
    </div>
    </div>
</div>
<!-- /.row -->
</div>

<div class="hover01" style="margin-top:50px">
<div class="row">
<div class="col-md-2">
</div>
<div class="col-md-1 col">
<div style="margin-left:5px; margin-bottom:10px; ">
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView/โรงพยาบาล/จันทบุรี.PNG') }}" >
    <figure>
</div>
</div>
<div class="col-md-1 col">
    <div style="margin-left:5px; margin-bottom:10px; " >
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView/โรงพยาบาล/ฉะเชิงเทรา.PNG') }}" >
    <figure>
</div>
</div>
<div class="col-md-1 col">
<div style="margin-left:5px; margin-bottom:10px;">
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView/โรงพยาบาล/ชลบุรี.PNG') }}" >
    <figure>
</div>
</div>
<div class="col-md-1 col">
<div style="margin-left:5px; margin-bottom:10px;" >
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView/โรงพยาบาล/ตราด.PNG') }}" >
    <figure>
</div>
</div>
<div class="col-md-1 col">
<div style="margin-left:5px; margin-bottom:10px;" >
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView/โรงพยาบาล/ปราจีนบุรี.PNG') }}" >
    <figure>
</div>
</div>
<div class="col-md-1 col">
<div style="margin-left:5px; margin-bottom:10px;" >
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView/โรงพยาบาล/ระยอง.PNG') }}" >
    <figure>
</div>
</div>
<div class="col-md-1 col">
<div style="margin-left:5px; margin-bottom:50px;" >
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView/โรงพยาบาล/สระแก้ว.PNG') }}" >
    <figure>
</div>
</div>

</div>
</div>

<!-- แสดงโรงพยาบาลในจังหวัด  -->
<div class="row" style="background-color:#0560af; padding-top:3%; padding-left:5%">
    <div style=" padding-left: 3%;">
        <h4 style="color: white;">แสดงโรงพยาบาลในจังหวัด "ชลบุรี"</h4>
    </div>

<div class="row" style=" padding-top:1%; padding-bottom:3%; padding-left:5%" >
<div class="card col-12 col-sm-6 col-md-4 col-lg-4 card-style-1">
    <div class="row no-gutters">
        <div class="col-auto" >
            <img src="{{ url('storage/Images_inView/โรงพยาบาล/รพสมิติเวชศรีราชา.jpg') }}" class="img-fluid" width="180" height="180">
        </div>
        <div class="col">
        <div class="card-block px-20%" style="padding-left:3%;">
            <p class="card-title font-size3"><b>โรงพยาบาลมหาวิทยาลัยบูรพา อำเภอเมือง จังหวัดชลบุรี</b></p>
            <p class="card-text font-size3">ที่อยู่: 169 ถนนลงหาดบางแสน ตำบลแสนสุข อำเภอเมือง จังหวัดชลบุรี 20130</p>
            <p class="card-text font-size3">เบอร์โทรศัพท์: 0625598598</p>
        </div>
        </div>
    </div>
</div>

<div class="card col-12 col-sm-6 col-md-4 col-lg-4 card-style-1">
    <div class="row no-gutters">
        <div class="col-auto" >
            <img src="{{ url('storage/Images_inView/โรงพยาบาล/รพสมิติเวชศรีราชา.jpg') }}" class="img-fluid" width="180" height="180">
        </div>
        <div class="col">
        <div class="card-block px-20%" style="padding-left:3%;">
            <p class="card-title font-size3"><b>โรงพยาบาลมหาวิทยาลัยบูรพา</b></p>
            <p class="card-text font-size3">ที่อยู่: </p>
            <p class="card-text font-size3">เบอร์โทรศัพท์: </p>
        </div>
        </div>
    </div>
</div>

<div class="card col-12 col-sm-6 col-md-4 col-lg-4 card-style-1">
    <div class="row no-gutters">
        <div class="col-auto" >
            <img src="{{ url('storage/Images_inView/โรงพยาบาล/รพสมิติเวชศรีราชา.jpg') }}" class="img-fluid" width="180" height="180">
        </div>
        <div class="col">
        <div class="card-block px-20%" style="padding-left:3%;">
            <p class="card-title font-size3"><b>โรงพยาบาลมหาวิทยาลัยบูรพา</b></p>
            <p class="card-text font-size3">ที่อยู่: </p>
            <p class="card-text font-size3">เบอร์โทรศัพท์: </p>
        </div>
        </div>
    </div>
</div>

</div><!-- End row-->
</div>

</div> <!-- End -->


@endsection
@section('footer')
