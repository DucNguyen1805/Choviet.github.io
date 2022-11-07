<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">BÀI ĐĂNG CHỜ DUYỆT</h1>
          </div><!-- /.col -->
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
                                <th>Ảnh sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá</th>
                                <th>Loại sản phẩm</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody id="datarow">
                          <?php 
                          $i=0;
                          if (mysqli_num_rows($data["bdcd"]) > 0) {
                        while ($row = mysqli_fetch_assoc($data["bdcd"])) {
                          $i++;
                          echo '<tr>
                                <td>'.$i.'</td>
                                <td style="text-align: center;">
                                    <img style="width: 100px ;height: 100px;" src="'."./data/sanpham/".''.$row['Ha'].'" class="hinhdaidien">
                                </td>
                                <td>'.$row['tenSanPham'].'</td>
                                <td class="text-right">'.$row['Gia'].'</td>
                                <td style="text-align:center" >'.$row['moTaID'].'</td>
                                <td style="text-align: right;">
                                    <a href="nhanvien/duyetbd/'.$row['IDBD'].'" class="btn btn-success">
                                        <i class="fa fa-check" aria-hidden="true"></i> Duyệt
                                    </a>
                                    <a href="nhanvien/khongduyetbd/'.$row['IDBD'].'" target="_self" class="btn btn-danger">
                                        <i class="fa fa-trash" aria-hidden="true"></i> Không duyệt
                                    </a>
                                </td>
                            </tr>';
                        }
                      }

                           ?>

                        </tbody>
                    </table>
              </div>
          </div>


        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
