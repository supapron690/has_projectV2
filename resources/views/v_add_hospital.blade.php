{{-- @extends('v_master_system')
@section('content') --}}
{{-- content --}}
<div class="container">     
        <div class="row">         
            <div class="col-lg-10 col-log-offset-1"> 
                <div class="card mt-3"> 
                    <div class="card-header h3">เพิ่มข้อมูลโรงพยาบาล</div> 
     
                        <div class="card-body">                                  
                        {!! Form::open(array('url' => 'has_hospitals','files' => true)) !!} 
     
                        <div class="form-group">                             
                            <?= Form::label('hos_name', 'ชื่อโรงพยาบาล'); ?>                             
                            <?= Form::text('hos_name', null, ['class' => 'form-control', 'placeholder' => 'ชื่อโรงพยาบาล']); ?>                             
                        </div> 
     
                        <div class="form-group">                             
                            {!! Form::label('hos_province', 'จังหวัด');  !!}                             
                            {!! Form::text('hos_province',null,['class' => 'form-control','placeholder' => 'จังหวัด']); !!}                         
                        </div> 

                        <div class="form-group">                             
                            {!! Form::label('hos_district', 'อำเภอ');  !!}                             
                            {!! Form::text('hos_district',null,['class' => 'form-control','placeholder' => 'อำเภอ']); !!}                         
                        </div> 
                        <div class="form-group">                             
                            {!! Form::label('hos_address', 'ที่อยู่');  !!}                             
                            {!! Form::text('hos_address',null,['class' => 'form-control','placeholder' => 'ที่อยู่']); !!}                         
                        </div> 

                        <div class="form-group">                             
                            {!! Form::label('hos_web', 'เว็บไซต์');  !!}                             
                            {!! Form::text('hos_web',null,['class' => 'form-control','placeholder' => 'เว็บไซต์']); !!}                         
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
                            {!! Form::label('hos_img', 'รูปภาพ');  !!}                             
                            <?= Form::file('hos_img', null, ['class' => 'form-control']) ?>                         
                         </div> 



     
                        <div class="form-group">                                                      
                            <?= Form::submit('บันทึก', ['class' => 'btn btn-primary']); ?>                                               
                        </div> 
     
                        {!! Form::close() !!} 
     
                    </div>             
                </div>         
            </div>     
        </div> 
    </div> 

        {{-- <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>


   </div>
</div> 

@endsection --}}

