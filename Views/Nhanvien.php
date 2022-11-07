<!DOCTYPE html>
<html lang="en">
<head>
    <base href="http://localhost/chotot/" target="_self">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Công ty cổ phần chợ Việt DSR </title>
      <link rel="stylesheet" href= " https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  
  <link rel="stylesheet" href= "./Publics/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href= "https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href= "./Publics/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href= "./Publics/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href= "./Publics/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href= "./Publics/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href= "./Publics/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href= "./Publics/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href= "./Publics/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

Preloader 
<div style="background-color:darkred;" class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="./Publics/img/logo2.jpg" alt="ChoVietDSR" height="200" width="300">
  </div> 
<!-- <?php $row= (json_decode($_SESSION['in4'],true));?>  -->
<?php require_once "./Views/Nhanvien/header.php" ?>

<?php require_once "./Views/Nhanvien/nav_nv.php" ?>

<?php require_once "./Views/Nhanvien/".$data["page"].".php" ?>
</body>
<script src="./Publics/js/jquery-3.6.1.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script> -->
<script src="./Publics/js/main.js"></script>


<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
<!-- jQuery -->
<!-- <script src="./Publics/plugins/jquery/jquery.min.js"></script> -->
<!-- jQuery UI 1.11.4 -->
<script src="./Publics/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src= "./Publics/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src= "./Publics/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src= "./Publics/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src= "./Publics/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src= "./Publics/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src= "./Publics/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src= "./Publics/plugins/moment/moment.min.js"></script>
<script src= "./Publics/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src= "./Publics/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src= "./Publics/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src= "./Publics/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src= "./Publics/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src= "./Publics/dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src= "./Publics/dist/js/pages/dashboard.js"></script>

<div class="modal fade" id="them" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #FF74B1">
                <h5 class="modal-title" id="exampleModalLabel">Thêm nhân viên mới</h5>
                <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
            </div>
            <form action="nhanvien/themnhanvien" method="POST">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                            <div>
                                <label for="txtTen">Tên Nhân Viên</label>
                                <input class="form-control" type="text" placeholder="Tên nhân viên" name="tenNhanVien" require>
                            </div>
                            <div>
                                <label for="txtSDT">Số điện thoại</label>
                                <input class="form-control" type="text" placeholder="Số điện thoại" name="SDT" require>
                            </div>
                            <div class="form-group">
                                <label for="txtTaikhoan">Tài Khoản</label>
                                <input type="text" id="taiKhoan" name="taiKhoan" class="form-control" placeholder="Tên nhân viên + MNV" required>
                            </div>
                            <div class="form-group">
                                <label for="txtPassword">Password</label>
                                <input type="Password" class="form-control" placeholder="**********" required disabled>
                            </div>
                        <div class="modal-footer" >
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-primary" name="themnhanvien"><a style="color:white">Tạo</a> </button>
                        </div>
                      </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

