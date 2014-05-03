<?php
session_start();
	require_once 'db_config.php';
if (!isset($_SESSION['admin']) || !$_SESSION['admin']) {
	header("Location: ./index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Пиццерия "АСЖАН"</title>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/x-icon" href="css/images/logo.png">
<link rel="stylesheet" href="css/styleadmin.css" type="text/css" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all">
</head>
<body>
<div id="wrapper">
  <div class="header">
    <div class="shell">
      <h1 id="logo"><a href="admin_aszhan.php"></a></h1>
      <div class="header-right">
      	<?php 
      	if (isset($_SESSION['admin']) && $_SESSION['admin']){
      		echo "<div><h2>Добро пожаловать админ!!<a href='logout.php'></h2><h4>Выйти</a></h4></div>";
      	}
      	?>
      </div>
      <nav id="navigation">
        <ul>
        <li><a href="edit_menu.php">Изменить Меню</a></li>
        <li><a href="orders.php">Принять Заказы</a></li>
        <li><a href="add_news.php">Добавить Новости</a></li>
        </ul>
      </nav>
     </div>
  </div>
    <div  class="main">
      <div class="content">
    <table class="bordered">
        <thead>
          <tr>
          <th><p>#<p></th>
          <th><p>Название блюд</p></th>
          <th><p>Количество</p></th>
          <th><p>Имя<p></th>
          <th><p>адрес</p></th>
          <th><p>телефонный номер</p></th>
          <th><p>Время</p></th>
          </tr>
        </thead>
          <?php
          $result = mysql_query("SELECT * FROM `order`,clients WHERE order.client_id=clients.id");
		  $result2 = mysql_query("SELECT * FROM `order`,dishes WHERE order.dish_id = dishes.id");
		  while ($row = mysql_fetch_array($result2)) {
		  	echo "<tr>";
			echo "<td>".$row['order_id']."</td>";
		  	echo "<td>" . $row['name'] . "</td>";
			echo "<td>" . $row['quantity'] . "</td>";  
		  }
          while ($row = mysql_fetch_array($result)) {
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
            echo "</tr>";
          }
         ?>
    </table>
    </div>
    </div>
     
    
    
  </div>
   <div id="footer-push">
  </div>
<div id="footer">
  <div class="shell">
    <div class="footer-nav">
      <ul>
        <li><a href="edit_menu.php">Изменить Меню</a></li>
        <li><a href="orders.php">Принять Заказы</a></li>
        <li><a href="add_news.php">Добавить Новости</a></li>
      </ul>
    </div>
    <p class="copy">© Copyright 2014
  </div>
</div>
</body>
</html>