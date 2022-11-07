<!-- <?php $row= (json_decode($_SESSION['in4'],true));?>  -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="./Publics/img/logo2.jpg" alt="ChoVietDSR" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ChoVietDSR</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo "./data/avatar/".$row['anhDaiDien']?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $row['tenNhanVien']?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

        <?php 
          if ($row['IDChucVu']==2)
          {
            echo '<li class="nav-header">ADMIN</li>
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Quản lý nhân viên
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
            <a href="nhanvien/xemnhanvien" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Xem nhân viên</p>
            </a>
            <a href="nhanvien/themnhanvien" data-toggle="modal" data-target="#them" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Thêm nhân viên</p>
            </a>
              </li>
            </ul>
          </li>';

          }
         ?>


          <li class="nav-header">CUSTOMER</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="nhanvien/inbox" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="nhanvien/tuvan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tư vấn</p>
                </a>
              </li>
            </ul>
          </li>



          <li class="nav-header">FUNCTION</li>
          <li class="nav-item">
            <a href="nhanvien/getbdcd" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p class="text">Duyệt bài đăng</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Tạo Blog</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Sắp có</p>
            </a>
          </li>



      <li class="nav-header">LOG OUT</li>
          <li class="nav-item">
            <a href="nhanvien/logout" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Đăng Xuất</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>