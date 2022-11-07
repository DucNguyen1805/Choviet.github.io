<!-- <?php $row= (json_decode($_SESSION['informationUser'],true));?>  -->
<div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-12 col-md-6 col-sm-6">
    <h3 >
        <center>Thông tin cá nhân</center>

    </h3>
    <div >
    <center><a href="home"><button class="btn btn-danger" style="width: 200px;">Trang chủ</button></a></center></div>
    <form enctype="multipart/form-data" action="updateinfo" method="post">
            <div class="card--GV">
                <div class="card-body ">
                    <div class="d-flex">
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <div style="text-align: center;" class="avatar-wrapper">
                                <p><a href="#" onclick="$('#upfile').trigger('click'); return false;"><img id="avatar" style=" height:250px; width:240px; border: thin solid #999999; ;" class="profile-pic" src="<?php echo "./data/avatar/".$data['anhdaidien'] ?>" /></a></p>
                                <input class="file-upload" id="upfile" type="file" name="avatar" style="display: none;" />
                            </div>
                                    <p style=" text-align: center ;color:#9b190a;" id="fileerror">
                                    <?php // hiển thị thông báo đúng hay sai
                                    if(isset($_SESSION['fileerror']))
                                    {

                                      echo $_SESSION['fileerror'];
                                      unset($_SESSION['fileerror']); 
                                    }
                                     ?>
                                </p>
                        </div>
                        <div class="col-lg-9 col-md-12 col-sm-12">
                        <ul>
                            <li class="list-inline">
                                <div class="form-group row">
                                    <label for="txtTen" class="col-sm-3 col-form-label">
                                        <h5>Họ tên : </h5>
                                    </label>
                                    <div class="col-12 col-sm-8 col-md-8">
                                        <input type="text" class="form-control" name="txtTen" id="txtTen" value="<?php echo $data['tenkhachhang'] ?>">
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline">
                                <div class="form-group row">
                                    <label for="ngaySinh" class="col-sm-3 col-form-label">
                                        <h5>Ngày Sinh : </h5>
                                    </label>
                                    <div class=" col-sm-6">
                                        <input type="date" class="form-control" name="ngaySinh" id="ngaySinh" value="<?php echo $data['ngaysinh'] ?>">
                                    </div>
                                    <div class="col-sm-2">
                                  <div class="select">
                                      <select class="form-select" name="gioiTinh">
                                        <?php
                                         if($data['gioitinh']==1) 
                                        {?>
                                            <option value="1" selected >Nam</option>
                                            <option value="0" >Nữ</option>

                                       <?php }else{ ?>
                                            <option value="1"  >Nam</option>
                                            <option value="0" selected >Nữ</option>

                                       <?php } ?>
                                      
                                      </select>
                                </div>
                                </div>
                                </div>
                            </li>
                            <li class="list-inline">
                                <div class="form-group row">
                                    <label for="txtSDT" class="col-sm-3 col-form-label">
                                        <h5>Số Điện Thoại : </h5>
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="txtSDT" id="txtSDT" value="<?php echo $data['sdt']?>">
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline">
                                <div class="form-group row">
                                    <label for="txtDiaChi" class="col-sm-3 col-form-label">
                                        <h5>Địa Chỉ : </h5>
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="txtDiaChi" id="txtDiaChi" value="<?php echo $data['diachi'] ?>">
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline">
                                <div class="form-group row">
                                    <label for="txtCCCD" class="col-sm-3 col-form-label">
                                        <h5>CCCD : </h5>
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="txtCCCD" id="txtCCCD" value="<?php echo $data['CCCD'] ?>">
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline">
                                <div class="form-group row">
                                    <label for="txtEmail" class="col-sm-3 col-form-label">
                                        <h5>Email : </h5>
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" name="txtEmail" id="txtEmail" value="<?php echo $data['email'] ?>">
                                    </div>
                                </div>
                            </li>
                            <h3 style="text-align:center;" >Đổi mật khẩu</h3>
                            <li class="list-inline">
                                <div class="form-group row">
                                    <label for="txtMatKhau" class="col-sm-3 col-form-label">
                                        <h5>Mật Khẩu cũ: </h5>
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" name="pass" id="pass" value="">
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline">
                                <div class="form-group row">
                                    <label for="txtMatKhau" class="col-sm-3 col-form-label">
                                        <h5>Mật Khẩu mới: </h5>
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" name="txtMatKhau" id="txtMatKhau" value="">
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline">
                                <div class="form-group row">
                                    <label for="txtMatKhau" class="col-sm-3 col-form-label">
                                        <h6>Nhập Lại Mật Khẩu : </h6>
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" name="txtMatKhau2" id="txtMatKhau2" value="">
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline mt-8">
                                <center><button name="saveInfo" type="submit" class="btn btn-success">Lưu Thông Tin</button></center>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
    </form>
</div>
</div>
</div>
<?php
// if (isset($_REQUEST['saveInfo'])) {
//     $thongBaoLoi = array();
//     if (!preg_match('/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]{4,}$/', $_REQUEST['txtTen'])) {
//         $thongBaoLoi['txtTen']['sai'] = 'Vui Lòng Nhập lại Họ Tên';
//         echo "<script>alert('" . $thongBaoLoi['txtTen']['sai'] . "')</script>";
//     }
//     if (!preg_match('/^[a-zA-Z0-9]{4,}+[@gmail.com]{10,10}$/', $_REQUEST['txtEmail'])) {
//         $thongBaoLoi['txtEmail']['sai'] = 'Vui Lòng Nhập Email(abc@gmail.com)';
//         echo "<script>alert('" . $thongBaoLoi['txtEmail']['sai'] . "')</script>";
//     }
//     if (!preg_match('/^[03|08|09|07]{2,2}+[0-9]{8,8}$/', $_REQUEST['txtSDT'])) {
//         $thongBaoLoi['txtSDT']['sai'] = 'Vui Lòng Nhập SDT';
//         echo "<script>alert('" . $thongBaoLoi['txtSDT']['sai'] . "')</script>";
//     }
//     if (!preg_match('/^[0-9\/]{1,}+[A-Za-zÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s,]/', $_REQUEST['txtDiaChi'])) {
//         $thongBaoLoi['txtDiaChi']['sai'] = 'Vui Lòng Nhập Địa Chỉ';
//         echo "<script>alert('" . $thongBaoLoi['txtDiaChi']['sai'] . "')</script>";
//     }
//     if (!preg_match('/^[0-9]{9,12}$/', $_REQUEST['txtCCCD'])) {
//         $thongBaoLoi['txtCCCD']['sai'] = 'Vui Lòng Nhập lại CCCD';
//         echo "<script>alert('" . $thongBaoLoi['txtCCCD']['sai'] . "')</script>";
//     }
//     if (empty($_REQUEST['ngaySinh'])) {
//         $thongBaoLoi['ngaySinh']['thieu'] = 'Vui Lòng Nhập Ngày Sinh';
//         echo "<script>alert('" . $thongBaoLoi['ngaySinh']['thieu'] . "')</script>";
//     }
//  if(($_REQUEST['pass'])!=="")
//  {
//     $checkmatkhau=$_REQUEST['pass'];
//     $checkmatkhau=md5($checkmatkhau);
//     if ($checkmatkhau !== $data['matkhau']) {
//         $thongBaoLoi['txtMatKhau']['thieu'] = 'Mật Khẩu Cũ Không Đúng';
//         echo "<script>alert('" . $thongBaoLoi['txtMatKhau']['thieu'] . "')</script>";
//     }
//     if (empty($_REQUEST['txtMatKhau']) or strlen($_REQUEST['txtMatKhau']) < 6) {
//         $thongBaoLoi['txtMatKhau']['thieu'] = 'Vui Lòng Nhập Lại Mật Khẩu (ít nhất là 6 ký tự)';
//         echo "<script>alert('" . $thongBaoLoi['txtMatKhau']['thieu'] . "')</script>";
//     }
//     if (empty($_REQUEST['txtMatKhau2']) or $_REQUEST['txtMatKhau']!==$_REQUEST['txtMatKhau2']) {
//         $thongBaoLoi['txtMatKhau']['thieu'] = 'Nhập Lại Mật Khẩu Nhập Lại Không Đúng';
//         echo "<script>alert('" . $thongBaoLoi['txtMatKhau']['thieu'] . "')</script>";
//     }
//     }
//     if (!empty($_FILES['avatar']['tmp_name'])) {
//         $type = array('image/png', 'image/jpg', 'image/jpeg');
//         if (in_array($_FILES['avatar']['type'], $type)) {
//             if ($_FILES['avatar']['size'] <= 10 * 1024 * 1024) {
//                 $anh = $newLocation = "Image/" . $_FILES['avatar']['name'];
//                 if (!move_uploaded_file($_FILES['avatar']['tmp_name'], $newLocation)) {
//                     $thongBaoLoi['avatar']['push'] = 'Ảnh không phù hợp';
//                     echo "<script>alert('" . $thongBaoLoi['avatar']['push'] . "')</script>";
//                 }
//             } else {
//                 $thongBaoLoi['avatar']['size'] = 'Ảnh phải < 10 MB';
//                 echo "<script>alert('" . $thongBaoLoi['avatar']['size'] . "')</script>";
//             }
//         } else {
//             $thongBaoLoi['avatar']['type'] = 'Chỉ được đăng ảnh';
//             echo "<script>alert('" . $thongBaoLoi['avatar']['type'] . "')</script>";
//         }
//     }
//     if (empty($thongBaoLoi)) {
//         if ($_SESSION['IDChucVu'] == 1 || $_SESSION['IDChucVu'] == 2) {
//             $updateInfo = $giaoVien->updateInfoUser($_REQUEST['txtTen'], $anh, $_REQUEST['txtCCCD'], $_REQUEST['ngaySinh'], $_REQUEST['txtDiaChi'],  $_REQUEST['txtEmail'], $_REQUEST['txtSDT']);
//             if ($updateInfo) {
//                 echo "<script>alert('cập nhât thành công')</script>";
//                 echo "<meta http-equiv='refresh' content='0;url=index.php?myInfo'>";
//             } else {
//                 echo "<script>alert('cập nhât thất bại')</script>";
//             }
//         }
//         if ($_SESSION['IDChucVu'] == 3) {
//             $updateInfo = $hocSinh->updateInfoUser($_REQUEST['txtTen'], $anh, $_REQUEST['txtCCCD'], $_REQUEST['ngaySinh'], $_REQUEST['txtDiaChi'],  $_REQUEST['txtEmail'], $_REQUEST['txtSDT']);
//             if ($updateInfo) {
//                 echo "<script>alert('cập nhât thành công')</script>";
//                 echo "<meta http-equiv='refresh' content='0;url=index.php?myInfo'>";
//             } else {
//                 echo "<script>alert('cập nhât thất bại')</script>";
//             }
//         }
//     }
//     echo "<script>alert('" .$row['matKhau']. "')</script>";
//     echo "<script>alert('" .$row['pass']. "')</script>";
// }
?>