<?php
  require_once 'db_config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Пиццерия "АСЖАН"</title>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/x-icon" href="css/images/logo.png">
<link rel="stylesheet" href="css/stylemenu.css" type="text/css" media="all">
<script src="bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>
</head>
<body>

<div id="wrapper">

  <div class="header">

    <div class="shell">
      <h1 id="logo"><a href="index.html"></a></h1>
      <div class="testimonials">

      </div>

      <div class="header-right">
        <div class="subscribe"> <a href="#"><span></span>Subscribe</a> </div>
        <div class="socials"> <a href="#" class="facebook-ico">facebook</a> <a href="#" class="twitter-ico">twitter</a> </div>
        <div class="cl">&nbsp;</div>
      </div>
      <div class="cl">&nbsp;</div>

      <nav id="navigation">
        <ul>
          <li><a href="index.html">Главная</a></li>
          <li><a href="aboutus.html">О нас</a></li>
          <li><a href="menu.html">Меню</a></li>
          <li><a href="gallery.html">Галерея</a></li>
          <li><a href="#">Заказать</a></li>
          <li><a href="#">Кейтеринг-улсуги</a></li>
          <li><a href="#">Контакты</a></li>
        </ul>
      </nav>

    </div>

  </div>


  <div class="main">
    <div class="content">
      <h3><center><span>Меню пиццерий Асжана!</span></center></h3>
      	<div class="menu-list">
      	<ul>
        	<?php 
        	$result = mysql_query("select * from types");
			while ($row = mysql_fetch_array($result)) {
				echo "<li><a href='./inside_menu.php?cat_id=".$row['type_id']."'>".$row['type']."</a></li>";
			}
        	?>
        </ul> 
        	<?php
			// if (isset($_GET['cat_id'])){
			// $id = $_GET['cat_id'];
			// $result_dish = mysql_query("select * from dishes where type_id=".$id."");
				// while ($row = mysql_fetch_array($result_dish)) {
					// echo "".$row['name']."";
				// }
			// }
        	?>
        	
      </div>
      <div class="all_content">
      	<ul>
      		<?php
			if (isset($_GET['cat_id'])){
			$id = $_GET['cat_id'];
			$result_dish = mysql_query("select * from dishes where type_id=".$id."");
				while ($row = mysql_fetch_array($result_dish)){
					echo "<li>";
					echo "<p><img src='".$row['urlphoto']."' style='width: 150px;height: 120px;'></p>";
					echo "<div class='description' style='min-height: 150px;'>";
      				echo "<h1>".$row['name']."</h1>";
      				echo "<div class='consist'><p> ".$row['description']."</div>";
      				echo "</div>";
      				echo "<div class='order' style='min-height: 130px; min-width: 100px;'>";
      				echo "<input name='quantity' value='1'/>";
	      			echo "<button name='order'>Заказать</button>"; 
      				echo "</div>";
					echo "</li";
				}
			}
			?>
      		
      	</ul>
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
        <li><a href="#">Заказать</a></li>
        <li><a href="#">Кейтеринг-услуги</a></li>
        <li><a href="#">Контакты</a></li>
      </ul>
    </div>
    <p class="copy">© Copyright 2014 </p>
  </div>
</div>
</body>
</html>