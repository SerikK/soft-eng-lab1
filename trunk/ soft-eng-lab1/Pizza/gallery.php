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
<link rel="stylesheet" href="css/stylegallery.css" type="text/css" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all">
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" />  
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
<script src="js/gallery/jquery-1.7.2.min.js"></script>
<script src="js/gallery/jquery-ui-1.8.18.custom.min.js"></script>
<script src="js/gallery/jquery.smooth-scroll.min.js"></script>
<script src="js/gallery/lightbox.js"></script>
</head>
<body>

<div id="wrapper">

  <div class="header">

    <div class="shell">
      <h1 id="logo"><a href="index.php"></a></h1>
      <div class="testimonials">

      </div>

      <div class="header-right">
        <div class="subscribe"> <a href="#"><span></span>Ваш заказ!</a> </div>
        <div class="socials"> <a href="#" class="facebook-ico">facebook</a> <a href="#" class="twitter-ico">twitter</a> </div>

      </div>


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

    </div>

  </div>


  <div class="main">
    
    <div class="content">
    <span><h3>Фотогаллеря</h3></span>
      <div class="imageRow">
      <span><h1>Асжан...</h1></span>
    <div class="set">
      <div class="single first">
        <a href="images/examples/image-1.jpg" rel="lightbox[plants]" title="Click on the right side of the image to move forward."><img src="images/examples/thumb-1.jpg" alt="Plants: image 1 0f 4 thumb" /></a>
      </div>
      <div class="single">
        <a href="images/examples/image-2.jpg" rel="lightbox[plants]" title="Alternately you can press the right arrow key." ><img src="images/examples/thumb-2.jpg" alt="Plants: image 2 0f 4 thumb" /></a>
      </div>
      <div class="single">
        <a href="images/examples/image-3.jpg" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."><img src="images/examples/thumb-3.jpg" alt="Plants: image 3 0f 4 thumb" /></a>
      </div>
      <div class="single">
        <a href="images/examples/image-5.jpg" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."><img src="images/examples/thumb-5.jpg" alt="Plants: image 4 0f 4 thumb" /></a>
      </div>
      <div class="single">
        <a href="images/examples/image-5.jpg" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."><img src="images/examples/thumb-5.jpg" alt="Plants: image 4 0f 4 thumb" /></a>
      </div>
      <div class="single">
        <a href="images/examples/image-5.jpg" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."><img src="images/examples/thumb-5.jpg" alt="Plants: image 4 0f 4 thumb" /></a>
      </div>
       <div class="single">
        <a href="images/examples/image-5.jpg" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."><img src="images/examples/thumb-5.jpg" alt="Plants: image 4 0f 4 thumb" /></a>
      </div>
      <div class="single">
        <a href="images/examples/image-5.jpg" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."><img src="images/examples/thumb-5.jpg" alt="Plants: image 4 0f 4 thumb" /></a>
      </div>
      <div class="single">
        <a href="images/examples/image-5.jpg" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."><img src="images/examples/thumb-5.jpg" alt="Plants: image 4 0f 4 thumb" /></a>
      </div>
      <div class="single">
        <a href="images/examples/image-2.jpg" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."><img src="images/examples/thumb-5.jpg" alt="Plants: image 4 0f 4 thumb" /></a>
      </div>
      <div class="single">
        <a href="images/examples/image-5.jpg" rel="lightbox[plants]" title="The script preloads the next image in the set as you're viewing."><img src="images/examples/thumb-5.jpg" alt="Plants: image 4 0f 4 thumb" /></a>
      </div>
                                
      <div class="single last">
        <a href="images/examples/image-6.jpg" rel="lightbox[plants]" title="Click the X or anywhere outside the image to close"><img src="images/examples/thumb-6.jpg" alt="Plants: image 4 0f 4 thumb" /></a>
      </div>
    </div>
    </div>

    

    </div>
    
    </div>

  </div>



</div>
<div id="footer">
  <div class="shell">
    <div class="footer-nav">
      <ul>
          <li><a href="index.php">Главная</a></li>
          <li><a href="aboutus.php">О нас</a></li>
          <li><a href="menu.php">Меню</a></li>
          <li><a href="gallery.php">Галерея</a></li>
          <li><a href="catering.php">Кейтеринг-улсуги</a></li>
          <li><a href="contact.php">Контакты</a></li>
      </ul>
    </div>
    <p class="copy">© Copyright 2014
  </div>
</div>
</body>
</html>