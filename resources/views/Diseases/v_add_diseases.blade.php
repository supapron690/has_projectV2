@extends('v_master_system')
@section('content')
{{-- content --}}

  
<div class="container" style="padding-top: 40px;">  
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
                    <div>
                        <h4>หมวดหมู่ของโรคหรืออาการ</h4>
                    </div>
                    <div class="form-group">                             
                            {!! Form::label('ds_type', 'หมวดหมู่');  !!}                             
                            {!! Form::text('ds_type',null,['class' => 'form-control','placeholder' => 'หมวดหมู่']); !!}                         
                    </div> 
                    <div>
                        <h4>รายละเอียดของโรคหรืออาการ</h4>
                    </div>
                    <div class="form-group">                             
                            {!! Form::label('ds_name', 'ชื่อโรคหรืออาการ');  !!}                             
                            {!! Form::text('ds_name',null,['class' => 'form-control','placeholder' => 'ชื่อโรคหรืออาการ']); !!}                         
                    </div> 
                    <div class="form-group">                             
                            {!! Form::label('ds_content', 'รายละเอียด');  !!}                             
                            {!! Form::textarea('ds_content',null,['class' => 'form-control','placeholder' => 'รายละเอียด']); !!}                         
                    </div> 
                    <div class="form-group">                             
                            {!! Form::label('ds_refer', 'แหล่งอ้างอิง');  !!}                             
                            {!! Form::text('ds_refer',null,['class' => 'form-control','placeholder' => 'แหล่งอ้างอิง']); !!}                         
                    </div> 
                    <div class="form-group">                             
                        {!! Form::label('ds_image', 'รูปภาพ');  !!}                             
                        <?= Form::file('ds_image', null, ['class' => 'form-control']) ?>                         
                     </div> 
                     {{-- ปุ่มบันทึก --}}
                    <div class="form-group">                                                      
                        <?= Form::submit('บันทึก', ['class' => 'btn btn-primary']); ?>                                               
                    </div> 
 
                    {!! Form::close() !!} 
            
            
            </div> 
         
    </div>
</div>
@endsection






