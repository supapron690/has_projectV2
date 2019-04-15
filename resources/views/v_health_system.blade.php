@extends('v_master_system')
@section('content')

    {{-- <div class="content" style="padding-top: 40px;"> --}}
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
                                        <th>เครื่องมือ</th>
                                    </thead>
                                    <tbody>
                                    <?php $count=0; ?>
                                    @foreach ($healths as $health) 
                                    <?php $count++; ?>
                                        <tr>
                                        	<td><?php echo ($count); ?></td>
                                        	<td>{{$health->ha_name}}</td>
                                            <td>{{$health->ha_type}}</td>
                                            <td> <a href="{{url('/health/edit/'.$health->ha_id)}}"> <button type="button" class="btn btn-warning">แก้ไข</button></a> &nbsp; <a href="{{url('/health/destroy/'.$health->ha_id)}}"><button type="button" class="btn btn-danger">ลบ</button></a></td>
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
 


      
 
