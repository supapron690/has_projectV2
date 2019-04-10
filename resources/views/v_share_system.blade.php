@extends('v_master_system')

 @section('content') 

    <div class="content" style="padding-top: 40px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="title">แชร์ประสบการณ์</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                      <th>ลำดับ</th>
                                    	<th>ชื่อเรื่อง</th>
                                        <th>หมวดหมู่แชร์ประสบการณ์</th>
                                        <th>วันที่เพิ่มข้อมูล</th>
                                    </thead>
                                    <tbody>
                                    @foreach ($shares as $share) 
                                        <tr>
                                        	<td>{{$share->exp_id}}</td>
                                        	<td>{{$share->exp_name}}</td>
                                            <td>{{$share->exp_type}}</td>
                                            <td>{{$share->exp_date}}</td>
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
 