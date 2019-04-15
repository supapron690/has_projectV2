@extends('v_master_system')
@section('content')
{{-- content --}}

  
{{-- <div class="container" style="padding-top: 40px;">   --}}
    <div class="card">
            <div class="card-header">
                <h3>เพิ่มข้อมูลบทความเพื่อสุขภาพ</h3>
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
                    {!! Form::open(array('url' => 'health/store_health','files' => true)) !!} 
                    <div class="form-group">                             
                            {!! Form::label('ha_type_id', 'รหัสบทความ');  !!}                             
                            {!! Form::text('ha_type_id',null,['class' => 'form-control','placeholder' => 'รหัสบทความ']); !!}                         
                    </div> 
                    <div class="form-group">                             
                            {!! Form::label('ha_type', 'ประเภทบทความ');  !!}                             
                            {!! Form::text('ha_type',null,['class' => 'form-control','placeholder' => 'ประเภทบทความ']); !!}                         
                    </div> 
                    <div class="form-group">                             
                            {!! Form::label('ha_name', 'ชื่อบทความ');  !!}                             
                            {!! Form::text('ha_name',null,['class' => 'form-control','placeholder' => 'ชื่อบทความ']); !!}                         
                    </div> 
                    <div class="form-group">                             
                            {!! Form::label('ha_content', 'รายละเอียด');  !!}                             
                            {!! Form::textarea('ha_content',null,['class' => 'form-control','placeholder' => 'รายละเอียด']); !!}                         
                    </div> 
                    <div class="form-group">                             
                            {!! Form::label('ha_refer', 'แหล่งอ้างอิง');  !!}                             
                            {!! Form::text('ha_refer',null,['class' => 'form-control','placeholder' => 'แหล่งอ้างอิง']); !!}                         
                    </div> 
                    <div class="form-group">                             
                        {!! Form::label('ha_image', 'รูปภาพ');  !!}                             
                        <?= Form::file('ha_image', null, ['class' => 'form-control']) ?>                         
                     </div> 
                     {{-- ปุ่มบันทึก --}}
                    <div class="form-group">                                                      
                        <?= Form::submit('บันทึก', ['class' => 'btn btn-primary']); ?>                                               
                    </div> 
 
                    {!! Form::close() !!} 
            
            
            </div> 
         
    </div>
{{-- </div> --}}
@endsection






