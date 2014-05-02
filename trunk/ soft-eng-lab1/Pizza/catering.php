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
<link rel="stylesheet" href="css/styleaboutus.css" type="text/css" media="all">
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
        <div class="subscribe"> <a href="#"><span></span>Ваш заказ!</a> </div>
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
      <h3><center><span></span> Кейтеринг-услуги</center></h3>
      <div class="img"><img src="css/images/cat.jpg" width="400" height="240"></div>
      <p>Ке́йтеринг (англ. catering от cater — «поставлять провизию») — отрасль общественного питания, связанная с оказанием услуг на удалённых точках, включающая все предприятия и службы, оказывающие подрядные услуги по организации питания сотрудников компаний и частных лиц в помещении и на выездном обслуживании, а также осуществляющих обслуживание мероприятий различного назначения и розничную продажу готовой кулинарной продукции.
На практике под кейтерингом подразумевается не только приготовление пищи и доставка, но и обслуживание, сервировка, оформление и тому подобные услуги.
Виды кейтеринга различают по месту, способу оказания услуг и их стоимости: событийный кейтеринг, питание на транспорте (в том числе авиационный кейтеринг или бортовое питание), социальное питание (образовательные и медицинские учреждения, корпоративное питание, в исправительных заведениях, армии и т. д.)</p>
              </div>
    
    
    

    </div>

  </div>



</div>
<div id="footer">
  <div class="shell">
    <div class="footer-nav">
      <ul>
        <li><a href="#">Главная</a></li>
        <li><a href="#">О нас</a></li>
        <li><a href="#">Галерея</a></li>
        <li><a href="#">Меню</a></li>
        <li><a href="#">Кейтеринг-услуги</a></li>
        <li><a href="#">Контакты</a></li>
      </ul>
    </div>
    <p class="copy">© Copyright 2014
  </div>
</div>
</body>
</html>