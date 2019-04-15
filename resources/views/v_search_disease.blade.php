@extends('v_master')
@section('content')
<div class="container-fluid padding" style="padding-left: 0px;">
{{-- head โรค หรือ อาการ --}}
<div class="row" style="background-color:#add5f8; padding-top:20px; padding-left:20px">
<div class="col-sm-12 set-font">
    <label><b><p>โรค หรือ อาการ</p></b></label>
</div>
</div>

{{-- ค้นหาข้อมูลที่ต้องการ --}}
<div class="row bg_header" style="background-image:url('storage/Images_inView/OAV9FP0.jpg'); height: calc(100vh - 120px); width:auto;" >
<div class="col-sm-12 content-c ">
    <div class="content-c" style="padding-top:10%; padding-bottom:10%;" width="200" height="200" >
    <label class="set-font1">กรุณากรอกสิ่งที่ต้องการค้นหา</label>
        <form>
            <div class="custom-search-input row" >
            <div class="input-group col-md-12" style="padding-left:20%;">
                <input type="text" class="search-query form-control col-md-9"
                style= "font-size:20px; height: 50px;"
                placeholder=" เช่น โรคหัวใจ โรคภูมิแพ้ ปวดหัว เป็นต้น">
                    <button class="btn btn-primary" type="button" style= "height: 46px;">
                        <i class="fa fa-search"></i>
                    </button>
            </div>
            </div>
        </form>
    </div>
</div>
</div>

{{-- โรค หรือ อาการที่ค้นหามากที่สุด --}}
<div class="section" style=" padding-top: 3%;">
<div class="row" >
    <div class="col-sm-10" style=" padding-left: 9%;">
        <h5>โรค หรือ อาการที่ค้นหามากที่สุด</h5>
    </div>
</div>
</div>

{{-- Page Card --}}
<div class="container">
<div class="row">

{{-- Team Member 1 --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/32065.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3" style="height:130px;">
        <p class="card-title mb-0">โรคหัวใจ (Heart Disease)</p>
        <div class="card-text text-black-50"></div>
        <div class="card-text text-black-50">คือ โรคต่าง ๆ ที่ส่งผลกระทบต่อการทำงานของหัวใจ โดยโรคหัวใจสามารถแบ่งย่อยได้เป็นหลายกลุ่มโรค</div>
    </div>
</div>
</div>
{{-- Team Member 2 --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/2639.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3" style="height:130px;">
        <p class="card-title mb-0">โรคหัวใจ (Heart Disease)</p>
        <div class="card-text text-black-50"></div>
        <div class="card-text text-black-50">คือ โรคต่าง ๆ ที่ส่งผลกระทบต่อการทำงานของหัวใจ โดยโรคหัวใจสามารถแบ่งย่อยได้เป็นหลายกลุ่มโรค</div>
    </div>
</div>
</div>
{{-- Team Member --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/14964.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3" style="height:130px;">
        <p class="card-title mb-0">โรคหัวใจ (Heart Disease)</p>
        <div class="card-text text-black-50"></div>
        <div class="card-text text-black-50">คือ โรคต่าง ๆ ที่ส่งผลกระทบต่อการทำงานของหัวใจ โดยโรคหัวใจสามารถแบ่งย่อยได้เป็นหลายกลุ่มโรค</div>
    </div>
</div>
</div>
{{-- Team Member 4 --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/278.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3" style="height:130px;">
        <p class="card-title mb-0">โรคหัวใจ (Heart Disease)</p>
        <div class="card-text text-black-50"></div>
        <div class="card-text text-black-50">คือ โรคต่าง ๆ ที่ส่งผลกระทบต่อการทำงานของหัวใจ โดยโรคหัวใจสามารถแบ่งย่อยได้เป็นหลายกลุ่มโรค</div>
    </div>
</div>
</div>
</div>
</div> {{-- end row page card--}}


{{-- ค้นหาด้วยหมวดหมู่ของโรค หรือ อาการ --}}
<div class="section" style=" padding-top: 5%;">
<div class="row" >
    <div class="col-sm-12" style=" padding-bottom: 2%;">
        <h2 align = 'center'><b>ค้นหาด้วยหมวดหมู่ของโรค หรือ อาการ</b></h2>
    </div>
</div>
</div>

<div class="hover01" style="margin-top:1%">
{{-- row 1 --}}
<div class="row">
<div class="col-md-3 col" id="heading_1">
<div style="margin-left:5px; margin-bottom:10px;">
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\1.โรคตา.PNG') }}"
        class=" img-fluid img-center d-flex align-items-center justify-content-between btn btn-link collapsed"
        data-toggle="collapse" data-target="#collapse_1" aria-expanded="false"
        aria-controls="collapse_1" >
    <figure>
</div>
</div>
<div class="col-md-3 col" id="heading_2">
    <div style="margin-left:5px; margin-bottom:10px; " >
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\2.โรคทางเดินอาหาร.PNG') }}"
        class=" img-fluid img-center d-flex align-items-center justify-content-between btn btn-link collapsed"
        data-toggle="collapse" data-target="#collapse_2" aria-expanded="false"
        aria-controls="collapse_2" >
    <figure>
</div>
</div>
<div class="col-md-3 col" id="heading_3">
<div style="margin-left:5px; margin-bottom:10px; ">
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\3.ระบบทางเดินหายใจ.PNG') }}"
        class=" img-fluid img-center d-flex align-items-center justify-content-between btn btn-link collapsed"
        data-toggle="collapse" data-target="#collapse_3" aria-expanded="false"
        aria-controls="collapse_3">
    <figure>
</div>
</div>
<div class="col-md-3 col" id="heading_4">
<div style="margin-left:5px; margin-bottom:10px;" >
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\4.โรคหูคอจมูก.PNG') }}"
        class=" img-fluid img-center d-flex align-items-center justify-content-between btn btn-link collapsed"
        data-toggle="collapse" data-target="#collapse_4" aria-expanded="false"
        aria-controls="collapse_4">
    <figure>
</div>
</div>
</div>

{{-- row 2 --}}
<div class="row">
<div class="col-md-3 col" id="heading_5">
<div style="margin-left:5px; margin-bottom:10px;">
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\5.โรคทางเดินอาหาร.PNG') }}"
        class=" img-fluid img-center d-flex align-items-center justify-content-between btn btn-link collapsed"
        data-toggle="collapse" data-target="#collapse_5" aria-expanded="false"
        aria-controls="collapse_5">
    <figure>
</div>
</div>
<div class="col-md-3 col" id="heading_6">
    <div style="margin-left:5px; margin-bottom:10px; " >
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\6.โรคหัวใจและหลอดเลือด.PNG') }}"
        class=" img-fluid img-center d-flex align-items-center justify-content-between btn btn-link collapsed"
        data-toggle="collapse" data-target="#collapse_6" aria-expanded="false"
        aria-controls="collapse_6">
    <figure>
</div>
</div>
<div class="col-md-3 col" id="heading_7">
<div style="margin-left:5px; margin-bottom:10px; ">
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\7.โรคระบบประสาท.PNG') }}"
        class=" img-fluid img-center d-flex align-items-center justify-content-between btn btn-link collapsed"
        data-toggle="collapse" data-target="#collapse_7" aria-expanded="false"
        aria-controls="collapse_7">
    <figure>
</div>
</div>
<div class="col-md-3 col" id="heading_8">
<div style="margin-left:5px; margin-bottom:10px;" >
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\8.โรคตับ.PNG') }}"
        class=" img-fluid img-center d-flex align-items-center justify-content-between btn btn-link collapsed"
        data-toggle="collapse" data-target="#collapse_8" aria-expanded="false"
        aria-controls="collapse_8">
    <figure>
</div>
</div>
</div>

{{-- row 3 --}}
<div class="row">
<div class="col-md-3 col" id="heading_9">
<div style="margin-left:5px; margin-bottom:10px;">
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\9.โรคกระดูกและกล้ามเนื้อ.PNG') }}"
        class=" img-fluid img-center d-flex align-items-center justify-content-between btn btn-link collapsed"
        data-toggle="collapse" data-target="#collapse_9" aria-expanded="false"
        aria-controls="collapse_9">
    <figure>
</div>
</div>
<div class="col-md-3 col" id="heading_10">
    <div style="margin-left:5px; margin-bottom:10px; " >
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\10.โรคต่อมไร้ท่อ.PNG') }}"
        class=" img-fluid img-center d-flex align-items-center justify-content-between btn btn-link collapsed"
        data-toggle="collapse" data-target="#collapse_10" aria-expanded="false"
        aria-controls="collapse_10">
    <figure>
</div>
</div>
<div class="col-md-3 col" id="heading_11">
<div style="margin-left:5px; margin-bottom:10px; ">
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\11.โรคติดเชื้อ.PNG') }}"
        class=" img-fluid img-center d-flex align-items-center justify-content-between btn btn-link collapsed"
        data-toggle="collapse" data-target="#collapse_11" aria-expanded="false"
        aria-controls="collapse_11">
    <figure>
</div>
</div>
<div class="col-md-3 col" id="heading_12">
<div style="margin-left:5px; margin-bottom:10px;" >
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\12.โรคผิวหนัง.PNG') }}"
        class=" img-fluid img-center d-flex align-items-center justify-content-between btn btn-link collapsed"
        data-toggle="collapse" data-target="#collapse_12" aria-expanded="false"
        aria-controls="collapse_12">
    <figure>
</div>
</div>
</div>

{{-- row 4 --}}
<div class="row">
<div class="col-md-3 col" id="heading_13">
<div style="margin-left:5px; margin-bottom:10px;">
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\13.โรคทางพันธุกรรม.PNG') }}"
        class=" img-fluid img-center d-flex align-items-center justify-content-between btn btn-link collapsed"
        data-toggle="collapse" data-target="#collapse_13" aria-expanded="false"
        aria-controls="collapse_13">
    <figure>
</div>
</div>
<div class="col-md-3 col" id="heading_14">
    <div style="margin-left:5px; margin-bottom:10px; " >
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\14.โรคระบาด.PNG') }}"
        class=" img-fluid img-center d-flex align-items-center justify-content-between btn btn-link collapsed"
        data-toggle="collapse" data-target="#collapse_14" aria-expanded="false"
        aria-controls="collapse_14">
    <figure>
</div>
</div>
<div class="col-md-3 col" id="heading_15">
<div style="margin-left:5px; margin-bottom:10px; ">
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\15.โรคระบบขับถ่าย.PNG') }}"
        class=" img-fluid img-center d-flex align-items-center justify-content-between btn btn-link collapsed"
        data-toggle="collapse" data-target="#collapse_15" aria-expanded="false"
        aria-controls="collapse_15">
    <figure>
</div>
</div>
<div class="col-md-3 col" id="heading_16">
<div style="margin-left:5px; margin-bottom:10px;" >
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\16.โรคติดต่อทางเพศสัมพันธ์.PNG') }}"
        class=" img-fluid img-center d-flex align-items-center justify-content-between btn btn-link collapsed"
        data-toggle="collapse" data-target="#collapse_16" aria-expanded="false"
        aria-controls="collapse_16">
    <figure>
</div>
</div>
</div>

{{-- row 5 --}}
<div class="row" style="padding-bottom:5%;">
<div class="col-md-3 col" id="heading_17">
<div style="margin-left:5px; margin-bottom:10px;">
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\17.สูตินารีเวช.PNG') }}"
        class=" img-fluid img-center d-flex align-items-center justify-content-between btn btn-link collapsed"
        data-toggle="collapse" data-target="#collapse_17" aria-expanded="false"
        aria-controls="collapse_17">
    <figure>
</div>
</div>
<div class="col-md-3 col" id="heading_18">
    <div style="margin-left:5px; margin-bottom:10px; " >
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\18.มะเร็ง.PNG') }}"
        class=" img-fluid img-center d-flex align-items-center justify-content-between btn btn-link collapsed"
        data-toggle="collapse" data-target="#collapse_18" aria-expanded="false"
        aria-controls="collapse_18">
    <figure>
</div>
</div>
<div class="col-md-3 col" id="heading_19">
<div style="margin-left:5px; margin-bottom:10px; ">
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\19.จิตเวช.PNG') }}"
        class=" img-fluid img-center d-flex align-items-center justify-content-between btn btn-link collapsed"
        data-toggle="collapse" data-target="#collapse_19" aria-expanded="false"
        aria-controls="collapse_19">
    <figure>
</div>
</div>
<div class="col-md-3 col" id="heading_20">
<div style="margin-left:5px; margin-bottom:10px;" >
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\20.กายภาพ.PNG') }}"
        class=" img-fluid img-center d-flex align-items-center justify-content-between btn btn-link collapsed"
        data-toggle="collapse" data-target="#collapse_20" aria-expanded="false"
        aria-controls="collapse_20">
    <figure>
</div>
</div>
</div>
</div> {{-- end hover --}}

{{-- คำตอบการแสดงโรคaccordion --}}
{{-- 101 โรคตา --}}
<div id="accordion" class="myaccordion ">
<div class="card row">
<div id="collapse_1" class="collapse" aria-labelledby="heading_1" data-parent="#accordion" style="background-color:#0560af;">
<div class="card-body col-md-12 ">
    <h5 style="color:white; padding-left:8%">แสดงหมวดหมู่  <span style=" font-size: 25px;">"โรคตา"</span> </h5>

{{-- page card ข้อมูลโรงพยาบาล จันทบุรี --}}
<div class="container-fluid " style="margin-bottom:2%;">

{{-- row-1 จันทบุรี --}}
<div class="row" style="padding-top:3%;">
{{-- Member1 --}}
<div class="col-md-4 no-padding lib-item " style="padding-left:3%; padding-right:3%;">
<div class="lib-panel">
    <div class="row box-shadow rounded md-0">
        <div class="col-md-5 padding">
            <img src="{{ url('storage/Images_inView/1.jpg') }}"
            class=" lib-img" width="100" height="150">
        </div>
        <div class="col-md-7" style="height:130px;" >
             <div class="lib-row lib-header">
                <h6><b>สายตาสั้น (Myopla)</b></h6>
            </div>
            <div class="lib-row lib-desc">
                <span>เป็นปัญหาของการมองเห็น ที่พบได้บ่อยที่สึดชนิดหนึ่ง ผุ้ที่มีสายตาส้งจะไม่สามารถมองเห็นวัตถุที่อยู่ระยะไกลได้</span>
            </div>
        </div>
    </div>
</div>
</div>

{{-- Member2 --}}
<div class="col-md-4 no-padding lib-item" style="padding-left:3%; padding-right:3%;">
<div class="lib-panel">
    <div class="row box-shadow rounded md-0">
        <div class="col-md-5 padding">
            <img src="{{ url('storage/Images_inView/1.jpg') }}"
            class=" lib-img" width="100" height="150">
        </div>
        <div class="col-md-7" style="height:130px;" >
             <div class="lib-row lib-header">
                <h6><b>สายตาสั้น (Myopla)</b></h6>
            </div>
            <div class="lib-row lib-desc">
                <span>เป็นปัญหาของการมองเห็น ที่พบได้บ่อยที่สึดชนิดหนึ่ง ผุ้ที่มีสายตาส้งจะไม่สามารถมองเห็นวัตถุที่อยู่ระยะไกลได้</span>
            </div>
        </div>
    </div>
</div>
</div>

{{-- Member3 --}}
<div class="col-md-4 no-padding lib-item" style="padding-left:3%; padding-right:3%;">
<div class="lib-panel">
    <div class="row box-shadow rounded md-0">
        <div class="col-md-5 padding">
            <img src="{{ url('storage/Images_inView/1.jpg') }}"
            class=" lib-img" width="100" height="150">
        </div>
        <div class="col-md-7" style="height:130px;" >
             <div class="lib-row lib-header">
                <h6><b>สายตาสั้น (Myopla)</b></h6>
            </div>
            <div class="lib-row lib-desc">
                <span>เป็นปัญหาของการมองเห็น ที่พบได้บ่อยที่สึดชนิดหนึ่ง ผุ้ที่มีสายตาส้งจะไม่สามารถมองเห็นวัตถุที่อยู่ระยะไกลได้</span>
            </div>
        </div>
    </div>
</div>
</div>

</div> {{-- End row-1 --}}

{{-- row-2 จันทบุรี --}}
<div class="row" style="padding-top:3%;">
{{-- Member1 --}}
<div class="col-md-4 no-padding lib-item" style="padding-left:3%; padding-right:3%;">
<div class="lib-panel">
    <div class="row box-shadow rounded md-0">
        <div class="col-md-5 padding">
            <img src="{{ url('storage/Images_inView/2.jpg') }}"
            class=" lib-img" width="100" height="150">
        </div>
        <div class="col-md-7" style="height:130px;" >
            <div class="lib-row lib-header">
                <h6><b>สายตาสั้น (Myopla)</b></h6>
            </div>
            <div class="lib-row lib-desc">
                <span>เป็นปัญหาของการมองเห็น ที่พบได้บ่อยที่สึดชนิดหนึ่ง ผุ้ที่มีสายตาส้งจะไม่สามารถมองเห็นวัตถุที่อยู่ระยะไกลได้</span>
            </div>
        </div>
    </div>
</div>
</div>

{{-- Member2 --}}
<div class="col-md-4 no-padding lib-item" style="padding-left:3%; padding-right:3%;">
<div class="lib-panel">
    <div class="row box-shadow rounded md-0">
        <div class="col-md-5 padding">
            <img src="{{ url('storage/Images_inView/2.jpg') }}"
            class=" lib-img" width="100" height="150">
        </div>
        <div class="col-md-7" style="height:130px;" >
             <div class="lib-row lib-header">
                <h6><b>สายตาสั้น (Myopla)</b></h6>
            </div>
            <div class="lib-row lib-desc">
                <span>เป็นปัญหาของการมองเห็น ที่พบได้บ่อยที่สึดชนิดหนึ่ง ผุ้ที่มีสายตาส้งจะไม่สามารถมองเห็นวัตถุที่อยู่ระยะไกลได้</span>
            </div>
        </div>
    </div>
</div>
</div>

{{-- Member3 --}}
<div class="col-md-4 no-padding lib-item" style="padding-left:3%; padding-right:3%;">
<div class="lib-panel">
    <div class="row box-shadow rounded md-0">
        <div class="col-md-5 padding">
            <img src="{{ url('storage/Images_inView/2.jpg') }}"
            class=" lib-img" width="100" height="150">
        </div>
        <div class="col-md-7" style="height:130px;" >
            <div class="lib-row lib-header">
                 <div class="lib-row lib-header">
                <h6><b>สายตาสั้น (Myopla)</b></h6>
            </div>
            <div class="lib-row lib-desc">
                <span>เป็นปัญหาของการมองเห็น ที่พบได้บ่อยที่สึดชนิดหนึ่ง ผุ้ที่มีสายตาส้งจะไม่สามารถมองเห็นวัตถุที่อยู่ระยะไกลได้</span>
            </div>
        </div>
    </div>
</div>
</div>

</div> {{-- End row-2 --}}

</div> {{-- container-fluid & card จันทบุรี--}}

</div>
</div>
</div> {{-- End แสดงหมวดหมู่ 101 โรคตา --}}

{{-- 102 โรคทางเดินอาหาร--}}
<div class="card row">
<div id="collapse_2" class="collapse  " aria-labelledby="heading_2" data-parent="#accordion" style="background-color:#0560af;">
<div class="card-body">
    <h5 style="color:white; padding-left:8%">แสดงหมวดหมู่  <span style=" font-size: 25px;">"โรคทางเดินอาหาร"</span></h5>
</div>
</div>
</div>

{{-- 103 ระบบทางเดินหายใจ--}}
<div class="card row">
<div id="collapse_3" class="collapse  " aria-labelledby="heading_3" data-parent="#accordion" style="background-color:#0560af;">
<div class="card-body">
        <h5 style="color:white; padding-left:8%">แสดงหมวดหมู่  <span style=" font-size: 25px;">"ระบบทางเดินหายใจ"</span> </h5>
    </div>
</div>
</div>

{{-- 104 โรคหูคอจมูก --}}
<div class="card row">
<div id="collapse_4" class="collapse  " aria-labelledby="heading_4" data-parent="#accordion" style="background-color:#0560af;">
<div class="card-body">
        <h5 style="color:white; padding-left:8%">แสดงหมวดหมู่ <span style=" font-size: 25px;">"โรคหูคอจมูก"</span> </h5>
    </div>
</div>
</div>

{{-- 105 ระบบย่อยอาหาร --}}
<div class="card row">
<div id="collapse_5" class="collapse  " aria-labelledby="heading_5" data-parent="#accordion" style="background-color:#0560af;">
<div class="card-body">
        <h5 style="color:white; padding-left:8%">แสดงหมวดหมู่ <span style=" font-size: 25px;">"ระบบย่อยอาหาร"</span> </h5>
    </div>
</div>
</div>

{{-- 106 โรคหัวใจและหลอดเลือด --}}
<div class="card row">
<div id="collapse_6" class="collapse  " aria-labelledby="heading_6" data-parent="#accordion" style="background-color:#0560af;">
<div class="card-body">
        <h5 style="color:white; padding-left:8%">แสดงหมวดหมู่ <span style=" font-size: 25px;">"โรคหัวใจและหลอดเลือด"</span> </h5>
    </div>
</div>
</div>

{{-- 107 โรคระบบประสาท --}}
<div class="card row">
<div id="collapse_7" class="collapse  " aria-labelledby="heading_7" data-parent="#accordion" style="background-color:#0560af;">
    <div class="card-body">
        <h5 style="color:white; padding-left:8%">แสดงหมวดหมู่ <span style=" font-size: 25px;">"โรคระบบประสาท"</span> </h5>
    </div>
</div>
</div>

{{-- 108 โรคตับ --}}
<div class="card row">
<div id="collapse_8" class="collapse  " aria-labelledby="heading_8" data-parent="#accordion" style="background-color:#0560af;">
    <div class="card-body">
        <h5 style="color:white; padding-left:8%">แสดงหมวดหมู่ <span style=" font-size: 25px;">"โรคตับ"</span> </h5>
    </div>
</div>
</div>

{{-- 109 โรคกระดูกและกล้ามเนื้อ --}}
<div class="card row">
<div id="collapse_9" class="collapse  " aria-labelledby="heading_9" data-parent="#accordion" style="background-color:#0560af;">
    <div class="card-body">
        <h5 style="color:white; padding-left:8%">แสดงหมวดหมู่ <span style=" font-size: 25px;">"โรคกระดูกและกล้ามเนื้อ"</span> </h5>
    </div>
</div>
</div>

{{-- 110 โรคต่อมไร้ท่อ --}}
<div class="card row">
<div id="collapse_10" class="collapse  " aria-labelledby="heading_10" data-parent="#accordion" style="background-color:#0560af;">
    <div class="card-body">
        <h5 style="color:white; padding-left:8%">แสดงหมวดหมู่ <span style=" font-size: 25px;">"โรคต่อมไร้ท่อ"</span> </h5>
    </div>
</div>
</div>

{{-- 111 โรคติดเชื้อ--}}
<div class="card row">
<div id="collapse_11" class="collapse  " aria-labelledby="heading_11" data-parent="#accordion" style="background-color:#0560af;">
<div class="card-body">
    <h5 style="color:white; padding-left:8%">แสดงหมวดหมู่  <span style=" font-size: 25px;">"โรคติดเชื้อ"</span></h5>
</div>
</div>
</div>

{{-- 112 โรคผิวหนัง--}}
<div class="card row">
<div id="collapse_12" class="collapse  " aria-labelledby="heading_12" data-parent="#accordion" style="background-color:#0560af;">
<div class="card-body">
        <h5 style="color:white; padding-left:8%">แสดงหมวดหมู่  <span style=" font-size: 25px;">"โรคผิวหนัง"</span> </h5>
    </div>
</div>
</div>

{{-- 113 โรคทางพันธุกรรม --}}
<div class="card row">
<div id="collapse_13" class="collapse  " aria-labelledby="heading_13" data-parent="#accordion" style="background-color:#0560af;">
<div class="card-body">
        <h5 style="color:white; padding-left:8%">แสดงหมวดหมู่ <span style=" font-size: 25px;">"โรคทางพันธุกรรม"</span> </h5>
    </div>
</div>
</div>

{{-- 114 โรคระบาด --}}
<div class="card row">
<div id="collapse_14" class="collapse  " aria-labelledby="heading_14" data-parent="#accordion" style="background-color:#0560af;">
<div class="card-body">
        <h5 style="color:white; padding-left:8%">แสดงหมวดหมู่ <span style=" font-size: 25px;">"โรคระบาด"</span> </h5>
    </div>
</div>
</div>

{{-- 115 โรคระบบขับถ่าย --}}
<div class="card row">
<div id="collapse_15" class="collapse  " aria-labelledby="heading_15" data-parent="#accordion" style="background-color:#0560af;">
<div class="card-body">
        <h5 style="color:white; padding-left:8%">แสดงหมวดหมู่ <span style=" font-size: 25px;">"โรคระบบขับถ่าย"</span> </h5>
    </div>
</div>
</div>

{{-- 116 โรคติดต่อทางเพศสัมพันธ์ --}}
<div class="card row">
<div id="collapse_16" class="collapse  " aria-labelledby="heading_16" data-parent="#accordion" style="background-color:#0560af;">
    <div class="card-body">
        <h5 style="color:white; padding-left:8%">แสดงหมวดหมู่ <span style=" font-size: 25px;">"โรคติดต่อทางเพศสัมพันธ์"</span> </h5>
    </div>
</div>
</div>

{{-- 117 สูตินารีเวช --}}
<div class="card row">
<div id="collapse_17" class="collapse  " aria-labelledby="heading_17" data-parent="#accordion" style="background-color:#0560af;">
    <div class="card-body">
        <h5 style="color:white; padding-left:8%">แสดงหมวดหมู่ <span style=" font-size: 25px;">"สูตินารีเวช"</span> </h5>
    </div>
</div>
</div>

{{-- 118 มะเร็ง --}}
<div class="card row">
<div id="collapse_18" class="collapse  " aria-labelledby="heading_18" data-parent="#accordion" style="background-color:#0560af;">
    <div class="card-body">
        <h5 style="color:white; padding-left:8%">แสดงหมวดหมู่ <span style=" font-size: 25px;">"มะเร็ง"</span> </h5>
    </div>
</div>
</div>

{{-- 119 จิตเวช --}}
<div class="card row">
<div id="collapse_19" class="collapse  " aria-labelledby="heading_19" data-parent="#accordion" style="background-color:#0560af;">
    <div class="card-body">
        <h5 style="color:white; padding-left:8%">แสดงหมวดหมู่ <span style=" font-size: 25px;">"จิตเวช"</span> </h5>
    </div>
</div>
</div>

{{-- 120 กายภาพ --}}
<div class="card row">
<div id="collapse_20" class="collapse  " aria-labelledby="heading_20" data-parent="#accordion" style="background-color:#0560af;">
    <div class="card-body">
        <h5 style="color:white; padding-left:8%">แสดงหมวดหมู่ <span style=" font-size: 25px;">"กายภาพ"</span> </h5>
    </div>
</div>
</div>

</div> {{-- End คำตอบ accordion --}}





</div> {{-- container-fluid --}}
@endsection
@section('footer')
