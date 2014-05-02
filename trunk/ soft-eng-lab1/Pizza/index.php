<?php
session_start();
if (isset($_SESSION['food_id'])){
	unset($_SESSION['food_id']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Пиццерия "АСЖАН"</title>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/x-icon" href="css/images/logo.png">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all">
<script src="js/jquery-1.8.0.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/functions.js"></script>
<script src="http://vkontakte.ru/js/api/openapi.js" type="text/javascript"></script>
</head>
<body>
<div id="wrapper">
  <div class="header">
    <div class="shell">
      <h1 id="logo"><a href="index.php"></a></h1>
    
      <div class="header-right">
        <div class="subscribe"> <a href="wishlist.php"><span></span>Ваш заказ!</a> </div>
        <div class="socials"> <a href="https://www.facebook.com/" class="facebook-ico">facebook</a> <a href="https://twitter.com/" class="twitter-ico">twitter</a> </div>
        <div class="cl">&nbsp;</div>
      </div>
      <div class="cl">&nbsp;</div>
      <nav id="navigation">
        <ul>
          <li><a href="index.php">Главная</a></li>
          <li><a href="aboutus.php">О нас</a></li>
          <li><a href="menu.php">Меню</a></li>
          <li><a href="gallery.php">Галерея</a></li>
          <li><a href="catering.php">Кейтеринг-улсуги</a></li>
          <li><a href="contact.php">Контакты</a></li>
        </ul>
      </nav>
      <div class="slider-holder"> <span class="left"></span> <span class="right"></span>
        <div class="big-slider">
          <ul class="slides">
            <li> <img src="css/images/slide-imga.png" alt="" class="alignleft">
              <div class="slide-cnt">
                <h2>Вкусная Пицца!<br></h2>
                <p>Vivamus ultrices tincidunt eros, sed sollicitudin est condimentum quis. Nulla a purus sit amet enim tincidunt varius vel a libero. Aenean neque dolor, tristique eu fermentum quis, imperdiet tincidunt ligula. Ut ut est erat, eget tempor odio vestibulum sed diam orci, vel mattis purus. Donec faucibus neque eu turpis imperdiet commodo. </p>
                <a href="#" class="red-btn">Узнать больше!</a> </div>
            </li>
            <li> <img src="css/images/slide-imga3.png" alt="" class="alignleft">
              <div class="slide-cnt">
                <h2>Удивительная Кухня!<br></h2>
                <p>Vivamus ultrices tincidunt eros, sed sollicitudin est condimentum quis. Nulla a purus sit amet enim tincidunt varius vel a libero. Aenean neque dolor, tristique eu fermentum quis, imperdiet tincidunt ligula. Ut ut est erat, eget tempor odio vestibulum sed diam orci, vel mattis purus. Donec faucibus neque eu turpis imperdiet commodo. </p>
                <a href="#" class="red-btn">Узнать больше!</a> </div>
            </li>
            <li> <img src="css/images/slide-img3.png" alt="" class="alignleft">
              <div class="slide-cnt">
                <h2>Отличное Кофе!<br></h2>
                <p>Vivamus ultrices tincidunt eros, sed sollicitudin est condimentum quis. Nulla a purus sit amet enim tincidunt varius vel a libero. Aenean neque dolor, tristique eu fermentum quis, imperdiet tincidunt ligula. Ut ut est erat, eget tempor odio vestibulum sed diam orci, vel mattis purus. Donec faucibus neque eu turpis imperdiet commodo. </p>
                <a href="#" class="red-btn">Узнать больше!</a> </div>
            </li>
          </ul>
        </div>
        
      </div>
     
    </div>
    
  </div>
  

  <div class="main">
    <div class="shell">
      <!-- cols -->
      <section class="cols">
        <div class="col">
          <h3>Быстрая доставка </h3>
          <img src="css/images/cols-img.png" alt="" class="alignleft">
          <div class="cnt">
            <p>Stkjpsdfledfmjowefmjolwefwof<br>
              sectetur adipiscing elit. Cras molestie condimentum conse am leom.</p>
             </div>
        </div>
        <div class="col">
          <h3>Качество блюд</h3>
          <img src="css/images/cols-img2.png" alt="" class="alignleft">
          <div class="cnt">
            <p>ladknflkdnasflkndsklnflkas'[lf[lfopsdajgpapgpmafpigpewrpgjepgiperjgpeor.</p>
             </div>
        </div>
        <div class="col">
          <h3>Приемлемые цены</h3>
          <img src="css/images/cols-img3.png" alt="" class="alignleft">
          <div class="cnt">
            <p>ad;fmmasdfpasfjaopefjijeiofjirfghrtghihjdifhisdfhiherifherghiehrigher.</p>
             </div>
        </div>
        <div class="cl">&nbsp;</div>
      </section>

      <div class="content">
        <h3>Что нового у нас...</h3>
        <div class="entry">
        
          <div class="cnt">
            <h4>Тема 1</h4>
            <p>LpoaskjpdfosjfiowejfowejofijrejwojowofijriowhgcdklvnklaneflgnlaengjfavninrgnjIONNADFVNERO. </p>
            <a href="#" class="dot">Подробнее</a> </div>
        </div>
        <div class="entry">
         
          <div class="cnt">
            <h4>Тема 2</h4>
            <p>ikjpJSDPASJFJ0WEJFOJJSDolnsdlfnjsdfwoerkfowjofdfmvladfnmvlnmdflvldfgn;sdfg;/adfbnealrgnlangvngo;rgijoergnoergno. </p>
            <a href="#" class="dot">Подробнее</a> </div>
        </div>
      </div>

      <aside class="sidebar">
        <div class="widget">
          
            <div id="vk_groups">
            <script type="text/javascript">
            VK.Widgets.Group("vk_groups", {mode: 0, width: "300"}, 43677251);
            </script>
          </div>
         
        </div>
      </aside>
            <div class="cl">&nbsp;</div>
    </div>
  </div>

  <div id="footer-push">
  </div>

</div>
<div id="footer">
  <div class="shell">
    <div class="footer-nav">
      <ul>
        <li><a href="index.php">Главная</a></li>
        <li><a href="aboutus.php">О нас</a></li>
        <li><a href="gallery.php">Галерея</a></li>
        <li><a href="menu.php">Меню</a></li>
        <li><a href="catering.php">Кейтеринг-услуги</a></li>
        <li><a href="contact.php">Контакты</a></li>
      </ul>
    </div>
    <p class="copy">© Copyright 2014
  </div>
</div>
</body>
</html>