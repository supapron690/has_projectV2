@extends('v_master')
@section('content')

<div class="container-fluid padding" >
<div class="row" style="background-color:#f1feff;" >
    <div class="col-md-2" ></div>
    <div class="col-md-8" style="padding-top:3%; padding-bottom:3%; ">
        <div class="firma-card row">
            <div class="col-md-5 img-padding-no">
                <div class="firma-resim" style="background-image:url('storage/Images_inView/Group.png');">
                    <a href="#"></a>
                </div>
            </div>
            <div class="col-md-7">
                <div class="firma-aciklama card-body">
                    <h4 class="font-size4" style="padding-left:10%;">สมัครสมาชิก</h4>
                    <ul class="yacht-info__list space-2 padding">
                    <form>
                        <div class="custom-search-input row">
                        <div class="input-group col-md-12 padding" style="padding-left:10%;" >
                            <input type="text" class="search-query form-control col-md-10 font-size3"
                                style= "height: 40px;" placeholder="ชื่อจริง">
                        </div>
                        </div>

                        <div class="custom-search-input row">
                        <div class="input-group col-md-12 padding" style="padding-left:10%;">
                            <input type="text" class="search-query form-control col-md-10 font-size3"
                                style= "height: 40px; " placeholder="นามสกุล">
                        </div>
                        </div>

                        <div class="custom-search-input row">
                        <div class="input-group col-md-12 padding" style="padding-left:10%;">
                            <input type="text" class="search-query form-control col-md-10 font-size3"
                                style= "height: 40px; " placeholder="ชื่อผู้ใช้งาน">
                        </div>
                        </div>

                        <div class="custom-search-input row">
                        <div class="input-group col-md-12 padding" style="padding-left:10%;">
                            <input type="text" class="search-query form-control col-md-10 font-size3"
                                style= "height: 40px; " placeholder="รหัสผ่าน">
                        </div>
                        </div>

                        <div class="custom-search-input row">
                        <div class="input-group col-md-12 padding" style="padding-left:10%;">
                            <div class="col-md-8 padding"><input type="text" class="search-query form-control font-size3"
                                style= "height: 40px; " placeholder="เบอร์โทรศัพท์มือถือ"></div>
                            <div class="col-md-1"></div>
                            <div class="col-md-2 font-size3"><button type="button" class="btn font-size3"
                                style="height:40px; width:50px; color:white; background-color:#FF9800" >ยืนยัน</button></div>
                        </div>
                        </div>

                        <div class="custom-search-input row">
                        <div class="input-group col-md-12 padding" style="padding-left:30%;padding-top:5%;">
                            <div class="col-md-1"></div>
                            <div class="col-md-3 font-size3"><button type="button" class="btn font-size"
                                style="height:40px; width:150px; color:white; background-color:#03A9F4" >สมัครสมาชิก</button></div>
                        </div>
                        </div>

                    </form>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
</div>


@endsection
@section('footer')
