@extends('v_master')
@section('content')
<div class="container-fluid padding" style="padding-left: 0px;">
{{-- head บทความเพื่อสุขภาพ --}}
<div class="row" style="background-color:#add5f8; padding-top:20px; padding-left:20px">
<div class="col-sm-12 set-font">
    <label><b><p>บทความเพื่อสุขภาพ</p></b></label>
</div>
</div>

{{-- ค้นหาข้อมูลที่ต้องการ --}}
<div class="row" style="background-image:url('storage/Images_inView/180278.jpg');background-size: cover; width: 100vw; height: 70vh;  ">
<div class="col-sm-12 content-c ">
    <div class="content-c" style="padding-top:10%; padding-bottom:10%;" width="200" height="200" >
    <label class="set-font1">กรุณากรอกสิ่งที่ต้องการค้นหา</label>
    <form>
        <div class="custom-search-input row" >
        <div class="input-group col-md-12" style="padding-left:30%;" >
            <input type="text" class="search-query form-control col-md-7"
                style= "font-size:20px; height: 50px;"
                placeholder="เช่น โรงพยาบาล โรคหัวใจ บทความสุขภาพ เป็นต้น">
                    <button class="btn btn-danger" type="button" style= "height: 50px;">
                        <span class="fa fa-search"></span>
                    </button>
        </div>
        </div>
    </form>
    </div>
</div>
</div>

{{-- บทความเพื่อสุขภาพ ด้าน การรักษา --}}
<div class="section" style=" padding-top: 3%;">
<div class="row" >
    <div class="col-sm-10" style=" padding-left: 9%;">
        <h5>บทความเพื่อสุขภาพ ด้าน การรักษา</h5>
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
    <div class="card-body text-left font-size3">
        <p class="card-title mb-0">ผื่นแพ้ในเด็ก</p>
        <div class="card-text text-black-50"></div>
        <div class="card-text text-black-50">เป็นโรคที่พบได้บ่อยและน่าท้อแท้ใจสำหรับทั้งพ่อแม่และลูก เพราะนอกจากจะไม่มีทางหายแล้วยังรักษาได้ยาก</div>
    </div>
</div>
</div>
{{-- Team Member 2 --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/pc-2.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3">
        <p class="card-title mb-0">อาการจากภาวะตั้งครรภ์ (Pregnancy Symtoms)</p>
        <div class="card-text text-black-50"></div>
        <div class="card-text text-black-50">คือ โรคต่าง ๆ ที่ส่งผลกระทบต่อการทำงานของหัวใจ โดยโรคหัวใจสามารถแบ่งย่อยได้เป็นหลายกลุ่มโรค</div>
    </div>
</div>
</div>
{{-- Team Member --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/pc-3.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3">
        <p class="card-title mb-0">ต่อมทอนซิลอักเสบ สาเหตุ อาการ และวิธีรักษา</p>
        <div class="card-text text-black-50"></div>
        <div class="card-text text-black-50">เนื้องอกไขมันเป็นก้อนไขมันที่อยู่ระหว่างชั้นผิวหนังกบชั้นกล้ามเนื้อที่อยู่ข้างใต้ โดยมีลักษณะหยุ่นๆ คล้ายยาง</div>
    </div>
</div>
</div>
{{-- Team Member 4 --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/pc-4.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3">
        <p class="card-title mb-0">เด็กสมาธิสั้น: อาหารที่ควรกินให้น้อยลง</p>
        <div class="card-text text-black-50"></div>
        <div class="card-text text-black-50">มีการประมาณกันในปี 2011 ว่า 12% ของเด็กอายุ 15-17 ปี ได้รับการวินิจฉัยว่ามีภาวะสมาธสั้น (Attention Defi</div>
    </div>
</div>
</div>
</div>
</div> {{-- end row page card--}}

{{-- บทความเพื่อสุขภาพ ด้าน ชีวิตชีวา --}}
<div class="section" style=" padding-top: 3%;">
<div class="row" >
    <div class="col-sm-10" style=" padding-left: 9%;">
        <h5>บทความเพื่อสุขภาพ ด้าน ชีวิตชีวา</h5>
    </div>
</div>
</div>

{{-- Page Card --}}
<div class="container">
<div class="row">

{{-- Team Member 1 --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/ph-1.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3">
        <p class="card-title mb-0">28 วิธีพักสมองสำหรับเด็กที่มีชีวิตยุ่งเหยิง</p>
        <div class="card-text text-black-50"></div>
        <div class="card-text text-black-50">ในห้องเรียน คุณครูอาจใช้วิธีการพักสมอง เช่น Goodle หรือ HOPSports กิจกรรมสั้น ๆ เหล่านี้จะช่วยให้</div>
    </div>
</div>
</div>
{{-- Team Member 2 --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/456.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3">
        <p class="card-title mb-0">เคล็ดลับในการฝึกระเบียบวินัยสำหรับเด็ก</p>
        <div class="card-text text-black-50"></div>
        <div class="card-text text-black-50">การปรับปรุงพฤติกรรมของเด็กนั้นไม่จำเป็นจะต้องใช้วิธีการใหม่ ๆ เสมอไป บางครั้งการเปลี่ยนแปลงเพียงเล็ก</div>
    </div>
</div>
</div>
{{-- Team Member --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/ph-3.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3">
        <p class="card-title mb-0">ผู้ใหญ่ที่มีความบกพร่องในการเรียนรู้ที่ทำงาน</p>
        <div class="card-text text-black-50"></div>
        <div class="card-text text-black-50">ก่อนที่โครงการการศึกษาพิเศษจะเกิดขึ้น เด็กนักเรียนที่มีภาวะบกพร่องทางการเรียนรู้มักถูกมองว่าเป็นผู้ที่เรียนรู้ช้า</div>
    </div>
</div>
</div>
{{-- Team Member 4 --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/987.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3">
        <p class="card-title mb-0">การดูแลผู้ป่วยระยะสุดท้ายแบบประคับประคอง</p>
        <div class="card-text text-black-50"></div>
        <div class="card-text text-black-50">ในปี พ.ศ.2533 องค์การอนามัยโลกได้ให้คำจำกัดความของ Palliative Care ว่าเป็น วิธีการดูแลผู้ป่วยที่เป็นโรคที่</div>
    </div>
</div>
</div>
</div>
</div> {{-- end row page card--}}

{{-- บทความเพื่อสุขภาพ ด้าน โภชนาการ --}}
<div class="section" style=" padding-top: 3%;">
<div class="row" >
    <div class="col-sm-10" style=" padding-left: 9%;">
        <h5>บทความเพื่อสุขภาพ ด้าน โภชนาการ</h5>
    </div>
</div>
</div>

{{-- Page Card --}}
<div class="container">
<div class="row">

{{-- Team Member 1 --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/pe-1.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3">
        <p class="card-title mb-0">ประโยชน์ของผักบุ้ง ที่มากกว่าแค่บำรุงสายตา</p>
        <div class="card-text text-black-50"></div>
        <div class="card-text text-black-50">ผักบุ้ง มีชื่อเรียกอื่นว่า ผักทอดยอด เป็นอาหารเพื่อสุขภาพที่รู้จักมักคุ้นกันดี เพราะมีส่วนช่วยในการบำรุงสายตา</div>
    </div>
</div>
</div>
{{-- Team Member 2 --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/pe-2.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3">
        <p class="card-title mb-0">งานวิจัยที่บอกว่าเกลือที่มากขึ้นอาจจะดีกว่า</p>
        <div class="card-text text-black-50"></div>
        <div class="card-text text-black-50">เกลือถูกใช้กันโดยทั่วไป ซึ่งการศึกษาเร็ว ๆ นี้ดูจะขัดกับคำแนะนำเกี่ยวกับปริมาณเกลือที่เหมาะสมในการบริโภคใน</div>
    </div>
</div>
</div>
{{-- Team Member --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/789.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3">
        <p class="card-title mb-0">วิตามินดีกับการลดน้ำหนัก</p>
        <div class="card-text text-black-50"></div>
        <div class="card-text text-black-50">คือ โรคต่าง ๆ ที่ส่งผลกระทบต่อการทำงานของหัวใจ โดยโรคหัวใจสามารถแบ่งย่อยได้เป็นหลายกลุ่มโรค</div>
    </div>
</div>
</div>
{{-- Team Member 4 --}}
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-0 shadow">
    <img src="{{ url('storage/Images_inView/pe-4.jpg') }}" class="card-img-top" width="100" height="200">
    <div class="card-body text-left font-size3">
        <p class="card-title mb-0">คีโตเจนิกไดเอ็ท สูตรลดน้ำหนัก</p>
        <div class="card-text text-black-50"></div>
        <div class="card-text text-black-50">คือ โรคต่าง ๆ ที่ส่งผลกระทบต่อการทำงานของหัวใจ โดยโรคหัวใจสามารถแบ่งย่อยได้เป็นหลายกลุ่มโรค</div>
    </div>
</div>
</div>
</div>
</div> {{-- end row page card--}}

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







</div>


@endsection
@section('footer')
