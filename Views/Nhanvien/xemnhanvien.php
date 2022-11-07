<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">NHÂN VIÊN CÔNG TY DSR</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <button type="button" style="float: right;" class="btn btn-primary" data-toggle="modal" data-target="#them">Thêm Người Dùng</button>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-12 col-6">
          <div class="card-header">
            <div class="card-tools">
              <ul class="pagination pagination-sm float-right">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
              </ul>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Chức vụ</th>
                  <th>Email</th>
                  <th>Tên nhân viên</th>
                  <th>Giới tính</th>
                  <th>SDT</th>
                  <th>Địa chỉ</th>
                  <th>Hành động</th>

                </tr>
              </thead>
              <tbody id="datarow">
                <?php
                $i = 0;
                $sex = "Nữ";
                if (mysqli_num_rows($data["shownv"]) > 0) {
                  while ($row = mysqli_fetch_assoc($data["shownv"])) {

                    if ($row['gioiTinh'] == 1) {
                      $sex = "Nam";
                    }
                    $i++;
                    echo '<tr>
                                <td>' . $i . '</td>
                                <td style="text-align: center;">
                                    ' . $row['moTa'] . '
                                </td>
                                <td>' . $row['eMail'] . '</td>
                                <td>' . $row['tenNhanVien'] . '</td>
                                <td style="text-align:center" >' . $sex . '</td>
                                <td style="text-align:center" >' . $row['SDT'] . '</td>
                                <td >' . $row['diaChi'] . '</td>
                                <td style="text-align: right;">
                                    <button data-toggle="modal" class="btn btn-warning" onclick="EditNV(' . $row['IDNhanVien'] . ')">

                                        <i class="fas fa-cog " data-toggle="tooltip" title="Edit">
                                        </i> Sửa
                                    </button>
                                    <a data-toggle="modal" class="btn btn-danger" onclick="DeleteNV(' . $row['IDNhanVien'] . ')">
                                        <i class="fa fa-trash" aria-hidden="true"></i> Xóa nhân viên
                                    </a>
                                </td>
                            </tr>';
                  }
                }

                ?>
                <!-- href="nhanvien/xoanhanvien/'.$row['IDNhanVien'].'" target="_self"  -->
              </tbody>
            </table>
          </div>
        </div>


      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

<div id="editEmployy" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="update_form" method="POST" action="nhanvien/updatenhanvien">
        <div class="modal-header" style="background-color: #FF74B1">
          <h5 class="modal-title" id="exampleModalLabel">Sửa nhân viên mới</h5>
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input type="hidden" id="idNhanVien" name="txtidNhanVien" class="form-control">
          </div>
          <div class="form-group">
            <label>Họ và Tên</label>
            <input type="text" id="tenUser" name="txtTenUser" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Ngày Sinh</label>
            <input type="date" id="ngaySinhUser" name="txtNgaySinhUser" class="form-control" required>
          </div>
          <div class="form-group">
            <label>SDT</label>
            <input type="text" id="SDTUser" name="txtSDTUser" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" id="emailUser" name="txtEmailUser" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Địa Chỉ</label>
            <input type="text" id="diaChiUser" name="txtDiaChiUser" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" value="editUser" name="type">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <button type="submit" name="update" class="btn btn-info" value="update">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div id="xoanv" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="update_form" method="POST" action="nhanvien/deletenhanvien"> 
        <div class="modal-header" style="background-color: #b41423">
          <h5 class="modal-title" id="exampleModalLabel">Xóa nhân viên</h5>
          <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input type="hidden" id="IDNhanVien" name="IDNhanVien" class="form-control">
          </div>
          <div class="form-group">
            <input type="hidden" id="taiKhoan" name="taiKhoan" class="form-control">
          </div>
          <p>Bạn có muốn xóa không ?</p>
          <h2 class="text-warning"><small>Thao tác này không thể hoàn tác lại được</small></h2>
          <div class="form-group">
            <label>Nhận xét nhân viên </label>
            <textarea class="form-control"  id="nhanxetnhanvien" name="nhanxetnhanvien" placeholder="Mô tả nhân viên trong quá trình làm việc. Viết tiếng việt có dấu"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <button type="submit" name="delete" class="btn btn-danger" value="delete">Xóa</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  function EditNV(id) {
    $.ajax({
      url: "nhanvien/xemChiTietNhanVien",
      type: 'post',
      data: {
        id: id
      },
      success: function(data) {
        var result = JSON.parse(data);
        $('#editEmployy').modal();
        $('#idNhanVien').val(result['id']);
        $('#tenUser').val(result['tenNhanVien']);
        $('#SDTUser').val(result['SDT']);
        $('#diaChiUser').val(result['diaChi']);
        $('#CCCDUser').val(result['CCCD']);
        $('#ngaySinhUser').val(result['ngaySinh']);
        $('#emailUser').val(result['email']);
      }
    });
  }
  function DeleteNV(id) {
    $.ajax({
      url: "nhanvien/xemChiTietNhanVien",
      type: 'post',
      data: {
        id: id
      },
      success: function(data) {
        var result = JSON.parse(data);
        $('#xoanv').modal();
        $('#IDNhanVien').val(result['id']);
        $('#taiKhoan').val(result['taiKhoan']);
      }
    });
  }
</script>
<!-- <script type="text/javascript">
  var myRoomNumber;

  $('#xoaTaiKhoan').click(function() {
    myRoomNumber = $(this).attr('data-id');
  });

  $('#xoa').on('show.bs.modal', function(e) {
    $(this).find('.roomNumber').text(myRoomNumber);
  });
</script> -->