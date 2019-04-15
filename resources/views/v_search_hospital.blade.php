
@extends('v_master')
@section('content')

<div class="container-fluid padding" style="padding-left: 0px;">
{{-- head ค้นหาโรงพยาบาล --}}
<div class="row" style="background-color:#add5f8; padding-top:20px; padding-left:20px">
    <div class="col-sm-12 set-font">
        <label><b><p>ค้นหาโรงพยาบาล</p></b></label>
    </div>
</div>

{{-- ค้นหาข้อมูลที่ต้องการ --}}
<div class="row bg_header" style="background-image:url('storage/Images_inView/โรงพยาบาล/7957.jpg');height: calc(100vh - 120px); width:auto;" >
<div class="col-sm-12 content-c ">
    <div class="content-c" style="padding-top:10%; padding-bottom:10%;" width="200" height="200" >
     <label class="set-font1">กรุณากรอกสิ่งที่ต้องการค้นหา</label>
        <form>
            <div class="custom-search-input row" >
            <div class="input-group col-md-12" style="padding-left:20%;">
                <input type="text" class="search-query form-control col-md-9"
                style= "font-size:20px; height: 50px;"
                placeholder=" เช่น โรงพยาบาลชลบุรี โรงพยาบาลระยอง เป็นต้น">
                    <button class=" btn-primary" type="button" style= "height: 46px;">
                        <i class="fa fa-search"></i>
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



{{-- ค้นหาโรงพยาบาลจากจังหวัด --}}
<div class="row" style="background-color:#cdeeff;">
<div class="col-md-12 set-font" style="padding-top:3%;" >
    <h2 align = 'center'><b><p>ค้นหาโรงพยาบาลจากจังหวัด</p></b></h2>
</div>
<div class="row" style="padding-top:2%; margin-right: 0px;margin-left: 0px;">
    <div class="col-md-3 co"></div>
    <div class="col-md-2 hover-zoomin" id="heading_1">
        <img src="{{ url('storage/Images_inView/โรงพยาบาล/จันทบุรี.PNG') }}"
        class=" img-fluid img-center d-flex align-items-center justify-content-between btn btn-link collapsed"
        data-toggle="collapse" data-target="#collapse_1" aria-expanded="false"
        aria-controls="collapse_1" width="200" height="200">
    </div>
    <div class="col-md-2 hover-zoomin" id="heading_2">
        <img src="{{ url('storage/Images_inView/โรงพยาบาล/ชลบุรี.PNG') }}"
        class=" img-fluid img-center d-flex align-items-center justify-content-between btn btn-link collapsed"
        data-toggle="collapse" data-target="#collapse_2" aria-expanded="false"
        aria-controls="collapse_2" width="200" height="200">
    </div>
    <div class="col-md-2 hover-zoomin" id="heading_3">
        <img src="{{ url('storage/Images_inView/โรงพยาบาล/ตราด.PNG') }}"class="img-fluid img-center"
        data-toggle="collapse" data-target="#collapse_3" aria-expanded="false" width="200" height="200">
    </div>
    <div class="col-md-2 hover-zoomin">
        <img src="{{ url('storage/Images_inView/โรงพยาบาล/blank.PNG') }}"class="img-fluid img-center"
        width="200" height="200">
    </div>
</div>

<div class="row" style=" padding-bottom:5%; margin-left: 0px;margin-right: 0px;">
    <div class="col-md-2 co"></div>
    <div class="col-md-2 hover-zoomin" id="heading_4">
        <img src="{{ url('storage/Images_inView/โรงพยาบาล/ฉะเชิงเทรา.PNG') }}"class="img-fluid img-center"
        data-toggle="collapse" data-target="#collapse_4" aria-expanded="false" width="200" height="200">
    </div>
    <div class="col-md-2 hover-zoomin" id="heading_5">
        <img src="{{ url('storage/Images_inView/โรงพยาบาล/ปราจีนบุรี.PNG') }}"class="img-fluid img-center"
        data-toggle="collapse" data-target="#collapse_5" aria-expanded="false" width="200" height="200">
    </div>
    <div class="col-md-2 hover-zoomin" id="heading_6">
        <img src="{{ url('storage/Images_inView/โรงพยาบาล/ระยอง.PNG') }}"class="img-fluid img-center"
        data-toggle="collapse" data-target="#collapse_6" aria-expanded="false" width="200" height="200">
    </div>
    <div class="col-md-2 hover-zoomin" id="heading_7">
        <img src="{{ url('storage/Images_inView/โรงพยาบาล/สระแก้ว.PNG') }}"class="img-fluid img-center"
        data-toggle="collapse" data-target="#collapse_7" aria-expanded="false" width="200" height="200">
    </div>
</div>
</div> {{-- end ค้นหาโรงพยาบาลจากจังหวัด --}}



{{-- คำตอบการแสดงโรงพยาบาล accordion --}}
{{-- จันทบุรี --}}
<div id="accordion" class="myaccordion ">
<div class="card row">
<div id="collapse_1" class="collapse" aria-labelledby="heading_1" data-parent="#accordion" style="background-color:#0560af;">
<div class="card-body col-md-12 ">
    <span style="color:white; padding-left:8%">แสดงโรงพยาบาลภายในจังหวัด
    <span style=" font-size: 25px;">"จันทบุรี"</span> </span>

{{-- page card ข้อมูลโรงพยาบาล จันทบุรี --}}
<div class="container">
<div class="row" style="padding-top:3%">
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
</div> {{-- end ข้อมูลโรงพยาบาล จันทบุรี--}}

</div>
</div>
</div>

{{-- ชลบุรี --}}
<div class="card row">
<div id="collapse_2" class="collapse  " aria-labelledby="heading_2" data-parent="#accordion" style="background-color:#0560af;">
<div class="card-body">
    <span style="color:white; padding-left:8%">แสดงโรงพยาบาลภายในจังหวัด
    <span style=" font-size: 25px;">"ชลบุรี"</span></span>
</div>
</div>
</div>

{{-- ตราด --}}
<div class="card row">
<div id="collapse_3" class="collapse  " aria-labelledby="heading_3" data-parent="#accordion" style="background-color:#0560af;">
<div class="card-body">
        <span style="color:white; padding-left:8%">แสดงโรงพยาบาลภายในจังหวัด
        <span style=" font-size: 25px;">"ตราด"</span> </span>
    </div>
</div>
</div>

{{-- ฉะเชิงเทรา --}}
<div class="card row">
<div id="collapse_4" class="collapse  " aria-labelledby="heading_4" data-parent="#accordion" style="background-color:#0560af;">
<div class="card-body">
        <span style="color:white; padding-left:8%">แสดงโรงพยาบาลภายในจังหวัด
        <span style=" font-size: 25px;">"ฉะเชิงเทรา"</span> </span>
    </div>
</div>
</div>

{{-- ปราจีนบุรี --}}
<div class="card row">
<div id="collapse_5" class="collapse  " aria-labelledby="heading_5" data-parent="#accordion" style="background-color:#0560af;">
<div class="card-body">
        <span style="color:white; padding-left:8%">แสดงโรงพยาบาลภายในจังหวัด
        <span style=" font-size: 25px;">"ปราจีนบุรี"</span> </span>
    </div>
</div>
</div>

{{-- ระยอง --}}
<div class="card row">
<div id="collapse_6" class="collapse  " aria-labelledby="heading_6" data-parent="#accordion" style="background-color:#0560af;">
<div class="card-body">
        <span style="color:white; padding-left:8%">แสดงโรงพยาบาลภายในจังหวัด
        <span style=" font-size: 25px;">"ระยอง"</span> </span>
    </div>
</div>
</div>

{{-- สระแก้ว --}}
<div class="card row">
<div id="collapse_7" class="collapse  " aria-labelledby="heading_7" data-parent="#accordion" style="background-color:#0560af;">
    <div class="card-body">
        <span style="color:white; padding-left:8%">แสดงโรงพยาบาลภายในจังหวัด
        <span style=" font-size: 25px;">"สระแก้ว"</span> </span>
    </div>
</div>
</div>

</div> {{-- End คำตอบ accordion --}}



</div> {{-- end container-fluid --}}
@endsection
@section('footer')
