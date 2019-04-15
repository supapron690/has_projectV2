@extends('v_master_system')
@section('content')

    {{-- <div class="content" style="padding-top: 40px;"> --}}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="title">โรงพยาบาลใกล้เคียง</h4>
                                <?= link_to('hospital/form_hospital', $title = 'เพิมข้อมูล', ['class' => 'btn btn-primary'], $secure = null); ?> 
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                      <th>ลำดับ</th>
                                    	<th>ชื่อโรงพยาบาล</th>
                                    	<th>จังหวัด</th>
                                    	<th>เบอร์โทร</th>
                                      <th>เว็บไซต์</th>
                                      <th>เครื่องมือ</th>
                                      
                                    </thead>
                                    <tbody>
                                    <?php $count=0; ?>
                                    @foreach ($hospitals as $hospital) 
                                    <?php $count++; ?>
                                        <tr>
                                        	<td><?php echo ($count); ?></td>
                                        	<td>{{$hospital->hos_name}}</td>
                                        	<td>{{$hospital->hos_province}}</td>
                                        	<td>{{$hospital->hos_phone}}</td>
                                            <td>{{$hospital->hos_web}}</td>
                                            <td> <a href="{{url('/hospital/edit/'.$hospital->hos_id)}}"> <button type="button" class="btn btn-warning">แก้ไข</button></a> &nbsp; <a href="{{url('/hospital/destroy/'.$hospital->hos_id)}}"><button type="button" class="btn btn-danger">ลบ</button></a></td>
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
{{-- </div>  --}}
@endsection 
 


      
 
