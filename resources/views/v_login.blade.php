@extends('v_master')
@section('content')
<div class="jumbotron text-center FontBody" style="margin-bottom:0">
    <img src="{{ url('storage/Images_inView/logo.png') }}" alt="Cinque Terre" width="200" height="200">
    <h3 class="AlCenter">สมัครสมาชิก</h3>
    <div class="row">
        <div class="col-md-4 content-r">
            <h5>ชื่อบัญชี</h5>
        </div>
        <div class="col-md-4">
            <input type="search" class="form-control" id="search">
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-4 content-r">
            <h5>รหัสผ่าน</h5>
        </div>
        <div class="col-md-4 content-r">
            <input type="search" class="form-control" id="search">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 content-r ">
            <h5>หมายเลขโทรศัพท์</h5>
        </div>
        <div class="col-md-4">
            <input type="search" class="form-control" id="search">
        </div>
    </div>
</div>
@endsection
@section('footer')