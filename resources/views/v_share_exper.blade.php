@extends('v_master')
@section('content')
<div class="container-fluid padding" style="padding-left: 0px;">
{{-- head แชร์ประสบการณ์ --}}
<div class="row" style="background-color:#add5f8; padding-top:20px; padding-left:20px">
    <div class="col-sm-12 set-font">
        <label><b><p>แชร์ประสบการณ์</p></b></label>
    </div>
</div>

{{-- ค้นหาข้อมูลที่ต้องการ --}}
<div class="row bg_header" style="background-image:url('storage/Images_inView/OBFCYE0.jpg'); height: calc(100vh - 120px); width:auto;" >
<div class="col-sm-12 content-c ">
    <div class="content-c" style="padding-top:6%; padding-bottom:10%;" >
    <label class="set-font1">มาแบ่งปันประสบการณ์ด้านสุขภาพกันเถอะ</label>
        <form>
            <div style="padding-top:4%;">
                <a href="http://localhost:8000/share"><button type="button" class="btn btn-success"><b>แชร์ประสบการณ์</b></button></a>
            </div>
        </form>
    </div>
</div>
</div>

</div>

{{-- แชร์ประสบการณ์ด้านการรักษา --}}
<div class="section" style=" padding-top: 3%;">
<div class="row">
    <div class="col-sm-10" style=" padding-left: 9%;">
        <h5>แชร์ประสบการณ์ด้านการรักษา</h5>
    </div>
    <div class="col-sm-2 font-size2" style="text-align:right">
    <a href="http://localhost:8000/content_all">
        <span>+ดูทั้งหมด</span>
    </a>
    </div>
</div>
</div>

{{-- Page Card --}}
<div class="container">
<div class="row">
{{-- Team Member 1 --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
<a href="http://localhost:8000/content_share">
    <img src="{{ url('storage/Images_inView/429196.jpg') }}" class="card-img-top" width="100" height="200">
</a>
    <div class="card-body text-left font-size3" style="height:130px;">
        <span class="card-title mb-0"><b>วิธีแก้อาการนอนหลับยากเกินไป</b></span>
        <div class="card-text text-black-50"></div>
        <span>สมาชิก: <span>วรศักดิ์</span></span>
        <div class="card-text text-black-50"></div>
        <span>8 มกราคม 2562 <span>เวลา: 12.30 น. </span></span>
    </div>
</div>
</div>
{{-- Team Member 2 --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/skull.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3" style="height:130px;">
        <span class="card-title mb-0"><b>รีวิว อาการไซนัสอักเสบเรื้อรัง</b></span>
        <div class="card-text text-black-50"></div>
        <span>สมาชิก: <span>สุภาพร</span></span>
        <div class="card-text text-black-50"></div>
        <span>7 มกราคม 2562 <span>เวลา: 11.20 น. </span></span>
    </div>
</div>
</div>
{{-- Team Member 3 --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/human.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3" style="height:130px;">
        <span class="card-title mb-0"><b>เมื่อฉันป่วยเป็นโรคจิตเวช 5 ปี และหายใน 6 เดือน </b></span>
        <div class="card-text text-black-50"></div>
        <span>สมาชิก: <span>พิชญ์สิริน อุษาวิโรจน์</span></span>
        <div class="card-text text-black-50"></div>
        <span>6 มกราคม 2562 <span>เวลา: 10.31 น. </span></span>
    </div>
</div>
</div>
{{-- Team Member 4 --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/yoka1.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3" style="height:130px;">
        <span class="card-title mb-0"><b>การรักษาหมอนรองกระดูกทับเส้น</b></span>
        <div class="card-text text-black-50"></div>
        <span>สมาชิก: <span>วรศักดิ์</span></span>
        <div class="card-text text-black-50"></div>
        <span>8 มกราคม 2562 <span>เวลา: 12.30 น. </span></span>
    </div>
</div>
</div>

</div>
</div> {{-- end row page card--}}


{{-- แชร์ประสบการณ์ด้านชีวิตชีวา --}}
<div class="section" style=" padding-top: 3%;">
<div class="row">
    <div class="col-sm-10" style=" padding-left: 9%;">
        <h5>แชร์ประสบการณ์ด้านชีวิตชีวา</h5>
    </div>
    <div class="col-sm-2 font-size2" style="text-align:right">
    <a href="http://localhost:8000/content_all">
        <span>+ดูทั้งหมด</span>
    </a>
    </div>
</div>
</div>

{{-- Page Card --}}
<div class="container">
<div class="row">
{{-- Team Member 1 --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/book.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3" style="height:130px;">
        <span class="card-title mb-0"><b>ทดสอบกรองฝุ่น PM 2.5 ในรถยนต์</b></span>
        <div class="card-text text-black-50"></div>
        <span>สมาชิก: <span>วรศักดิ์</span></span>
        <div class="card-text text-black-50"></div>
        <span>8 มกราคม 2562 <span>เวลา: 12.30 น. </span></span>
    </div>
</div>
</div>
{{-- Team Member 2 --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/runner.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3" style="height:130px;">
        <span class="card-title mb-0"><b>มาราธอนแรก ซ้อมตามแผน วิ่งตามแผน จบสวย ๆ</b></span>
        <div class="card-text text-black-50"></div>
        <span>สมาชิก: <span>สุภาพร</span></span>
        <div class="card-text text-black-50"></div>
        <span>7 มกราคม 2562 <span>เวลา: 11.20 น. </span></span>
    </div>
</div>
</div>
{{-- Team Member 3 --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/slim.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3" style="height:130px;">
        <span class="card-title mb-0"><b>รวมท่าเด็ด สร้างกล้ามท้องเลข 11 ภายใน 4 เดือน</b></span>
        <div class="card-text text-black-50"></div>
        <span>สมาชิก: <span>พิชญ์สิริน อุษาวิโรจน์</span></span>
        <div class="card-text text-black-50"></div>
        <span>6 มกราคม 2562 <span>เวลา: 10.31 น. </span></span>
    </div>
</div>
</div>
{{-- Team Member 4 --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/fat.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3" style="height:130px;">
        <span class="card-title mb-0"><b>22 กิโลที่หายไปตอนนี้เราทำได้แล้ว</b></span>
        <div class="card-text text-black-50"></div>
        <span>สมาชิก: <span>วรศักดิ์</span></span>
        <div class="card-text text-black-50"></div>
        <span>8 มกราคม 2562 <span>เวลา: 12.30 น. </span></span>
    </div>
</div>
</div>

</div>
</div> {{-- end row page card--}}


{{-- แชร์ประสบการณ์ด้านโภชนาการ --}}
<div class="section" style=" padding-top: 3%;">
<div class="row">
    <div class="col-sm-10" style=" padding-left: 9%;">
        <h5>แชร์ประสบการณ์ด้านโภชนาการ</h5>
    </div>
    <div class="col-sm-2 font-size2" style="text-align:right">
    <a href="http://localhost:8000/content_all">
        <span>+ดูทั้งหมด</span>
    </a>
    </div>
</div>
</div>

{{-- Page Card --}}
<div class="container">
<div class="row">
{{-- Team Member 1 --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/pig.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3" style="height:130px;">
        <span class="card-title mb-0"><b>สุขภาพดีขึ้นเพียงแค่ลิกกินหมูปิ้ง และชาเย็น</b></span>
        <div class="card-text text-black-50"></div>
        <span>สมาชิก: <span>วรศักดิ์</span></span>
        <div class="card-text text-black-50"></div>
        <span>8 มกราคม 2562 <span>เวลา: 12.30 น. </span></span>
    </div>
</div>
</div>
{{-- Team Member 2 --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/fish.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3" style="height:130px;">
        <span class="card-title mb-0"><b>ไก่ทอด ปลาทอด กับสุขภาพหัวใจ</b></span>
        <div class="card-text text-black-50"></div>
        <span>สมาชิก: <span>สุภาพร</span></span>
        <div class="card-text text-black-50"></div>
        <span>7 มกราคม 2562 <span>เวลา: 11.20 น. </span></span>
    </div>
</div>
</div>
{{-- Team Member 3 --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/bean.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3" style="height:130px;">
        <span class="card-title mb-0"><b>ถั่ว 5 สี ธัญพืชดี ช่วยปรับสมดุลในร่างกาย</b></span>
        <div class="card-text text-black-50"></div>
        <span>สมาชิก: <span>พิชญ์สิริน อุษาวิโรจน์</span></span>
        <div class="card-text text-black-50"></div>
        <span>6 มกราคม 2562 <span>เวลา: 10.31 น. </span></span>
    </div>
</div>
</div>
{{-- Team Member 4 --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/veget.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3" style="height:130px;">
        <span class="card-title mb-0"><b>หัวไชเท้า สรพพคุณเยอะ รักษาฝ้า - บำรุงร่างกาย</b></span>
        <div class="card-text text-black-50"></div>
        <span>สมาชิก: <span>วรศักดิ์</span></span>
        <div class="card-text text-black-50"></div>
        <span>8 มกราคม 2562 <span>เวลา: 12.30 น. </span></span>
    </div>
</div>
</div>

</div>
</div> {{-- end row page card--}}

@endsection
@section('footer')
