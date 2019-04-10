@extends('v_master_system')
@section('content')

    <div class="content" style="padding-top: 40px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="title">โรงพยาบาลใกล้เคียง</h4>
                                {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">เพิ่มข้อมูล</button> --}}
                                <?= link_to('health/form_health', $title = 'เพิมข้อมูล', ['class' => 'btn btn-primary'], $secure = null); ?> 
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                      <th>ลำดับ</th>
                                    	<th>ชื่อเรื่อง</th>
                                    	<th>หมวดหมู่บทความ</th>
                                    </thead>
                                    <tbody>
                                    @foreach ($healths as $health) 
                                        <tr>
                                        	<td>{{$health->ha_id}}</td>
                                        	<td>{{$health->ha_name}}</td>
                                        	<td>{{$health->ha_type}}</td>
                                        </tr>
                                    @endforeach    
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
   </div>
</div> 

@endsection
 


      
 
