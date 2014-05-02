<?php
    require_once 'db_config.php';
?>
<html lang="en">
<head>
<title>Пиццерия "АСЖАН"</title>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/x-icon" href="css/images/logo.png">
<link rel="stylesheet" href="css/stylemenu.css" type="text/css" media="all">
<script src="js/jquery-1.8.0.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/functions.js"></script>
<script src="bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>

<div id="wrapper">

  <div class="header">

    <div class="shell">
      <h1 id="logo"><a href="index.php"></a></h1>
      <div class="testimonials">

      </div>

      <div class="header-right">
        <div class="subscribe"> <a href="shopping_cart.php"><span></span>Ваш заказ</a> </div>
        <div class="socials"> <a href="#" class="facebook-ico">facebook</a> <a href="#" class="twitter-ico">twitter</a> </div>
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
      <h3><center><span>Меню пиццерий Асжана!</span></center></h3>
        <div class="menu-list">
          <ul class="list">
          	<?php 
          	$result = mysql_query("select * from types");
					while ($row = mysql_fetch_array($result)) {
			echo "<li><a href='inside_menu.php?cat_id=".$row['type_id']."'><img src='".$row['image']."' width='180' height='120'>";
            echo "<span><h4>".$row['type']."</h4></span>";
            echo "</a>";
            echo "</li>";
					}
          	?>            
          </ul>
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
          <li><a href="contact.html">Контакты</a></li>
      </ul>
    </div>
    <p class="copy">© Copyright 2014
  </div>
</div>
</body>
</html>