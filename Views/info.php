<!DOCTYPE html>
<html lang="en">
<head>
    <base href="http://localhost/chotot/" target="_self">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChoVietDSR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <script type="text/javascript" src="./Publics/js/jquery.glasscase.min.js"></script>
</head>
<body>
<!-- header -->
<?php require_once "./Views/Khachhang/Header.php"?>

<!-- Body-->
<?php include_once "./Views/myinfo/".$data["page"].".php" ?>

<!-- footer -->
<?php include_once "./Views/Khachhang/Footer.php" ?>

    <script src="./Publics/js/js1.js"></script> 
</body>
</html>

