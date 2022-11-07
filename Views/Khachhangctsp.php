<!DOCTYPE html>
<html lang="en">
<head>
    <base href="http://localhost/chotot/" target="_self">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChoVietDSR</title>
    <link rel="stylesheet" href="./Publics/css/reset.css">
    <link rel="stylesheet" href="./Publics/css/style.css">
    <link rel="stylesheet" href="./Publics/css/style3.css">
    <link rel="stylesheet" href="./Publics/css/media2.css">
    <link rel="stylesheet" href="./Publics/css/chatbox.css">
    <link rel="stylesheet" href="./Publics/font/fontawesome-free-5.15.3-web/css/all.min.css">
    <!--Chitiet-->
    
    <link href="./Publics/css/owl.carousel.css" rel="stylesheet" />
    <script type="text/javascript" src="./Publics/js/jquery-3.6.1.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script> -->
<!--     <script type="text/javascript" src="./Publics/js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src="./Publics/js/owl.carousel.min.js"></script>
    <link href="./Publics/css/glasscase.min.css" rel="stylesheet" />
    <!-- <script type="text/javascript" src="./Publics/js/jquery.glasscase.min.js"></script> -->
</head>
<body>
<!-- header -->
<?php require_once "./Views/Khachhang/Header.php"?>

<!-- nav -->
<?php include_once "./Views/Khachhang/nav2.php" ?>

<!-- Body-->
<?php include_once "./Views/Khachhang/".$data["page"].".php" ?>

<!-- quangcao -->
<?php include_once "./Views/Khachhang/quangcaofooter.php" ?>     

<!-- tintuc --> 
<?php include_once "./Views/Khachhang/meotintuc.php" ?>

<!-- footer -->
<?php include_once "./Views/Khachhang/Footer.php" ?>
<!-- chatbox -->
<div class="floating-chat">
    <i class="fa fa-comments" aria-hidden="true"></i>
    <div class="chat">
        <div class="header">
            <span class="title">
                Nguyễn Quốc Phi
            </span>
            <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>                 
        </div>
        <hr width="100%"
    color="white"
    align="center"
    size="2px">
        <ul class="messages">
            <li class="other">asdasdasasdasdasasdasdasasdasdasasdasdasasdasdasasdasdas</li>
            <li class="other">Are we dogs??? 🐶</li>
            <li class="self">no... we're human</li>
            <li class="other">are you sure???</li>
            <li class="self">yes.... -___-</li>
            <li class="other">if we're not dogs.... we might be monkeys 🐵</li>
            <li class="self">i hate you</li>
            <li class="other">don't be so negative! here's a banana 🍌</li>
            <li class="self">......... -___-</li>
        </ul>
        <div class="footerchat">
            <div class="text-box" contenteditable="true" disabled="true"></div>
            <button id="sendMessage">send</button>
        </div>
    </div>
</div>
<!-- /chatbox -->
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
var element = $('.floating-chat');
var myStorage = localStorage;

if (!myStorage.getItem('chatID')) {
    myStorage.setItem('chatID', createUUID());
}

setTimeout(function() {
    element.addClass('enter');
}, 1000);

element.click(openElement);

function openElement() {
    var messages = element.find('.messages');
    var textInput = element.find('.text-box');
    element.find('>i').hide();
    element.addClass('expand');
    element.find('.chat').addClass('enter');
    var strLength = textInput.val().length * 2;
    textInput.keydown(onMetaAndEnter).prop("disabled", false).focus();
    element.off('click', openElement);
    element.find('.header button').click(closeElement);
    element.find('#sendMessage').click(sendNewMessage);
    messages.scrollTop(messages.prop("scrollHeight"));
}

function closeElement() {
    element.find('.chat').removeClass('enter').hide();
    element.find('>i').show();
    element.removeClass('expand');
    element.find('.header button').off('click', closeElement);
    element.find('#sendMessage').off('click', sendNewMessage);
    element.find('.text-box').off('keydown', onMetaAndEnter).prop("disabled", true).blur();
    setTimeout(function() {
        element.find('.chat').removeClass('enter').show()
        element.click(openElement);
    }, 500);
}

function createUUID() {
    // http://www.ietf.org/rfc/rfc4122.txt
    var s = [];
    var hexDigits = "0123456789abcdef";
    for (var i = 0; i < 36; i++) {
        s[i] = hexDigits.substr(Math.floor(Math.random() * 0x10), 1);
    }
    s[14] = "4"; // bits 12-15 of the time_hi_and_version field to 0010
    s[19] = hexDigits.substr((s[19] & 0x3) | 0x8, 1); // bits 6-7 of the clock_seq_hi_and_reserved to 01
    s[8] = s[13] = s[18] = s[23] = "-";

    var uuid = s.join("");
    return uuid;
}

function sendNewMessage() {
    var userInput = $('.text-box');
    var newMessage = userInput.html().replace(/\<div\>|\<br.*?\>/ig, '\n').replace(/\<\/div\>/g, '').trim().replace(/\n/g, '<br>');

    if (!newMessage) return;

    var messagesContainer = $('.messages');

    messagesContainer.append([
        '<li class="self">',
        newMessage,
        '</li>'
    ].join(''));

    // clean out old message
    userInput.html('');
    // focus on input
    userInput.focus();

    messagesContainer.finish().animate({
        scrollTop: messagesContainer.prop("scrollHeight")
    }, 250);
}

function onMetaAndEnter(event) {
    if ((event.metaKey || event.ctrlKey) && event.keyCode == 13) {
        sendNewMessage();
    }
}



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


