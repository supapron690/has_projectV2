@extends('v_master')
@section('content')

<div class="container-fluid padding" >

    <div class="row" style="background-color:#A1DEED; ">
        <div class="col-sm-4">
            <img src="{{ url('storage/Images_inView/logo.png') }}"class="img-fluid img-center"
            style="padding-top:20px; padding-bottom:20px;" width="200" height="200">
        </div>
        <div class="col-sm-8">
            <div style="padding-top: 8%;">
            <label class="set-font1">ค้นหาข้อมูลที่ต้องการ</label>
                <form class="row ">
                <div class="col-md-6" style="padding-right: 0px;">
                    <input type="text" class="form-control" placeholder="เช่น โรงพยาบาล โรคหัวใจ บทความเพื่อสุขภาพ เป็นต้น">
                </div>
                <div class="col-md-1" style="padding-left: 0px;">
                    <button class="btn btn-secondary" type="button">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                    
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
                <div class="col-sm-2 " style="text-align:right">
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
                <div class="card-body text-center">
                    <h5 class="card-title mb-0">Team Member</h5>
                    <div class="card-text text-black-50">Web Developer</div>
                </div>
            </div>
            </div>
            <!-- Team Member 2 -->
            <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow">
                    <img src="{{ url('storage/Images_inView/2639.jpg') }}" class="card-img-top" width="100" height="200">
                <div class="card-body text-center">
                    <h5 class="card-title mb-0">Team Member</h5>
                    <div class="card-text text-black-50">Web Developer</div>
                </div>
            </div>
            </div>
            <!-- Team Member 3 -->
            <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow">
                    <img src="{{ url('storage/Images_inView/14964.jpg') }}" class="card-img-top" width="100" height="200">
                <div class="card-body text-center">
                    <h5 class="card-title mb-0">Team Member</h5>
                    <div class="card-text text-black-50">Web Developer</div>
                </div>
            </div>
            </div>
            <!-- Team Member 4 -->
            <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow">
                    <img src="{{ url('storage/Images_inView/278.jpg') }}" class="card-img-top" width="100" height="200">
                <div class="card-body text-center">
                    <h5 class="card-title mb-0">Team Member</h5>
                    <div class="card-text text-black-50">Web Developer</div>
                </div>
            </div>
            </div>
        </div>
        <!-- /.row -->
        </div>

    <!-- บทความเพื่อสุขภาพ -->
    <div class="section" style=" padding-top: 7%;">
        <div class="row">
            <div class="col-sm-10" style=" padding-left: 9%;">
                <h5>บทความเพื่อสุขภาพ</h5>
            </div>
            <div class="col-sm-2 " style="text-align:right">
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
            <div class="card-body text-center">
                <h5 class="card-title mb-0">Team Member</h5>
                <div class="card-text text-black-50">Web Developer</div>
            </div>
        </div>
        </div>
        <!-- Team Member 2 -->
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow">
                <img src="{{ url('storage/Images_inView/456.jpg') }}" class="card-img-top" width="100" height="200">
            <div class="card-body text-center">
                <h5 class="card-title mb-0">Team Member</h5>
                <div class="card-text text-black-50">Web Developer</div>
            </div>
        </div>
        </div>
        <!-- Team Member 3 -->
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow">
                <img src="{{ url('storage/Images_inView/789.jpg') }}" class="card-img-top" width="100" height="200">
            <div class="card-body text-center">
                <h5 class="card-title mb-0">Team Member</h5>
                <div class="card-text text-black-50">Web Developer</div>
            </div>
        </div>
        </div>
        <!-- Team Member 4 -->
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow">
                <img src="{{ url('storage/Images_inView/987.jpg') }}" class="card-img-top" width="100" height="200">
            <div class="card-body text-center">
                <h5 class="card-title mb-0">Team Member</h5>
                <div class="card-text text-black-50">Web Developer</div>
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
        <div class="col-sm-2 " style="text-align:right">
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
            <div class="card-body text-center">
                <h5 class="card-title mb-0">Team Member</h5>
                <div class="card-text text-black-50">Web Developer</div>
            </div>
        </div>
        </div>
        <!-- Team Member 2 -->
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow">
                <img src="{{ url('storage/Images_inView/โรงพยาบาล/รพม.บูรพา.jpg') }}" class="card-img-top" width="100" height="200">
            <div class="card-body text-center">
                <h5 class="card-title mb-0">Team Member</h5>
                <div class="card-text text-black-50">Web Developer</div>
            </div>
        </div>
        </div>
        <!-- Team Member 3 -->
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow">
                <img src="{{ url('storage/Images_inView/โรงพยาบาล/รพสมเด็จศรีราชา.jpg') }}" class="card-img-top" width="100" height="200">
            <div class="card-body text-center">
                <h5 class="card-title mb-0">Team Member</h5>
                <div class="card-text text-black-50">Web Developer</div>
            </div>
        </div>
        </div>
        <!-- Team Member 4 -->
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow">
                <img src="{{ url('storage/Images_inView/โรงพยาบาล/7957.jpg') }}" class="card-img-top" width="100" height="200">
            <div class="card-body text-center">
                <h5 class="card-title mb-0">Team Member</h5>
                <div class="card-text text-black-50">Web Developer</div>
            </div>
        </div>
        </div>
    </div>
    <!-- /.row -->
    </div>












</div> <!-- End -->









@endsection
@section('footer')
