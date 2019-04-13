
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
<div class="row bg_header" style="background-image:url('storage/Images_inView/โรงพยาบาล/7957.jpg');height: calc(100vh - 120px); width:auto;" >
<div class="col-sm-12 content-c ">
    <div class="content-c" style="padding-top:10%; padding-bottom:10%;" width="200" height="200" >
     <label class="set-font1">กรุณากรอกสิ่งที่ต้องการค้นหา</label>
        <form>
            <div class="custom-search-input row" >
            <div class="input-group col-md-12" style="padding-left:30%;" >
                <input type="text" class="search-query form-control col-md-7"
                style= "font-size:20px; height: 50px;"
                placeholder=" เช่น โรงพยาบาลชลบุรี โรงพยาบาลระยอง เป็นต้น">
                    <button class="btn btn-danger" type="button" style= "height: 50px;">
                        <span class="fa fa-search"></span>
                    </button>
            </div>
            </div>
        </form>
    </div>
</div>
</div>


{{-- โรงพยาบาลใกลเคียง --}}
<div class="section" style=" padding-top: 3%;">
        <div class="row">
            <div class="col-sm-10" style=" padding-left: 9%;">
                <h5>โรงพยาบาลใกลเคียง</h5>
            </div>
        </div>
        </div>
{{-- Page Card --}}
<div class="container">
<div class="row">
{{-- Team Member 1 --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/โรงพยาบาล/รพม.บูรพา.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3" style="height:130px;">
        <span class="card-title mb-0"><b>โรงพยาบาลมหาวิทยาลัยบูรพา</b></span>
        <div class="card-text text-black-50"></div>
        <span><b>ที่อยู่: </b><span>169 ถนนลงหาดบางแสน ตำบลแสนสุข อำเภอเมืองชลบุรี จังหวัดชลบุรี 20130</span></span>
        <div class="card-text text-black-50"></div>
        <span><b>โทรศัพท์: </b><span>062-5598598</span></span>
    </div>
</div>
</div>
{{-- Team Member 2 --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/โรงพยาบาล/รพม.บูรพา.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3" style="height:130px;">
        <span class="card-title mb-0"><b>โรงพยาบาลมหาวิทยาลัยบูรพา</b></span>
        <div class="card-text text-black-50"></div>
        <span><b>ที่อยู่: </b><span>169 ถนนลงหาดบางแสน ตำบลแสนสุข อำเภอเมืองชลบุรี จังหวัดชลบุรี 20130</span></span>
        <div class="card-text text-black-50"></div>
        <span><b>โทรศัพท์: </b><span>062-5598598</span></span>
    </div>
</div>
</div>
{{-- Team Member 3 --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/โรงพยาบาล/รพม.บูรพา.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3" style="height:130px;">
        <span class="card-title mb-0"><b>โรงพยาบาลมหาวิทยาลัยบูรพา</b></span>
        <div class="card-text text-black-50"></div>
        <span><b>ที่อยู่: </b><span>169 ถนนลงหาดบางแสน ตำบลแสนสุข อำเภอเมืองชลบุรี จังหวัดชลบุรี 20130</span></span>
        <div class="card-text text-black-50"></div>
        <span><b>โทรศัพท์: </b><span>062-5598598</span></span>
    </div>
</div>
</div>
{{-- Team Member 4 --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/โรงพยาบาล/รพม.บูรพา.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3" style="height:130px;">
        <span class="card-title mb-0"><b>โรงพยาบาลมหาวิทยาลัยบูรพา</b></span>
        <div class="card-text text-black-50"></div>
        <span><b>ที่อยู่: </b><span>169 ถนนลงหาดบางแสน ตำบลแสนสุข อำเภอเมืองชลบุรี จังหวัดชลบุรี 20130</span></span>
        <div class="card-text text-black-50"></div>
        <span><b>โทรศัพท์: </b><span>062-5598598</span></span>
    </div>
</div>
</div>

</div>
</div> {{-- end row page card--}}

<div class="hover01" style="margin-top:50px">
<div class="row">
    <div class="col-md-3 co"></div>
    <div class="col-md-2 co">
    <div style="margin-left:5px; margin-bottom:10px;">
        <figure>
            <img class="card-img-top" src="{{ url('storage/Images_inView/โรงพยาบาล/จันทบุรี.PNG') }}">
        <figure>
    </div>
    </div>
    <div class="col-md-2 col">
        <div style=" margin-bottom:10px; " >
        <figure>
            <img class="card-img-top" src="{{ url('storage/Images_inView/โรงพยาบาล/ฉะเชิงเทรา.PNG') }}" >
        <figure>
        </div>
    </div>
    <div class="col-md-2 col">
    <div style="margin-left:5px; margin-bottom:10px;">
        <figure>
            <img class="card-img-top" src="{{ url('storage/Images_inView/โรงพยาบาล/ชลบุรี.PNG') }}" >
        <figure>
    </div>
    </div>
</div>
<div class="row">
    <div class="col-md-2 co"></div>
    <div class="col-md-2 co">
    <div style="margin-left:5px; margin-bottom:10px;">
        <figure>
            <img class="card-img-top" src="{{ url('storage/Images_inView/โรงพยาบาล/ตราด.PNG') }}">
        <figure>
    </div>
    </div>
    <div class="col-md-2 col">
        <div style=" margin-bottom:10px; " >
        <figure>
            <img class="card-img-top" src="{{ url('storage/Images_inView/โรงพยาบาล/ปราจีนบุรี.PNG') }}" >
        <figure>
        </div>
    </div>
    <div class="col-md-2 col">
    <div style="margin-left:5px; margin-bottom:10px;">
        <figure>
            <img class="card-img-top" src="{{ url('storage/Images_inView/โรงพยาบาล/ระยอง.PNG') }}" >
        <figure>
    </div>
    </div>
    <div class="col-md-2 col">
    <div style="margin-left:5px; margin-bottom:10px;">
        <figure>
            <img class="card-img-top" src="{{ url('storage/Images_inView/โรงพยาบาล/สระแก้ว.PNG') }}" >
        <figure>
    </div>
    </div>
</div>


</div> {{-- end container-fluid --}}


@endsection
@section('footer')
