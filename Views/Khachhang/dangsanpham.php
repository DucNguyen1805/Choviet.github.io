<body>
  <!-- <?php $row= (json_decode($_SESSION['informationUser'],true));?>  -->
    <!-- <?php $idKhachHang = $row["IDKhachHang"];
?> -->
  <form action="themsanpham" method="POST" enctype="multipart/form-data">
      <div class="card card-default">
          <div style="text-align: center;" class="card-header">
            <h3 style="font-size: 50px;" class="card-title">TẠO BÀI ĐĂNG</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Loại sản phẩm *</label>
                  <select class="form-control select2" name="loaisanpham" style="width: 100%;">
                    <?php

                      if (mysqli_num_rows($data["loaisanpham"]) > 0) {
                        while ($row = mysqli_fetch_assoc($data["loaisanpham"])) {
                        echo "<option value='" . $row['IDLoaiSanPham'] . "'>" . $row['moTaID'] . "</option>";
                              }
                            }
                    ?>
                  </select>
                </div>
            <p style="color:#9b190a;" id="sailoai">
            <?php // hiển thị thông báo đúng hay sai
            if(isset($_SESSION['sailoai']))
            {

              echo $_SESSION['sailoai'];
              unset($_SESSION['sailoai']);  
            }
             ?>
        </p>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Tên sản phẩm *</label>
                  <input type="text" class="form-control" id="tensp" name="tensanpham" placeholder="Tên sản phẩm">
                </div>
            <p style="color:#9b190a;" id="saitensanpham">
            <?php // hiển thị thông báo đúng hay sai
            if(isset($_SESSION['saitensanpham']))
            {

              echo $_SESSION['saitensanpham'];
              unset($_SESSION['saitensanpham']);  
            }
             ?>
        </p>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Giá *</label>
                  <input type="gia" class="form-control" id="gia" name="gia" placeholder="100000VND">
                </div>
              <p style="color:#9b190a;" id="saigia">
            <?php // hiển thị thông báo đúng hay sai
            if(isset($_SESSION['saigia']))
            {

              echo $_SESSION['saigia'];
              unset($_SESSION['saigia']);  
            }
             ?>
          </p>
                <!-- /.form-group -->
                 <div class="form-group">
                  <label>Kích thước *</label>
                  <input type="text" class="form-control" id="kichthuoc" name="kichthuoc" placeholder="Dài x rộng x cao">
                </div>
            <p style="color:#9b190a;" id="saikichthuoc">
            <?php // hiển thị thông báo đúng hay sai
            if(isset($_SESSION['saikichthuoc']))
            {

              echo $_SESSION['saikichthuoc'];
              unset($_SESSION['saikichthuoc']);  
            }
             ?>
        </p>
              </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label for="motachitiet">Mô tả chi tiết *</label>
                    <textarea class="form-control"  id="motachitiet" name="motachitiet" placeholder="Mô tả chi tiết sản phẩm. Viết tiếng việt có dấu"></textarea>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                        <label for="imageFile">Chọn ảnh sản phẩm: *</label>
                        <input type="file" class="form-control" id="hinhanhlienquan" name="hinhanhlienquan" accept="image/*"/>
                </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                        <label for="imageFile">Ảnh liên quan 1:</label>
                        <input type="file" class="form-control" id="hinhanhlienquans" name="hinhanhlienquan1" accept="image/*"/>
                </div>
              </div>
          </div>
              <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                        <label for="imageFile">Ảnh liên quan 2:</label>
                        <input type="file" class="form-control" id="hinhanhlienquan" name="hinhanhlienquan2" accept="image/*"/>
                </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                        <label for="imageFile">Ảnh liên quan 3:</label>
                        <input type="file" class="form-control" id="hinhanhlienquans" name="hinhanhlienquan3" accept="image/*" multiple />
                </div>
              </div>
          </div>
          </div>
          <!-- /.card-body -->

        </div>
          <div  style="text-align: center; font: 100px;">
            <button type="submit" name="btndangsanpham" class="btn btn-primary">ĐĂNG SẢN PHẨM</button>
            <button type="button" class="btn btn-danger"><a href="Home" style="color:black"; >HOME</a></button>
          </div>
      </form>
</body>
