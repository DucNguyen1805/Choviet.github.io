        <div class="menu">
            <div class="menu-content">
                <div class="item-has-dropdown-all ">
                <div class="menu-content-item1"> <i class="fas fa-bars"></i> Danh Mục Sản Phẩm <i class="fas fa-chevron-down"></i>
                <div class="item1-dropdown">
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