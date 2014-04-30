<?php
    require_once 'db_config.php';
	session_start();
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
      <h1 id="logo"><a href="index.html"></a></h1>
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
    	<div class="all_content">
    	<table class="table-div">
    		<thead>
    			<tr>
    				<th>Имя</th>
    				<th>Цена</th>
    				<th>Количество</th>
    			</tr>
    		</thead>
    		<?php 
    			if (isset($_SESSION['id']) && isset($_SESSION['quantity'])){
				$count = count($_SESSION['id']);
				for ($i=0; $i < $count; $i++) { 
				echo "<tr>";
				$result = mysql_query("select * from dishes where id='".$_SESSION['id'][$i]."'");
				while ($row = mysql_fetch_array($result)){
					echo "<td><h3>".$row['name']."</h3></td>";
					echo "<td>".$row['price']."</td>";
					echo "<td>".$_SESSION['quantity'][$i]."</td>";
				}
				echo "</tr>";
		}
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