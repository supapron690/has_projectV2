@extends('v_master_system')
@section('content')
{{-- content --}}

  
{{-- <div class="container" style="padding-top: 40px;">   --}}
    <div class="card">
            <div class="card-header">
                <h3>เพิ่มข้อมูลโรงพยาบาล</h3>
            </div>
            <div class="card-body">
                    @if (count($errors) > 0)             
                    <div class="alert alert-warning">                    
                        <ul>                         
                            @foreach ($errors->all() as $error)                     
                            <li>{{ $error }}</li>                        
                             @endforeach                     
                        </ul>              
                    </div>       
                    @endif 
                    {!! Form::open(array('url' => 'hospital/store','files' => true)) !!} 
     
                    <div class="form-group">                             
                        <?= Form::label('hos_name', 'ชื่อโรงพยาบาล'); ?>                             
                        <?= Form::text('hos_name', null, ['class' => 'form-control', 'placeholder' => 'ชื่อโรงพยาบาล']); ?>                             
                    </div> 

                    <div class="form-group">                       
                        {!! Form::label('hos_province', 'จังหวัด');  !!}                             
                        <?= Form::select('hos_province', App\has_hospitals::get_province()->pluck('name_th', 'id'), null, ['class' => 'formcontrol', 'placeholder' => 'กรุณาเลือกจังหวัด','id' => 'province_id']); ?>                         
                    </div> 


                    <div class="form-group">                       
                            {!! Form::label('hos_district', 'อำเภอ');  !!}                             
                            <?= Form::select('hos_district', App\has_hospitals::all()->pluck('name_th', 'id'), null, ['class' => 'formcontrol', 'placeholder' => 'กรุณาเลือกอำเภอ', 'id' => 'amphur_id']); ?>                         
                    </div>

                    <div class="form-group">                             
                        {!! Form::label('hos_address', 'ที่อยู่');  !!}                             
                        {!! Form::text('hos_address',null,['class' => 'form-control','placeholder' => 'ที่อยู่']); !!}                         
                    </div> 
                    <div class="form-group">                             
                        {!! Form::label('hos_latitude', 'ละติจูด');  !!}                             
                        {!! Form::text('hos_latitude',null,['class' => 'form-control','placeholder' => 'ละติจูด']); !!}                         
                    </div> 
                    <div class="form-group">                             
                        {!! Form::label('hos_longitude', 'ลองติจูด');  !!}                             
                        {!! Form::text('hos_longitude',null,['class' => 'form-control','placeholder' => 'ลองติจูด']); !!}                         
                    </div> 
                    <div class="form-group">                             
                            {!! Form::label('hos_phone', 'เบอร์โทรศัพท์');  !!}                             
                            {!! Form::text('hos_phone',null,['class' => 'form-control','placeholder' => 'เบอร์โทรศัพท์']); !!}                         
                    </div> 
                    <div class="form-group">                             
                            {!! Form::label('hos_web', 'เว็บไซต์');  !!}                             
                            {!! Form::text('hos_web',null,['class' => 'form-control','placeholder' => 'เว็บไซต์']); !!}                         
                    </div> 
                    <div class="form-group">                             
                            {!! Form::label('hos_description', 'รายละเอียด');  !!}                             
                            {!! Form::text('hos_description',null,['class' => 'form-control','placeholder' => 'รายละเอียด']); !!}                         
                    </div> 
                    <div class="form-group">                             
                        {!! Form::label('hos_img', 'รูปภาพ');  !!}                             
                        <?= Form::file('hos_img', null, ['class' => 'form-control']) ?>                         
                     </div> 
                     {{-- ปุ่มบันทึก --}}
                    <div class="form-group">                                                      
                        <?= Form::submit('บันทึก', ['class' => 'btn btn-primary']); ?>                                               
                    </div> 
 
                    {!! Form::close() !!} 
            
            
            </div> 
         
    </div>
{{-- </div> --}}

<script>

$().ready(()=>{
    $("#province_id").change(() => {
        var value = $("#province_id").val()

        $("#amphur_id").html('')

        $.get( "http://localhost:8000/hospital/get_amphur/"+value, function( data ) {
            console.log(data);

            data.forEach(element => {
                $("#amphur_id").append("<option value="+element.name_th+">"+element.name_th+"</option>")
            });
            
        });
    })
})

</script>


@endsection


