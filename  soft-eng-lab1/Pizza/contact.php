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
<link rel="stylesheet" href="css/stylecontact.css" type="text/css" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all">
<script src="js/jquery-1.8.0.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/functions.js"></script>
</head>
<body>

<div id="wrapper">

  <div class="header">

    <div class="shell">
      <h1 id="logo"><a href="index.php"></a></h1>
      <div class="testimonials">

      </div>

      <div class="header-right">
        <div class="subscribe"> <a href="#"><span></span>Subscribe</a> </div>
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

    </div>

  </div>


  <div class="main">
    <div class="content">
    <div class="right">
     <span><h3>На Карте</h3></span>
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2907.188056133155!2d76.90602816931155!3d43.22651667799973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x388368d8257a6ae1%3A0x64a935510852e3d!2z0YPQuy4g0JDRg9GN0LfQvtCy0LAgMTQw!5e0!3m2!1sru!2s!4v1398713629041" width="400" height="300" frameborder="0" style="border:0"></iframe>
     </div>
     
     <div class="left">
     <span><h3>Наши координаты</h3></span>
     <p><h4>Время работы:
      10:00–00:00, без выходных</h4></p>

      <p><h4>Адресс:</h4></p>
      <p><h4>Алматы, ул. Тимирязева, 75, уг. ул. Ауэзова</h4></p>
      <p><h4>Телефон:</p>
      <p><h4>+7(727)274-43-61, +7(727)275-47-98</h4></p>

      <p><h4>aszhan@inbox.ru</h4></p>
     

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