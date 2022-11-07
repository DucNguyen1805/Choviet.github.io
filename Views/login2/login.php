<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Nhân viên </b>DSR
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <form action="nhanvien/xulydangnhapnv" method="post">
        <div class="input-group mb-3">  
          <input type="text" id="taikhoan" name="taikhoan" class="form-control" placeholder="Tài khoản">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" id="password" name="matkhau" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <p style="color:#9b190a;" id="message1">
            <?php // hiển thị thông báo đúng hay sai
            if(isset($_SESSION['message1']))
            {

              echo $_SESSION['message1'];
              unset($_SESSION['message1']);  
            }
             ?>
        </p>
        <p>Nhập mã reCaptcha</p>
        <input type="text" id="captcha" name="input2"><img src="./Core/captcha2.php" title="" alt="">
<!--         <button id="newCaptcha" onclick="changeCaptcha()"><span class="fas fa-redo-alt"></span></button><br/> -->
        <p id="message">
            <?php // hiển thị thông báo đúng hay sai
            if(isset($_SESSION['message2']))
            {
              echo $_SESSION['message2'];
              unset($_SESSION['message2']);  
            }
             ?>
        </p>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" id="btndangnhap" name="btndangnhapnv" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
<!--         <h3><?php echo $data["ketqua"] ?></h3> -->
      </form>
      <!-- /.social-auth-links -->
      <p class="mb-0">
        <a href="index" class="text-center">Customer</a>
      </p>
      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src= "./Publics/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src= "./Publics/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src= "./Publics/dist/js/adminlte.min.js"></script>
</body>
</html>
