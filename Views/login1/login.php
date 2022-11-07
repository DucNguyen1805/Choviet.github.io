<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Thành viên </b>DSR
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <form action="xulydangnhap" method="post">
        <div class="input-group mb-3">
          <input type="email" id="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" id="matkhau" name="matkhau" class="form-control" placeholder="Password">
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
        <input type="text" id="captcha" name="input"><img src="./Core/captcha.php" title="" alt="">
<!--         <button id="newCaptcha" onclick="changeCaptcha()"><span class="fas fa-redo-alt"></span></button><br/> -->
        <p id="message">
            <?php // hiển thị thông báo đúng hay sai
            if(isset($_SESSION['message']))
            {

              echo $_SESSION['message'];
              unset($_SESSION['message']);  
            }
             ?>
        </p>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" id="btndangnhap" name="btndangnhap" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
<!--         <h3><?php echo $data["ketqua"] ?></h3> -->
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links -->
      <p class="mb-0">
        <a href="index" class="text-center">Back Home</a>
      </p>
      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="dangky" class="text-center">Register a new membership</a>
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
