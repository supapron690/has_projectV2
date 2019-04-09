@extends('v_master')
@section('content')

<div class="container-fluid padding">
<div class="row" style="background-color:#A1DEED; ">
    <div class="col-sm-4">
        <img src="{{ url('storage/Images_inView/logo.png') }}"class="img-fluid img-center"
         style="padding-top:50px; padding-bottom:50px;" width="200" height="200">
    </div>

    <div class="col-sm-8">
    <div style="padding-top: 8%;">
    <label class="set-font1">ค้นหาข้อมูลที่ต้องการ</label>
        <form>
        <div class="custom-search-input" >
            <div class="input-group col-md-8 ">
            <input type="text" class="search-query form-control"
            style= "font-size:20px; height: 50px;" placeholder="เช่น โรงพยาบาล โรคหัวใจ บทความเพื่อสุขภาพ เป็นต้น">
                <button class="btn btn-danger" type="button" style= "height: 50px;">
                    <span class="fa fa-search"></span>
                </button>

            </div>
        </div>
        </form>
    </div>
    </div>
</div>

    <!-- โรค หรืออาการที่ควรรู้-->
    <div class="section" style=" padding-top: 3%;">
            <div class="row">
                <div class="col-sm-10" style=" padding-left: 9%;">
                    <h5>บทความเพื่อสุขภาพ</h5>
                </div>
                <div class="col-sm-2 font-size2" style="text-align:right">
                    <span>+ดูทั้งหมด</span>
                </div>
            </div>
        </div>
        <!-- Page Card -->
        <div class="container">
        <div class="row">
            <!-- Team Member 1 -->
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
            <!-- Team Member 2 -->
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
            <!-- Team Member 3 -->
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
            <!-- Team Member 4 -->
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
        <!-- /.row -->
        </div>

    <!-- บทความเพื่อสุขภาพ -->
    <div class="section" style=" padding-top: 3%;">
        <div class="row">
            <div class="col-sm-10" style=" padding-left: 9%;">
                <h5>บทความเพื่อสุขภาพ</h5>
            </div>
            <div class="col-sm-2 font-size2" style="text-align:right">
                <span>+ดูทั้งหมด</span>
            </div>
        </div>
    </div>
    <!-- Page Card -->
    <div class="container">
    <div class="row">
        <!-- Team Member 1 -->
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow">
            <img src="{{ url('storage/Images_inView/123.jpg') }}" class="card-img-top" width="100" height="200">
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
            <img src="{{ url('storage/Images_inView/456.jpg') }}" class="card-img-top" width="100" height="200">
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
            <img src="{{ url('storage/Images_inView/789.jpg') }}" class="card-img-top" width="100" height="200">
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
            <img src="{{ url('storage/Images_inView/987.jpg') }}" class="card-img-top" width="100" height="200">
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


    <!--  โรงพยาบาลใกล้เคียง -->
    <div class="section" style=" padding-top: 3%;">
    <div class="row">
        <div class="col-sm-10" style=" padding-left: 9%;">
            <h5>โรงพยาบาลใกล้เคียง</h5>
        </div>
        <div class="col-sm-2 font-size2" style="text-align:right">
            <span>+ดูทั้งหมด</span>
        </div>
    </div>
    </div>

    <!-- Page Card -->
    <div class="container">
    <div class="row">
        <!-- Team Member 1 -->
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
        <!-- Team Member 2 -->
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
            <img src="{{ url('storage/Images_inView/โรงพยาบาล/7957.jpg') }}" class="card-img-top" width="100" height="200">
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

    <!--Google map-->
    <div class="section" style=" padding-top: 3%;">
    <div class="row">
        <div class="col-sm-10" style=" padding-left: 9%;">
            <h5>แผนที่โรงพยาบาลใกล้เคียง</h5>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-md-12" >
        <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
            <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
            style="border:0" allowfullscreen></iframe>
        </div>
        </div>
    </div>

    <!--Google Maps-->

</div> <!-- End -->

@endsection
@section('footer')
