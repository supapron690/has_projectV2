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
<div class="row" style="background-image:url('storage/Images_inView/OAV9FP0.jpg'); background-size: cover; height: 70vh;" >
<div class="col-sm-12 content-c ">
    <div class="content-c" style="padding-top:10%; padding-bottom:10%;" width="200" height="200" >
    <label class="set-font1">กรุณากรอกสิ่งที่ต้องการค้นหา</label>
        <form>
            <div class="custom-search-input row" >
            <div class="input-group col-md-12" style="padding-left:30%;" >
                <input type="text" class="search-query form-control col-md-7"
                    style= "font-size:20px; height: 50px;"
                    placeholder="เช่น โรคหัวใจ โรคภูมิแพ้ ปวดหัว เป็นต้น">
                <button class="btn btn-danger" type="button" style= "height: 50px;">
                    <span class="fa fa-search"></span>
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
    <div class="card-body text-left font-size3">
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
    <div class="card-body text-left font-size3">
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
    <div class="card-body text-left font-size3">
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
    <div class="card-body text-left font-size3">
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
    <div class="col-sm-10" style=" padding-left: 9%;">
        <h5>ค้นหาด้วยหมวดหมู่ของโรค หรือ อาการ</h5>
    </div>
</div>
</div>

<div class="hover01" style="margin-top:1%">
{{-- row 1 --}}
<div class="row">
<div class="col-md-3 col">
<div style="margin-left:5px; margin-bottom:10px;">
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\1.โรคตา.PNG') }}">
    <figure>
</div>
</div>
<div class="col-md-3 col">
    <div style="margin-left:5px; margin-bottom:10px; " >
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\2.โรคทางเดินอาหาร.PNG') }}" >
    <figure>
</div>
</div>
<div class="col-md-3 col">
<div style="margin-left:5px; margin-bottom:10px; ">
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\3.ระบบทางเดินหายใจ.PNG') }}" >
    <figure>
</div>
</div>
<div class="col-md-3 col">
<div style="margin-left:5px; margin-bottom:10px;" >
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\4.โรคหูคอจมูก.PNG') }}">
    <figure>
</div>
</div>
</div>

{{-- row 2 --}}
<div class="row">
<div class="col-md-3 col">
<div style="margin-left:5px; margin-bottom:10px;">
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\5.โรคทางเดินอาหาร.PNG') }}">
    <figure>
</div>
</div>
<div class="col-md-3 col">
    <div style="margin-left:5px; margin-bottom:10px; " >
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\6.โรคหัวใจและหลอดเลือด.PNG') }}" >
    <figure>
</div>
</div>
<div class="col-md-3 col">
<div style="margin-left:5px; margin-bottom:10px; ">
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\7.โรคระบบประสาท.PNG') }}" >
    <figure>
</div>
</div>
<div class="col-md-3 col">
<div style="margin-left:5px; margin-bottom:10px;" >
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\8.โรคตับ.PNG') }}">
    <figure>
</div>
</div>
</div>

{{-- row 3 --}}
<div class="row">
<div class="col-md-3 col">
<div style="margin-left:5px; margin-bottom:10px;">
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\9.โรคกระดูกและกล้ามเนื้อ.PNG') }}">
    <figure>
</div>
</div>
<div class="col-md-3 col">
    <div style="margin-left:5px; margin-bottom:10px; " >
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\10.โรคต่อมไร้ท่อ.PNG') }}" >
    <figure>
</div>
</div>
<div class="col-md-3 col">
<div style="margin-left:5px; margin-bottom:10px; ">
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\11.โรคติดเชื้อ.PNG') }}" >
    <figure>
</div>
</div>
<div class="col-md-3 col">
<div style="margin-left:5px; margin-bottom:10px;" >
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\12.โรคผิวหนัง.PNG') }}">
    <figure>
</div>
</div>
</div>

{{-- row 4 --}}
<div class="row">
<div class="col-md-3 col">
<div style="margin-left:5px; margin-bottom:10px;">
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\13.โรคทางพันธุกรรม.PNG') }}">
    <figure>
</div>
</div>
<div class="col-md-3 col">
    <div style="margin-left:5px; margin-bottom:10px; " >
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\14.โรคระบาด.PNG') }}" >
    <figure>
</div>
</div>
<div class="col-md-3 col">
<div style="margin-left:5px; margin-bottom:10px; ">
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\15.โรคระบบขับถ่าย.PNG') }}" >
    <figure>
</div>
</div>
<div class="col-md-3 col">
<div style="margin-left:5px; margin-bottom:10px;" >
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\16.โรคติดต่อทางเพศสัมพันธ์.PNG') }}">
    <figure>
</div>
</div>
</div>

{{-- row 5 --}}
<div class="row" style="padding-bottom:5%;">
<div class="col-md-3 col">
<div style="margin-left:5px; margin-bottom:10px;">
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\17.สูตินารีเวช.PNG') }}">
    <figure>
</div>
</div>
<div class="col-md-3 col">
    <div style="margin-left:5px; margin-bottom:10px; " >
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\18.มะเร็ง.PNG') }}" >
    <figure>
</div>
</div>
<div class="col-md-3 col">
<div style="margin-left:5px; margin-bottom:10px; ">
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\19.จิตเวช.PNG') }}" >
    <figure>
</div>
</div>
<div class="col-md-3 col">
<div style="margin-left:5px; margin-bottom:10px;" >
    <figure>
        <img class="card-img-top" src="{{ url('storage/Images_inView\ปุ่มโรค\20.กายภาพ.PNG') }}">
    <figure>
</div>
</div>
</div>
</div> {{-- end hover --}}





</div>
@endsection
@section('footer')
