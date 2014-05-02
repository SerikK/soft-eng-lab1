<?php
  require_once 'db_config.php';
  session_start();
  $success = "";
  if (isset($_POST['order'])){
  	 $existed = false; 
  	 for ($i=0; $i < count($_SESSION['food_id']); $i++) { 
		   if ($_SESSION['food_id'][$i] == $_POST['id']){
		   		$existed = true;
			   	break;
		   }
	   }
	 if (!$existed){
	 array_push($_SESSION['food_id'], $_POST['id']);
	 }
	 $success = "Ваш продукт успешно добавлен в корзину";
  }
  if (!isset($_SESSION['food_id'])){
  		$_SESSION['food_id'] = array();
  }
	if (isset($_GET['cat_id'])){
		$_SESSION['cat_id'] = $_GET['cat_id'];
	}
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Пиццерия "АСЖАН"</title>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/x-icon" href="css/images/logo.png">
<link rel="stylesheet" href="css/stylemenu.css" type="text/css" media="all">
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
          <li><a href="contact.html">Контакты</a></li>
        </ul>
      </nav>

    </div>

  </div>


  <div class="main">
    <div class="content">
      <h3><center><span>Меню пиццерий Асжана!</span></center></h3>
      	<div class="menu-list" style="width: 100px;">
      	<ul>
        	<?php 
        	$result = mysql_query("select * from types");
			while ($row = mysql_fetch_array($result)) {
				echo "<li>";
				if ($row['type_id'] == $_SESSION['cat_id']){
					echo "<p> ".$row['type']." </p>";
				}
				else {
					echo "<a href='./inside_menu.php?cat_id=".$row['type_id']."'>".$row['type']."</a>";
				}
				echo "</li>";
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
      	<?php echo $success;
      	?>
					<ul>
      		<?php
      		
			$result_dish = mysql_query("select * from dishes where type_id=".$_SESSION['cat_id']."");
				while ($row = mysql_fetch_array($result_dish)){
					echo "<form method='post' action=''>";
					echo "<li style='min-height: 150px; max-height: 200px;'>";
					echo "<p><img src='images/".$row['urlphoto']."' style='width: 150px;height: 120px;'></p>";
					echo "<div class='description' style='min-height:150px;min-width: 150px;'>";
      				echo "<h1>".$row['name']."</h1>";
      				echo "<div class='consist'><p> ".$row['description']."</div><br>";
					echo "<p>".$row['price']."тг";
      				echo "</div>";
      				echo "<div class='order' style='min-height: 130px; min-width: 100px;'>";
					echo "<input name='id' type='hidden' value='".$row['id']."'>";
	      			echo "<button name='order'>Заказать</button>";
      				echo "</div>";
					echo "</li>";
					echo "</form>";
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
        <li><a href="index.php">Главная</a></li>
          <li><a href="aboutus.php">О нас</a></li>
          <li><a href="menu.php">Меню</a></li>
          <li><a href="gallery.php">Галерея</a></li>
          <li><a href="catering.php">Кейтеринг-улсуги</a></li>
          <li><a href="contact.html">Контакты</a></li>
      </ul>
    </div>
    <p class="copy">© Copyright 2014 </p>
  </div>
</div>
</body>
</html>