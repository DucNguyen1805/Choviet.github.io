<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <b>Tạo thành viên </b>DSR
  </div>

  <div class="card">
    <div class="card-body register-card-body">
        <p style=" text-align: center ;color:#9b190a;" id="hack">
            <?php // hiển thị thông báo đúng hay sai
            if(isset($_SESSION['hack']))
            {

              echo $_SESSION['hack'];
              unset($_SESSION['hack']); 
            }
             ?>
        </p>
      <p class="login-box-msg">Register a new membership</p>

      <form action="xulydangky" method="post">
        <div class="input-group mb-3">
          <input type="text" id="tenkhachhang" name="tenkhachhang" class="form-control" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
              <p style="color:#9b190a;" id="saiten">
            <?php // hiển thị thông báo đúng hay sai
            if(isset($_SESSION['saiten']))
            {

              echo $_SESSION['saiten'];
              unset($_SESSION['saiten']);  
            }
             ?>
        </p>
          <div class="input-group mb-3">
          <input type="date" id="ngaysinh" name="ngaysinh" class="form-control">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-calendar"></span>
            </div>
          </div>
        </div>
        <p style="color:#9b190a;" id="saingaysinh">
            <?php // hiển thị thông báo đúng hay sai
            if(isset($_SESSION['saingaysinh']))
            {

              echo $_SESSION['saingaysinh'];
              unset($_SESSION['saingaysinh']);  
            }
             ?>
        </p>
        <div class="input-group mb-3">
          <input type="phone" id="sdt" name="sdt" class="form-control" placeholder="0123456789">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-address-book"></span>
            </div>
          </div>
        </div>
            <p style="color:#9b190a;" id="saisdt">
            <?php // hiển thị thông báo đúng hay sai
            if(isset($_SESSION['saisdt']))
            {

              echo $_SESSION['saisdt'];
              unset($_SESSION['saisdt']);  
            }
             ?>
        </p>
        <div class="input-group mb-3">
          <input type="text" id="CCCD" name="CCCD" class="form-control" placeholder="Số căn cước công dân">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-ad"></span>
            </div>
          </div>
        </div>
        <p style="color:#9b190a;" id="saiCMND">
            <?php // hiển thị thông báo đúng hay sai
            if(isset($_SESSION['saiCMND']))
            {

              echo $_SESSION['saiCMND'];
              unset($_SESSION['saiCMND']);  
            }
             ?>
        </p>
        <div class="input-group mb-3">
          <input type="text" id="diachi" name="diachi" class="form-control" placeholder="Địa chỉ">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-address-card"></span>
            </div>
          </div>
        </div>
        <p style="color:#9b190a;" id="saidiachi">
            <?php // hiển thị thông báo đúng hay sai
            if(isset($_SESSION['saidiachi']))
            {

              echo $_SESSION['saidiachi'];
              unset($_SESSION['saidiachi']);  
            }
             ?>
        </p>
        <div class="input-group mb-3">
          <input type="email" id="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
          <p style="color:#9b190a;" id="saiemail">
            <?php // hiển thị thông báo đúng hay sai
            if(isset($_SESSION['saiemail']))
            {

              echo $_SESSION['saiemail'];
              unset($_SESSION['saiemail']); 
            }
             ?>
        </p>
        <div class="input-group mb-3">
          <input type="password" id="matkhau" name="matkhau" class="form-control" placeholder="Mật khẩu">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          <p style="color:#9b190a;" id="saimatkhau">
            <?php // hiển thị thông báo đúng hay sai
            if(isset($_SESSION['saimatkhau']))
            {

              echo $_SESSION['saimatkhau'];
              unset($_SESSION['saimatkhau']); 
            }
             ?>
        </p>
        <div class="input-group mb-3">
          <input type="password" id="rpassword" name="rpassword" class="form-control" placeholder="Nhập lại mật khẩu">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          <p style="color:#9b190a;" id="sainhaplaipass">
            <?php // hiển thị thông báo đúng hay sai
            if(isset($_SESSION['sainhaplaipass']))
            {

              echo $_SESSION['sainhaplaipass'];
              unset($_SESSION['sainhaplaipass']); 
            }
             ?>
        </p>
        <div class="row">
          <!-- <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div> -->
          <div class="col-4">
          <div class="select">
              <select class="form-select" name="gioitinh">
              <option value="1">Nam</option>
              <option value="0" selected>Nữ</option>
              </select>
        </div>
        </div>
          <!-- /.col -->
          <div class="col-8">
            <button type="submit" id="btnRegister" name="btnRegister" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
        <?php if(isset($data["result"]) )
        { ?>
          <?php  
          if($data["result"] == "true")
          {
            echo "<script>alert('Đăng ký thành công đăng nhập nào!')
            location.href = 'dangnhap';
            </script>";
          }
          if(($data["result"] == "false"))
          {

            echo "<h3>Ôi...Đăng ký thất bại rồi >.<</h3>";
          }
        ?>

        <?php } ?>

      </form>

      <!-- <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div> -->

      <a href="dangnhap" target="_self" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src= "./Publics/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src= "./Publics/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src= "./Publics/dist/js/adminlte.min.js"></script>

</body>
</html>