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
      <div class="table">
    <table class="bordered">
        <thead>
          <tr>
          <th><p>#<p></th>
          <th><p>Имя<p></th>
          <th><p>адрес</p></th>
          <th><p>телефонный номер</p></th>
          <th><p>Время</p></th>
          </tr>
        </thead>
        <tr><?php
          $result = mysql_query("select * from clients limit 5");
          while ($row = mysql_fetch_array($result)) {
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
          }
         ?></tr>
    </table>
    </div>    			</div>
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