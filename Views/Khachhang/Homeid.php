<?php 
    if (mysqli_num_rows($data["motaid"]) > 0) {
        $row = mysqli_fetch_assoc($data["motaid"]);
         $moTaID = $row['moTaID'];
    }
 ?>
            <div class="main-item-content2">
                
                <div class="main-item-content2-title">
                    <div class="main-item-content2-title1"><?php echo $moTaID ?></div>
<!--                     <div class="main-item-content2-title2"><a href="#">Kệ bếp</a> / <a href="#">Kệ Phòng Khách</a> / <a href="#">Kệ Phòng tắm</a> / <a href="#">Kệ làm việc</a> / <a href="#">Kệ làm việc</a> </div> -->
<!--                     <div class="bar-2" onclick="bar2()" >
                        <div class="container" onclick="myFunction(this)">
                            <div class="bar1"></div>
                            <div class="bar2"></div>
                            <div class="bar3"></div>
                          </div>
                    </div> -->
                </div>
<!--                 <div class="bar-2-content">
                    <div class="bar-2-content-item"> <a href="#"></a> Kệ Bếp</div>
                    <div class="bar-2-content-item"> <a href="#"></a> Kệ Phòng Khách</div>
                    <div class="bar-2-content-item"> <a href="#"></a> Kệ Phòng Tắm</div>
                    <div class="bar-2-content-item"> <a href="#"></a> Kệ Phòng Làm Việc</div>
                    <div class="bar-2-content-item"> <a href="#"></a> Kệ Phòng Ngủ</div>
                </div> -->

                <div class="main-item-content2-content owl-carousel">
                        <?php 
                        if (mysqli_num_rows($data["id"]) > 0) {
                        while ($row = mysqli_fetch_assoc($data["id"])) {
                                $hinhsanpham=$row['Ha'];
                                $tensanpham=$row['tenSanPham'];
                                $gia=$row['Gia'];
                                $IDBD= $row['IDBD'];
                               
                        echo '<a href="chitietsanpham/'.$IDBD.'" class="main-item-content-list-item">
                        <div class="main-item-content-list-item-img">
                            <img src="'."./data/sanpham/".''.$hinhsanpham.'" alt="item1">
                        </div>
                        <div class="main-item-content-list-item-title">
                            '.$tensanpham.'
                        </div>
                        <div class="main-item-content-list-item-star">
                            <div class="main-item-content-list-item-star-item">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="main-item-content-list-item-star-text">
                            0 đánh giá
                        </div>
                            
                        </div>
                        <div class="main-item-content-list-item-price">
                            <div class="new-price">'.$gia.'đ</div>
                        </div>
                        <div class="item-choose1">
                            Chi Tiết
                        </div>
                    </a>';
                              }
                            
                        }
                        else
                        {
                            echo 'HIỆN CHƯA CÓ BÀI ĐĂNG NÀO VỀ SẢN PHẨM NÀY';
                        }
                ?>
                </div>
            </div>