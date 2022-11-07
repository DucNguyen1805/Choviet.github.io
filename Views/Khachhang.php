<!DOCTYPE html>
<html lang="en">
<head>
    <base href="http://localhost/chotot/" target="_self">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChoVietDSR</title>
    <link rel="icon" type="image/png" sizes="16x16" href="./Publics/img/logo2.jpg">
    <link rel="stylesheet" href="./Publics/css/reset.css">
    <link rel="stylesheet" href="./Publics/css/style.css">
    <link rel="stylesheet" href="./Publics/css/style3.css">
    <link rel="stylesheet" href="./Publics/css/media2.css">
    <link rel="stylesheet" href="./Publics/font/fontawesome-free-5.15.3-web/css/all.min.css">
    <!--Chitiet-->
    
    <link href="./Publics/css/owl.carousel.css" rel="stylesheet" />
    <script type="text/javascript" src="./Publics/js/jquery-3.6.1.min.js"></script>
<!--     <script type="text/javascript" src="./Publics/js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src="./Publics/js/owl.carousel.min.js"></script>
    <link href="./Publics/css/glasscase.min.css" rel="stylesheet" />
    <!-- <script type="text/javascript" src="./Publics/js/jquery.glasscase.min.js"></script> -->
</head>
<body>
<!-- header -->
<?php require_once "./Views/Khachhang/Header.php"?>

<!-- nav -->
<?php include_once "./Views/Khachhang/nav.php" ?>

<!-- Body-->
<?php include_once "./Views/Khachhang/".$data["page"].".php" ?>

<!-- quangcao -->
<?php include_once "./Views/Khachhang/quangcaofooter.php" ?>     

<!-- tintuc --> 
<?php include_once "./Views/Khachhang/meotintuc.php" ?>

<!-- footer -->
<?php include_once "./Views/Khachhang/Footer.php" ?>

<!-- <script>
            $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            console.log(value);
            $("#tensptimkiem").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
</script> -->
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
    <script src="./Publics/js/js1.js"></script> 
</body>
</html>


