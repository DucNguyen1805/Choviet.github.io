<!--     <div class="wrapper">
        <div class="header-media">
            <div class="header-media-item"><i class="fas fa-stream"></i></div>
            <div class="header-media-item-img"><img src="./img/logo2.jpg" alt=""></div>
            <div class="header-media-item2"></div>
            <div class="header-media-item3"></div>
        </div> -->

<!-- Menu lớn -->
        <div class="menu">
            <div class="menu-content">
                <div class="item-has-dropdown-all ">
                <div class="menu-content-item1"> <i class="fas fa-bars"></i> Danh Mục Sản Phẩm <i class="fas fa-chevron-down"></i>
                <div class="item1-dropdown node1">
                    <div class="item-has-dropdown1">
                    <?php

                      if (mysqli_num_rows($data["homelsp"]) > 0) {
                        while ($row = mysqli_fetch_assoc($data["homelsp"])) {
                                $mota=$row['moTaID'];
                                $id=$row['IDLoaiSanPham'];
                        echo '<div class="item1-dropdown-item1">
                        <img src="./Publics/img/item1.webp" alt="item1">
                        <a href="Homeid/'.$id.'" target="_self",value="'.$id.'"><p>'.$mota.'</p></a>
                        <i class="fas fa-angle-right"></i>
                    </div>';
                              }
                            }
                    ?>
  <!--                   <div class="dropdown1-content">
                        <div class="item-has-dropdown-lv2">
                       <p><a href="#" class="dropdown1-content-item">Kệ Lò Vi sóng <i class="fas fa-angle-down"></i></a></p>
                                   <div class="item-has-dropdown-lv2-content1">
                                       <a href="#" class="item-has-dropdown-lv2-content1-item">Lò Vi sóng kèm Giỏ</a>
                                       <a href="#" class="item-has-dropdown-lv2-content1-item">Lò Vi sóng kèm Tủ</a>
                                   </div>
                               
                              </div>
                       <p> <a href="#" class="dropdown1-content-item">Kệ Gia Vị</a></p>
                       <p><a href="#" class="dropdown1-content-item">Kệ Úp Chén bát</a></p> 
                       <p><a href="#" class="dropdown1-content-item">Bàn ăn</a></p> 
                    </div> -->
                  </div>
                </div>
                </div></div>
                <div class="menu-content-item2">
                    <img src="./Publics/img/gift.png" alt="phần thưởng">
                    <a href="#">ƯU ĐÃI THÀNH VIÊN</a>
                </div>
                <div class="menu-content-item2">
                    <img src="./Publics/img/call-back-img.png" alt="Hổ trợ">
                    <a href="#">HỔ TRỢ NHANH CHÓNG</a>
                </div>
                <div class="menu-content-item2">
                    <img src="./Publics/img/security.png" alt="Bảo mật">
                    <a href="#">BẢO MẬT THÔNG TIN</a>
                </div>
            </div>
        </div>
    <div class="main-banner">
        <div class="main-banner-content">
            <div class="main-banner-content-item1">
                <img src="./Publics/img/banner1.png" alt="item1">
            </div>
            <div class="main-banner-content-item2">
                <div class="main-banner-content-item2-col1">
                    <img src="./Publics/img/banner2.png" alt="item1">
                </div>
                <div class="main-banner-content-item2-col1">
                    <img src="./Publics/img/banner3.png" alt="item1">
                </div>
            </div>
        </div>
    </div>
<!--     <div class="main-banner2">
        <img src="./Publics/img/banner4.png" alt="item1">
    </div> -->
