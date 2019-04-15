@extends('v_master')
@section('content')

<body>
<div class="container-fluid padding" >
{{-- head --}}
<div class="row" style="background-color:#A1DEED; ">
<div class="col-sm-4">
    <img src="{{ url('storage/Images_inView/logo.png') }}"class="img-fluid img-center"
     style="padding-top:50px; padding-bottom:5%;" width="200" height="200">
</div>

<div class="col-sm-8">
    <div style="padding-top: 8%;">
    <label class="set-font1">ค้นหาข้อมูลที่ต้องการ</label>
        <form>
            <div class="custom-search-input row" >
            <div class="input-group col-md-12" style="padding-left:0%;">
                <input type="text" class="search-query form-control col-md-9"
                style= "font-size:20px; height: 50px;"
                placeholder=" เช่น โรงพยาบาล โรคหัวใจ บทความเพื่อสุขภาพ เป็นต้น">
                    <button class=" btn btn-primary" type="button" style= "height: 46px;">
                        <i class="fa fa-search"></i>
                    </button>
            </div>
            </div>
        </form>
    </div>
</div>
</div> {{-- end row --}}

{{-- โรค หรืออาการที่ควรรู้ --}}
<div class="section" style=" padding-top: 3%;">
<div class="row">
    <div class="col-sm-10" style=" padding-left: 9%;">
        <h5>โรค หรืออาการที่ควรรู้</h5>
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
    <span class="card-title mb-0"><b>โรคหัวใจ (Heart Disease)</b></span>
        <div class="card-text text-black-50"></div>
        <span>คือ โรคต่าง ๆ ที่ส่งผลกระทบต่อการทำงานของหัวใจ โดยโรคหัวใจสามารถแบ่งย่อยได้เป็นหลายกลุ่มโรค</span>
    </div>
</div>
</div>
{{-- Team Member 2 --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/2639.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3" style="height:130px;">
    <span class="card-title mb-0"><b>โรคภูมิแพ้ (Allergies)</b></span>
        <div class="card-text text-black-50"></div>
        <span>คือ โรคต่าง ๆ ที่ส่งผลกระทบต่อการทำงานของหัวใจ โดยโรคหัวใจสามารถแบ่งย่อยได้เป็นหลายกลุ่มโรค</span>
    </div>
</div>
</div>
{{-- Team Member 3 --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/14964.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3" style="height:130px;">
    <span class="card-title mb-0"><b>เนื้องอกไขมัน (Lipoma)</b></span>
        <div class="card-text text-black-50"></div>
        <span>คือ โรคต่าง ๆ ที่ส่งผลกระทบต่อการทำงานของหัวใจ โดยโรคหัวใจสามารถแบ่งย่อยได้เป็นหลายกลุ่มโรค</span>
    </div>
</div>
</div>
{{-- Team Member 4 --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/278.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3" style="height:130px;">
    <span class="card-title mb-0"><b>สายตาสั้น (Myopia)</b></span>
        <div class="card-text text-black-50"></div>
        <span>คือ โรคต่าง ๆ ที่ส่งผลกระทบต่อการทำงานของหัวใจ โดยโรคหัวใจสามารถแบ่งย่อยได้เป็นหลายกลุ่มโรค </span>
    </div>
</div>
</div>

</div>
</div> {{-- end row page card--}}


{{-- บทความเพื่อสุขภาพ --}}
<div class="section" style=" padding-top: 3%;">
<div class="row">
    <div class="col-sm-10" style=" padding-left: 9%;">
        <h5>บทความเพื่อสุขภาพ</h5>
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
    <img src="{{ url('storage/Images_inView/123.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3" style="height:130px;">
        <span class="card-title mb-0"><b>ผื่นในเด็ก</b></span>
        <div class="card-text text-black-50"></div>
        <span>คือ โรคต่าง ๆ ที่ส่งผลกระทบต่อการทำงานของหัวใจ โดยโรคหัวใจสามารถแบ่งย่อยได้เป็นหลายกลุ่มโรค</span>
    </div>
</div>
</div>
{{-- Team Member 2 --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/skull.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3" style="height:130px;">
        <span class="card-title mb-0"><b>เคล็ดลับในการฝึกระเบียบวินัยสำหรับเด็ก</b></span>
        <div class="card-text text-black-50"></div>
        <span>คือ โรคต่าง ๆ ที่ส่งผลกระทบต่อการทำงานของหัวใจ โดยโรคหัวใจสามารถแบ่งย่อยได้เป็นหลายกลุ่มโรค </span>
    </div>
</div>
</div>
{{-- Team Member 3 --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/789.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3" style="height:130px;">
        <span class="card-title mb-0"><b>วิตามินดีกับการลดน้ำหนัก</b></span>
        <div class="card-text text-black-50"></div>
        <span>คือ โรคต่าง ๆ ที่ส่งผลกระทบต่อการทำงานของหัวใจ โดยโรคหัวใจสามารถแบ่งย่อยได้เป็นหลายกลุ่มโรค</span>
    </div>
</div>
</div>
{{-- Team Member 4 --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/yoka1.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3" style="height:130px;">
        <span class="card-title mb-0"><b>ผื่นในเด็ก</b></span>
        <div class="card-text text-black-50"></div>
        <span>คือ โรคต่าง ๆ ที่ส่งผลกระทบต่อการทำงานของหัวใจ โดยโรคหัวใจสามารถแบ่งย่อยได้เป็นหลายกลุ่มโรค</span>
    </div>
</div>
</div>

</div>
</div> {{-- end row page card--}}

{{-- แชร์ประสบการณ์ --}}
<div class="section" style=" padding-top: 3%;">
<div class="row">
    <div class="col-sm-10" style=" padding-left: 9%;">
        <h5>แชร์ประสบการณ์</h5>
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

{{-- โรงพยาบาลใกลเคียง --}}
<div class="section" style=" padding-top: 3%;">
<div class="row">
    <div class="col-sm-10" style=" padding-left: 9%;">
        <h5>โรงพยาบาลใกลเคียง</h5>
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

{{-- แผนที่โรงพยาบาลใกล้เคียง --}}
<div class="section" style=" padding-top: 3%;">
<div class="row">
    <div class="col-sm-10" style=" padding-left: 9%;">
        <h5>แผนที่โรงพยาบาลใกล้เคียง</h5>
    </div>
</div>
</div>
{{-- Google map --}}
<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
        <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
        style="border:0" allowfullscreen></iframe>
</div>

</div> {{-- end container-fluid --}}
</body>

@endsection
@section('footer')
