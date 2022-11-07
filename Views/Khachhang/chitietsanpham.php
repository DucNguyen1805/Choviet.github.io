<?php
// echo '<pre>';
// while ($row = mysqli_fetch_assoc($data["ttbd"])) {
//     print_r($row);
// }
// echo '</pre>';
if (mysqli_num_rows($data["ttbd"]) > 0) {
    $infomationProduct = mysqli_fetch_assoc($data["ttbd"]);
}
?>
<body>
    <div class="wrapper">

        <div class="main-sp">
            <div class="main-sp-title">
                <p> <a href="home">Trang Chủ</a> > <a>
                    <?php 
                switch ($infomationProduct['IDLoaiSanPham']) {
              case 1:
                echo "Bất động sản";
                break;
              case 10:
                echo "Xe cộ";
                break;
              case 20:
                echo "Đồ điện tử";
                break;
              case 30:
                echo "Đồ nội thất";
                break;
              case 40:
                echo "Giải trí, sở thích";
                break;
              case 50:
                echo "Thú cưng";
                break;
              case 60:
                echo "Điện lạnh";
                break;
              case 70:
                echo "Đồ văn phòng";
                break;
              case 80:
                echo "Thời trang";
                break;
}
                 ?></a></p>
            </div>
            <!-- hiện sản phẩm -->
            <div class="main-sp-1">
                <div class="main-sp-content">
                    <div class="main-sp-1-title">
                        <h1><?php echo $infomationProduct['tenSanPham'] ?></h1>
                    </div>
                    <div class="main-sp-content-mid">
                        <div class="main-sp-content-left">
                            <div class="main-sp-content-left-1">
                                <div class="container">
                                    <div class="mySlides">
                                        <img src="<?php echo './data/sanpham/' . $infomationProduct['Ha'] ?>" style="width:100%; height: 400px;">
                                    </div>
                                    <?php
                                    if (mysqli_num_rows($data["halienquan"]) > 0) {
                                        while ($row = mysqli_fetch_assoc($data["halienquan"])) { ?>

                                            <div class="mySlides">
                                                <img src="<?php echo './data/sanpham/' . $row['Ha_ten'] ?>" style="width:100%; height: 400px;">
                                            </div>

                                    <?php   }
                                    }
                                    ?>

                                    <div class="row">
                                        <div class="column">
                                            <img class="demo cursor" src="./data/sanpham/sanpham_df.jpg" style="width:50%" onclick="currentSlide(1)" alt="img">
                                        </div>

                                        <div class="column">
                                            <img class="demo cursor" src="./data/sanpham/sanpham_df.jpg" style="width:50%" onclick="currentSlide(2)" alt="Cinque Terre">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="./data/sanpham/sanpham_df.jpg" style="width:50%" onclick="currentSlide(3)" alt="Mountains and fjords">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="./data/sanpham/sanpham_df.jpg" style="width:50%" onclick="currentSlide(4)" alt="Northern Lights">

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="main-sp-content-right">
                            <div class="main-sp-content-right-content-all">
                                <div class="main-sp-content-right-title">
                                    Thông tin người bán
                                </div>
                                <div class="main-sp-content-right-content">
                                    <div class="main-sp-content-right-item">
                                        <img src="<?php echo "./data/avatar/" . $infomationProduct['anhDaiDien'] ?>" alt="item1">
                                        <p><span><?php echo $infomationProduct['tenKhachHang'] ?></span></p>
                                    </div>
                                    <div class="main-sp-content-right-item">
                                        <img src="./data/avatar/data/diachi.jpg" alt="item1">
                                        <p><span><?php echo $infomationProduct['diaChi'] ?></span></p>
                                    </div>
                                    <button style="background-color:FFE1E1;
                                    width: 278px; height: 41px;
                                    " onclick="showsdt()">
                                    <div class="main-sp-content-right-item">
                                        <img src="./data/avatar/data/dt.jpg" alt="item1">
                                        <p><span id="sdt"><?php echo substr($infomationProduct['SDT'],0,6)."xxxx"?></span></p>
                                        <span id="unshow" style="margin-left: 15px;">NHẤN ĐỂ HIỆN SỐ</span>
                                    </div></button>
                                    <div class="main-sp-content-right-item">
                                        <img src="./Publics/img/item1/evo_policy_img_4_e263a21887974bbeaf61c36f5bd14ab4.png" alt="item1">
                                        <p><span>Khiếu nại </span><a href="">Liên hệ với nhân viên</a> </p>
                                    </div>
                                    <div class="main-sp-content-left-2-price"><?php echo number_format($infomationProduct['Gia']) ?>VNĐ</div>
                                    <div class="main-sp-content-left-2-btn">
                                        <button class="chatbox">Liên hệ người bán</button>
                                        <!--                                       <button>SMS</button> -->

                                    </div>
                                    <!--                             <div class="main-sp-content-left-2-share">
                                      <button class="main-sp-content-left-2-share-item"><i class="fas fa-check"></i> Thích 40</button>
                                      <button class="main-sp-content-left-2-share-item"><i class="fab fa-facebook"></i> Chia sẻ 40</button>
                                      <button class="main-sp-content-left-2-share-item"><i class="fab fa-twitter"></i> Tweet </button>
                            </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-sp-2">
                <!-- PC -->
                <div class="main-sp-2-left-content">
                    <div class="ctiet-sp2">
                        <div class="tablink-list">
                            <button class="tablink">MÔ TẢ</button>
                        </div>
                        <div class="a-line"></div>
                        <div id="patch1" class="tabcontent" style="display: block;">
                            <div class="tabcontent-text">
                                <div class="tabcontent-text-title">
                                    <div class="media-nx-title media-nx-title2">
                                        Mô tả <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div class="patch1-item">
                                    <h1>Tên: <?php echo $infomationProduct['tenSanPham'] ?></h1>
                                    <p>Giá: <?php echo number_format($infomationProduct['Gia']) ?>VNĐ</p>
                                    <p>Mô tả sản phẩm:</p>
                                    <p><?php echo $infomationProduct['moTa'] ?></p>



                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Media -->
                <div class="media-nx">
                    <h1>Đánh Giá Sản Phẩm</h1>
                    <div class="main-item-content-list-item-star-item">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="tabcontent-item2">
                        <p>Dựa trên 100 đánh giá</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
    
    function showsdt() {
  document.getElementById("sdt").innerHTML = "<?php echo $infomationProduct['SDT'] ?>";
  document.getElementById("unshow").innerHTML = "";
}
</script>