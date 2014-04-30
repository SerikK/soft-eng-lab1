<?php
    require_once 'db_config.php';
	session_start();
	if (isset($_SESSION['id']) && isset($_SESSION['quantity'])){
		$count = count($_SESSION['id']);
		for ($i=0; $i < $count; $i++) { 
			echo "<p>".$_SESSION['id'][$i]."";
			echo "<p>".$_SESSION['quantity'][$i]."";
		}
	}
	
	else {
		echo "<p>string";
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
</head>
<body>
<div id="wrapper">
  <div class="header">
    <div class="shell">
      <h1 id="logo"><a href="index.html"></a></h1>
      <div class="cl">&nbsp;</div>
      <nav id="navigation">
        <ul>
          <li><a href="change_menu.php">Меню</a></li>
          <li><a href="Orders.php">Заказы</a></li>
          <li><a href="change_news.php">Новости</a></li>
        </ul>
      </nav>
      </div>
     
    </div>
    <div class="main">
    	<div class="content"></div>
    		
    </div>
  </div>

    <div id="footer-push">
  </div>
<div id="footer">
  <div class="shell">
    <div class="footer-nav">
      <ul>
        <li><a href="#">Меню</a></li>
        <li><a href="#">Заказы</a></li>
        <li><a href="#">Новости</a></li>
      </ul>
    </div>
    <p class="copy">© Copyright 2014
  </div>
</div>
</body>
</html>