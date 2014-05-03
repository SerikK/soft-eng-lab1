<?php
  	require_once 'db_config.php';
	session_start();
	$nameErr = $lnameErr = $addressErr = $phonErr = "";
	if (isset($_POST['submit'])){
    	$name = $_POST['name'];
		$surname = $_POST['surname'];
		$address = $_POST['address'];
		$phone = (int)$_POST['phone'];
		if (empty($name)){
			$nameErr = "*";
		}
		if (empty($surname)) {
			$lnameErr = "*";
		}
		if (empty($address)) {
			$addressErr = "*";
		}
		if (empty($phone)) {
			$phonErr = "*";
		}
		if (!(empty($name) && empty($surname) && empty($address) && empty($phone))){
			date_default_timezone_set("Asia/Almaty");	
			$date = date('Y-m-d H-i-s');
	    	$result = mysql_query("INSERT INTO `clients`(`name`,surname, `address`, `phone`, date) VALUES ('$name','$surname','$address',$phone, '$date')");
			$product = $_SESSION['product'];
				for ($i=0; $i < count($product); $i++) {
					$food_id = $product[$i]['id'];
				 	$quant = $product[$i]['quantity'];
				 	$result2 = mysql_query("INSERT INTO `order`(`client_id`, `dish_id`, `quantity`) VALUES ((SELECT id from clients where name='$name'),$food_id,$quant)");	
			 }
			header("Location: success.php");
		}
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Пиццерия "АСЖАН"</title>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/x-icon" href="css/images/logo.png">
<link rel="stylesheet" href="css/stylemenu.css" type="text/css" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all">
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
   		<form method="post" action="">
   		
    	<p>Имя</p><input name='name' />
    	<span class="error"><?php echo $nameErr;?></span>
    	<p>Фамилия</p><input name='surname'/>
    	<span class="error"><?php echo $lnameErr;?></span>
    	<p>Ваш адрес</p><input name='address'/>
    	<span class="error"><?php echo $addressErr;?></span>
    	<p>кв</p><input name='apartment' />
    	<p>Тел.номер</p><input name='phone' type="number" /><br>
    	<span class="error"><?php echo $phonErr;?></span>
    	<input type="submit" name='submit' value="Заказать"/>
    	</form>
    	</div>
   </div>
  </div>
    <div id="footer-push">
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
