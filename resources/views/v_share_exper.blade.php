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
        <div class="row" style="background-image:url('storage/Images_inView/OBFCYE0.jpg');
            background-size: cover; width: 100vw; height: 70vh;">
        <div class="col-sm-12 content-c ">
            <div class="content-c" style="padding-top:6%; padding-bottom:10%;" width="200" height="200" >
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

    <!-- แชร์ประสบการณ์ด้านการรักษา-->
    <div class="section" style=" padding-top: 3%;">
            <div class="row">
                <div class="col-sm-10" style=" padding-left: 9%;">
                    <h5>แชร์ประสบการณ์ด้านการรักษา</h5>
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
                    <img src="{{ url('storage/Images_inView/429196.jpg') }}" class="card-img-top" width="100" height="200">
                <div class="card-body text-center">
                    <h5 class="card-title mb-0">Team Member</h5>
                    <div class="card-text text-black-50">Web Developer</div>
                </div>
            </div>
            </div>
            <!-- Team Member 2 -->
            <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow">
                    <img src="{{ url('storage/Images_inView/skull.jpg') }}" class="card-img-top" width="100" height="200">
                <div class="card-body text-center">
                    <h5 class="card-title mb-0">Team Member</h5>
                    <div class="card-text text-black-50">Web Developer</div>
                </div>
            </div>
            </div>
            <!-- Team Member 3 -->
            <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow">
                    <img src="{{ url('storage/Images_inView/human.jpg') }}" class="card-img-top" width="100" height="200">
                <div class="card-body text-center">
                    <h5 class="card-title mb-0">Team Member</h5>
                    <div class="card-text text-black-50">Web Developer</div>
                </div>
            </div>
            </div>
            <!-- Team Member 4 -->
            <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow">
                    <img src="{{ url('storage/Images_inView/yoka1.jpg') }}" class="card-img-top" width="100" height="200">
                <div class="card-body text-center">
                    <h5 class="card-title mb-0">Team Member</h5>
                    <div class="card-text text-black-50">Web Developer</div>
                </div>
            </div>
            </div>
        </div>
        <!-- /.row -->
        </div>

    <!-- แชร์ประสบการณ์ด้านชีวิตชีวา -->
    <div class="section" style=" padding-top: 3%;">
        <div class="row">
            <div class="col-sm-10" style=" padding-left: 9%;">
                <h5>แชร์ประสบการณ์ด้านชีวิตชีวา</h5>
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
                <img src="{{ url('storage/Images_inView/book.jpg') }}" class="card-img-top" width="100" height="200">
            <div class="card-body text-center">
                <h5 class="card-title mb-0">Team Member</h5>
                <div class="card-text text-black-50">Web Developer</div>
            </div>
        </div>
        </div>
        <!-- Team Member 2 -->
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow">
                <img src="{{ url('storage/Images_inView/runner.jpg') }}" class="card-img-top" width="100" height="200">
            <div class="card-body text-center">
                <h5 class="card-title mb-0">Team Member</h5>
                <div class="card-text text-black-50">Web Developer</div>
            </div>
        </div>
        </div>
        <!-- Team Member 3 -->
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow">
                <img src="{{ url('storage/Images_inView/slim.jpg') }}" class="card-img-top" width="100" height="200">
            <div class="card-body text-center">
                <h5 class="card-title mb-0">Team Member</h5>
                <div class="card-text text-black-50">Web Developer</div>
            </div>
        </div>
        </div>
        <!-- Team Member 4 -->
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow">
                <img src="{{ url('storage/Images_inView/fat.jpg') }}" class="card-img-top" width="100" height="200">
            <div class="card-body text-center">
                <h5 class="card-title mb-0">Team Member</h5>
                <div class="card-text text-black-50">Web Developer</div>
            </div>
        </div>
        </div>
    </div>
    <!-- /.row -->
    </div>

    <!-- แชร์ประสบการณ์ด้านโภชนาการ-->
    <div class="section" style=" padding-top: 3%;">
            <div class="row">
                <div class="col-sm-10" style=" padding-left: 9%;">
                    <h5>แชร์ประสบการณ์ด้านการรักษา</h5>
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
                    <img src="{{ url('storage/Images_inView/pig.jpg') }}" class="card-img-top" width="100" height="200">
                <div class="card-body text-center">
                    <h5 class="card-title mb-0">Team Member</h5>
                    <div class="card-text text-black-50">Web Developer</div>
                </div>
            </div>
            </div>
            <!-- Team Member 2 -->
            <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow">
                    <img src="{{ url('storage/Images_inView/fish.jpg') }}" class="card-img-top" width="100" height="200">
                <div class="card-body text-center">
                    <h5 class="card-title mb-0">Team Member</h5>
                    <div class="card-text text-black-50">Web Developer</div>
                </div>
            </div>
            </div>
            <!-- Team Member 3 -->
            <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow">
                    <img src="{{ url('storage/Images_inView/bean.jpg') }}" class="card-img-top" width="100" height="200">
                <div class="card-body text-center">
                    <h5 class="card-title mb-0">Team Member</h5>
                    <div class="card-text text-black-50">Web Developer</div>
                </div>
            </div>
            </div>
            <!-- Team Member 4 -->
            <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow">
                    <img src="{{ url('storage/Images_inView/veget.jpg') }}" class="card-img-top" width="100" height="200">
                <div class="card-body text-center">
                    <h5 class="card-title mb-0">Team Member</h5>
                    <div class="card-text text-black-50">Web Developer</div>
                </div>
            </div>
            </div>
        </div>
        <!-- /.row -->
        </div>


@endsection
@section('footer')
