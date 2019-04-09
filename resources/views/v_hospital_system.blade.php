@extends('v_master_system')

@section('content')

    <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">โรงพยาบาลใกล้เคียง</h4>
                                {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">เพิ่มข้อมูล</button> --}}
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
                                    @foreach ($hospitals as $hospital) 
                                        <tr>
                                        	<td>{{$hospital->hos_id}}</td>
                                        	<td>{{$hospital->hos_name}}</td>
                                        	<td>ชุลบุรี</td>
                                        	<td>{{$hospital->hos_phone}}</td>
                                            <td>http://www.cbh.moph.go.th/</td>
                                            <td><a href="{{url('/hospital/destroy/'.$hospital->hos_id)}}"><button type="button" class="btn btn-warning">ลบ</button></a></td>
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

        <footer class="footer">
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

@endsection
 
{{-- model --}}

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">เพิ่มข้อมูลโรงพยาบาล</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">ชื่อโรงพยาบาล:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">จังหวัด:</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">อำเภอ:</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">เบอร์โทร:</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">ที่อยู่:</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">เกี่ยวกับ:</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">ละติจูด:</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">ลองติจูด:</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">อัพโหลดรูปภาพ:</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
              <button type="button" class="btn btn-primary">บันทึก</button>
            </div>
          </div>
        </div>
      </div>




      
 
