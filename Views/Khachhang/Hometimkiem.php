
        <div class="main-item">     
        
<!--Có reponsive-->
            <div class="main-item-content2">
                <div class="main-item-content2-title">
                    <div class="main-item-content2-title1">Sản phẩm liên quan</div>
                </div>

                <div class="main-item-content2-content owl-carousel">
                        <?php 
                        if (mysqli_num_rows($data["showsptimkiem"]) > 0) {
                        while ($row = mysqli_fetch_assoc($data["showsptimkiem"])) {
                                $hinhsanpham=$row['Ha'];
                                $tensanpham=$row['tenSanPham'];
                                $gia1=$row['Gia'];
                                $gia=number_format($gia1);
                                $IDBD= $row['IDBD'];
                        echo '<a href="chitietsanpham/'.$IDBD.'" class="main-item-content-list-item">
                        <div class="main-item-content-list-item-img">
                            <img src="'."./data/sanpham/".''.$hinhsanpham.'" alt="item1">
                        </div>
                        <div id="tensptimkiem" class="main-item-content-list-item-title ">
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
                            <div class="new-price">'.$gia.'VNĐ</div>
                        </div>
                        <div class="item-choose1">
                            Chi Tiết
                        </div>
                    </a>';

                              }
                            
                        }
                        else
                        {
                            echo '<div class="Thongbao " >
                            <h3>Không tìm thấy sản phẩm nào</h3>
                            </div>';
                        }
                ?>

                </div>
            </div>
        </div>
