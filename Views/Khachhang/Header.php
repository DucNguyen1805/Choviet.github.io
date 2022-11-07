        <header>
            <div class="header-content">

<!--Menu nhỏ-->
                <div class="item-hasdropdown-left">
                <div class="header-media-item1" onclick="opennav1()"><i class="fas fa-stream"></i></div>
                <div class="dropdown-left-content " id="dropdown-left-content">
                    <div class="dropdown-left-content-close" onclick="closenav1()"><i class="fas fa-arrow-left"></i></div>
                    
                    <div class="dropdown-left-content-img"><img src="./Publics/img/logo2.jpg" alt="logo"></div>
                    <div class="dropdown-left-content-login">
                        <a href="dangnhap" class="dropdown-left-content-login-item">Đăng Nhập</a>
                        <a href="dangky" class="dropdown-left-content-login-item">Đăng Kí</a>
                    </div>
                    <div class="dropdown-left-content-item1"> <i class="fas fa-bars"></i> Danh Mục Sản Phẩm <i class="fas fa-chevron-down"></i></div>
                    <div class="dropdown-left-content-item1-1 " onclick="bar1()">
                        <img src="./Publics/img/item1.webp" alt="item1">
                        <a href="#",value="">Đồ gia dụng</a>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="bar-content" id="bar1">
                       <p> <a href="#" class="bar-content-item">Bàn Trà</a></p>
                       <p> <a href="#" class="bar-content-item">Kệ Trang Trí</a></p>
                      <p>  <a href="#" class="bar-content-item">Kệ Giày dép</a></p>
                    </div>
                    <div class="dropdown-left-content-item1-1">
                        <img src="./Publics/img/item1.webp" alt="item1">
                        <a href="#",value="">Đồ điện tử</a>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="dropdown-left-content-item1-1">
                        <img src="./Publics/img/item1.webp" alt="item1">
                        <a href="#",value="">Bất đông sản</a>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    
                    <div class="dropdown-left-content-item1-1">
                        <img src="./Publics/img/item1.webp" alt="item1">
                        <p>Kệ Phòng Tắm</p>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="dropdown-left-content-item1-1">
                        <img src="./Publics/img/item1.webp" alt="item1">
                        <p>Kệ Phòng Tắm</p>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="dropdown-left-content-item1-1">
                        <img src="./Publics/img/item1.webp" alt="item1">
                        <p>Kệ Phòng Tắm</p>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="dropdown-left-content-item1-1">
                        <img src="./Publics/img/item1.webp" alt="item1">
                        <p>Kệ Phòng Tắm</p>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="dropdown-left-content-item21">
                        <img src="./Publics/img/gift.png" alt="phần thưởng">
                        <a href="#">ƯU ĐÃI HOT</a>
                    </div>
                    <div class="dropdown-left-content-item21">
                        <img src="./Publics/img/sale-img.png" alt="phần thưởng">
                        <a href="#">Khuyến mãi HOT</a>
                    </div>
                    <div class="dropdown-left-content-item21">
                        <img src="./Publics/img/call-back-img.png" alt="phần thưởng">
                    <a href="#">30 ngày đổi trả dễ dàng</a>
                    </div>
                  
                </div>  <div class="lopphu" id="lopphu"></div>
            
            </div>

<!--Menu nhỏ-->

<!--header lớn-->
<!-- <?php $row= (json_decode($_SESSION['informationUser'],true));?>  -->
            <div class="header-left">
                <img src="./Publics/img/logo2.jpg" alt="item1">
            </div>
            <div class="header-media-item2"><i class="fas fa-search"></i></div>
            <form action="search" method="POST">
            <div class="header-center">
                <div class="header-center-input">
                    <input id="search" name="timkiem" type="search" placeholder="Bạn Tìm gì...">
                    
                </div>
                <button style="width: 55px; height: 40px; background-color: rgb(253, 167, 6);border-radius: 0 5px px 5px 0;border: 0px; padding: 10px; padding-left: 10px;" class="btn-search" name="btnsearch"><i class="fas fa-search"></i></button>
            </div>
            </form>
            <div class="header-right">
                <div >
            <a href= "dangsanpham"><button type="button" style="float: right;" class="btn btn-primary">ĐĂNG SẢN PHẨM</button></a>
                </div>
                <?php 
                if(isset($_SESSION["submit"]))
                {?>
                <div>
                    <a href="xemtrangthai"class="btn-envelope"><i class="far fa-envelope"></i></a>
                    <div class="header-right-item4-icon"><p>1</p></div> 
                </div>
               <?php } ?> 

                <div class="header-right-item2">
                    <h1>1900.638.329</h1>
                    <p>Hỗ trợ mua hàng</p>
                </div>
<!--                 <div class="header-right-item3">
                    <a href="dangnhap"><img src="./Publics/img/user1.svg" alt="item1"></a>
                </div> -->
                

                <?php
               
                if(isset($_SESSION["submit"]))
                
                    {?>
                    
            <div class="header-right-item4">
                <div class="dropdown">
                      <a><img src="<?php echo "./data/avatar/".$row['anhDaiDien']?>" alt="item1"></a>
                    <div class="dropdown-content">

                        <a href="myInfo"><i class="fa fa-user-circle" style="color: #ffda00;"></i> <span>Hồ Sơ</span> <br/> <span><?php echo $row['tenKhachHang']?></span></a>
                        <a href="logout"><i class="fas fa-sign-out-alt" style="color: #ff0000;"></i> <span>Đăng Xuất</span></a> 
                    </div>
                </div>                
                       
            </div>  
                    <?php }else{ ?>
                        <div class="header-right-item4">
                    <a href="dangnhap" target="_self"><img src="./Publics/img/user1.svg" alt="item1"></a>
                </div>
                    <?php }?>
                
            </div>
            </div></div>
        </header>

        <style>
/* Style The Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>