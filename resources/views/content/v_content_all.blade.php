@extends('v_master')
@section('content')


<div class="container-fluid padding">
{{-- head blue --}}
<div class="row" style="background-color:#add5f8; padding-top:20px; padding-left:20px">
<div class="col-md-12 set-font">
    <label><b><span>ดูทั้งหมด</span></b></label>
</div>
</div>
{{-- head gray--}}
<div>
<div class="row" style="background-color:#e5eaed;">
<div class="col-md-5">
    <div style="padding-top:11%; padding-left:5%">
        <label class="set-font1">หมวดหมู่</label>
        <form>
            {{-- select --}}
            <div class="custom-search-input row" >
            <select class="browser-default custom-select custom-select-lg mb-3">
                <option selected>ทั้งหมด</option>
                <option value="1">บทความเพื่อสุขภาพ ด้าน การรักษา</option>
                <option value="2">บทความเพื่อสุขภาพ ด้าน ชีวิตชีวา</option>
                <option value="3">บทความเพื่อสุขภาพ ด้าน โภชนาการ</option>
                <option value="4">แชร์ประสบการณ์ด้านการรักษา</option>
                <option value="5">โรงพยาบาลใกลเคียง</option>
            </select>
            </div>
        </form>
    </div>
</div>

<div class="col-sm-7">
<div style="padding-top: 8%;">
    <label class="set-font1">ค้นหาข้อมูลที่ต้องการ</label>
        <form>
            <div class="custom-search-input row" >
            <div class="input-group col-md-12" style="padding-left:0%;">
                <input type="text" class="search-query form-control col-md-12"
                style= "font-size:20px; height: 50px;"
                placeholder=" เช่น โรงพยาบาล โรคหัวใจ บทความเพื่อสุขภาพ เป็นต้น">
                    <button class="btn btn-danger" type="button" style= "height: 50px;">
                        <span class="fa fa-search"></span>
                    </button>
            </div>
            </div>
        </form>
</div>
{{-- ปุ่มค้นหา --}}
<div class="row">
<div class="col-md-3 font-size3" style="padding-top:3%; padding-bottom:3%;">
    <button type="button" class="btn font-size"
        style="height:40px; width:200px; color:white; background-color:#03A9F4" >ค้นหา
    </button>
</div>
</div>

</div> {{-- end class col-sm-7 --}}
</div> {{-- end row --}}



{{-- content --}}
{{-- Page Card 1--}}
<div class="container" style=" padding-top: 3%;">
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

{{-- Page Card 2 --}}
<div class="container" style=" padding-top: 3%;">
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

{{-- Page Card 3 --}}
<div class="container" style=" padding-top: 3%;">
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


@endsection
@section('footer')
