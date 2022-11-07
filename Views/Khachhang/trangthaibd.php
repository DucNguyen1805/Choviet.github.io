     <!-- <?php $row= (json_decode($_SESSION['informationUser'],true));?>  -->
            <div class="main-sp-30">
                <div class="main-sp-2-left-content">
                    <div class="ctiet-sp2">
                        <div class="tablink-list">
                            <button class="tablink" onclick="openCity('patch1', this, '#000')" id="defaultOpen">CHƯA DUYỆT</button>
                            <button class="tablink" onclick="openCity('patch2', this, '#000')">ĐÃ ĐƯỢC DUYỆT</button>
                            <button class="tablink" onclick="openCity('patch3', this, '#000')">ĐÃ XÓA</button>
                         </div>
                         <div class="a-line"></div>
                        <div id="patch1" class="tabcontent">
                            <div class="tabcontent-text">
                                <div class="tabcontent-text-title">
                                    <div class="media-nx-title media-nx-title2">
                                       CHƯA DUYỆT <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                            <div class="patch1-item">
                        <div class="main-sp-30-right-content">
                    <div class="main-sp-2-right-content-contents">
                        <?php  
                            if(mysqli_num_rows($data["bdkhachhangcd"])>0)
                            {
                                while($row= mysqli_fetch_assoc($data["bdkhachhangcd"]))
                                {?>
                                <div class="main-sp-2-right-content-item">
                            <div class="main-sp-2-right-content-item-img">
                                <img style="height:85px;" src="./data/sanpham/<?php echo $row['Ha'] ?>" alt="item1">
                            </div>
                            <div class="main-sp-2-right-content-item-text">
                                 <div class="band">ChoVietDSR</div>
                                <div class="item-name-band"><?php echo $row['tenSanPham'] ?></div>
                                <div class="band-price"><?php echo $row['Gia'] ?>vnđ</div>
                            </div>
                        </div>  
                               <?php }
                           }else{
                         ?>
                            <h1>CHƯA CÓ SẢN PHẨM NÀO</h1>
                    <?php }?>
                    </div>
                </div>
                            </div>
                            </div>
                          </div>
    
                          <div id="patch2" class="tabcontent">
                        <div class="main-sp-30-right-content">
                    <div class="main-sp-2-right-content-contents">
                        <?php if(mysqli_num_rows($data["bdkhachhangdd"])>0)
                            while($row= mysqli_fetch_assoc($data["bdkhachhangdd"]))
                            {?>

                            <div class="main-sp-2-right-content-item">
                            <div class="main-sp-2-right-content-item-img">
                                <img style="height:85px;" src="./data/sanpham/<?php echo $row['Ha'] ?>" alt="item1">
                            </div>
                            <div class="main-sp-2-right-content-item-text">
                                <div class="band">ChoVietDSR</div>
                                <div class="item-name-band"><?php echo $row['tenSanPham'] ?></div>
                                <div class="band-price"><?php echo $row['Gia'] ?>vnđ</div>
                            </div>
                        </div>    
                       <?php } ?> 
                    </div>
                </div>
                          </div>
                          
                          <div id="patch3" class="tabcontent">
                            <h1>ĐÃ XÓA</h1>  
                          </div>
                    </div>
                </div>
                    <div class="media-nx">
                        <div class="media-nx-title">
                            ĐÃ ĐƯỢC DUYỆT <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="tabcontent-item1">
                            <p>Nội dung đang cập nhật</p>
                        </div>
                        <div class="media-nx-title">
                            ĐÃ ĐƯỢC DUYỆT <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>       
            </div>
    <script>
        var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active2";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
    </script>

<script src="./Publics/js/js2.js"></script>
